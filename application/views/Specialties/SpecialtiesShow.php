<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">التخصصات</span>
           </div>
	</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="portlet light bordered" id="vue-5">
            <div class="portlet-title">
                <div class="actions">
                        <a href="<?=base_url()?>Specialties_con/AddSpeci" class="btn green btn-sm">
                            اضافة تخصص جديد</a>
                </div>
            </div>
<div class="portlet-body form">
    <form role="form" action="Specialties_con/" method="post">
        <div class="form-body">
            <div class="row">
			<?php if (isset($Addspc)) { ?>
                <div class="alert alert-success">
                <?php echo $Addspc ?>
                </div>
                <?php } ?>
				<?php if (isset($editspc)) { ?>
                <div class="alert alert-success">
                <?php echo $editspc ?>
                </div>
                <?php } ?>
				<?php if (isset($deletspc)) { ?>
                <div class="alert alert-success">
                <?php echo $deletspc ?>
                </div>
                <?php } ?>
                <div class="col-md-12">
                    <table class="table">
                        <thead align="center">
                            <tr align="center">
                                <th> اسم القسم   </th>
                                <th>اسم التخصص </th>
								<th>وصف التخصص  </th>
                                <th>تحكم </th>
                            </tr>
                        </thead>
                        <tbody>
						<?php foreach ($colall as $all) { ?>
                            <tr style="background-color: rgba(0,0,0,0.2);font-size: larger ; font-weight: bold">
                                <td></td>
								<td align="center"><?= $all->LOC_NAME ?></td>
                                <td></td>
                            </tr>
                            <?php
							$bl = $this->Specialties_mod->getdepWhereloc($all->LOC_NO);
                            foreach ($bl as $row){ ?>
                            <tr>
                                <td><?= $row->DEP_NAME ?></td>
							<?php
							$sl= $this->Specialties_mod->getSpeciWheredepcol($all->LOC_NO,$row->DEP_ID);
                            foreach ($sl as $ro){ ?>
								<td><?= $ro->SP_NAME ?></td>
								<td><?= $ro->SP_DESC ?></td>
								<td>
								<div class="btn-group" style="margin-left:20px">
								<a href="<?=base_url()?>Specialties_con/SpecialtieEdit/<?= $ro->SP_ID ?>/<?= $row->DEP_ID ?>/<?= $all->LOC_NO ?>">
								<i class="fa fa-edit text-primary"></i>
									  </a> 
								</div>
								<div class="btn-group" style="margin-right:20px">
								<a href="<?=base_url()?>Specialties_con/Specialtiedelete/<?= $ro->SP_ID ?>/<?= $row->DEP_ID ?>/<?= $all->LOC_NO ?>">
								<i class="fa fa-trash-o  text-danger"></i>
									    </a>
								</div>
								</td>
							</tr>
						<?php } } } ?>
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