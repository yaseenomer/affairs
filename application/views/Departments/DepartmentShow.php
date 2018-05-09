<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">الاقسام</span>
           </div>
	</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="portlet light bordered" id="vue-5">
            <div class="portlet-title">
                <div class="actions">
                        <a href="<?=base_url()?>Departments_con/AddDepart" class="btn green btn-sm">
                            اضافة قسم جديد</a>
                </div>
            </div>
<div class="portlet-body form">
    <form role="form" action="Departments_con/" method="post">
        <div class="form-body">
            <div class="row">
			<?php if (isset($Adddep)) { ?>
                <div class="alert alert-success">
                <?php echo $Adddep ?>
                </div>
                <?php } ?>
				<?php if (isset($editdep)) { ?>
                <div class="alert alert-success">
                <?php echo $editdep ?>
                </div>
                <?php } ?>
				<?php if (isset($deletdep)) { ?>
                <div class="alert alert-success">
                <?php echo $deletdep ?>
                </div>
                <?php } ?>
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead align="center">
                            <tr align="center">
                                <th> رقم القسم  </th>
                                <th>اسم القسم </th>
                                <th>تحكم </th>
                            </tr>
                        </thead>
                        <tbody>
						<?php foreach ($collAll as $all) { ?>
                            <tr style="background-color: rgba(0,0,0,0.2);font-size: larger ; font-weight: bold">
                                <td></td>
								<td align="center"><?= $all->LOC_NAME ?></td>
                                <td></td>
                            </tr>
                            <?php
                        $bl = $this->Department_mod->getDepartWherecoll($all->LOC_NO);
                        foreach ($bl as $row){ ?>
                            <tr>
                                <td><?= $row->DEP_ID ?></td>
                                <td><?= $row->DEP_NAME ?></td>
								<td>
								<div class="btn-group" style="margin-left:30px">
								<a href="<?=base_url()?>Departments_con/DepartmentEdit/<?= $row->DEP_ID ?>/<?= $all->LOC_NO ?>">
								<i class="fa fa-edit text-primary"></i>
									  </a> 
								</div>
								<div class="btn-group" style="margin-right:30px">
								<a href="<?=base_url()?>Departments_con/Departmentdelete/<?= $row->DEP_ID ?>/<?= $all->LOC_NO ?>">
								<i class="fa fa-trash-o  text-danger"></i>
									    </a>
								</div>
								</td>
								<?php } } ?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</form>
</div>
		</div>
	</div>
</div>
<?php $this->load->view('app/layout/parts/footer'); ?>
    