<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
<div class="page-content">
    <div class="page-header">
        <div class="header-title">
            <span class="h-main"> الشئون العلمية </span>  /
            <span class="h-sub"> المصروفات للمبتعثيين </span>
        </div>
	</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="portlet light bordered" id="vue-5">
            <div class="portlet-title">
                <div class="actions">
                    <a href="<?=base_url()?>Scholarships_Expenses_cont/Addexpenses" class="btn green btn-sm"> اضافة مصروف جديد </a>
                </div>
            </div>
<div class="portlet-body form">
    <form role="form" action="<?=base_url()?>Scholarships_Expenses_cont" method="post">
        <div class="form-body">
            <div class="row">
			<?php if (isset($addexpen)) { ?>
                <div class="alert alert-success">
                <?php echo $addexpen ?>
                </div>
                <?php } ?>
				<?php if (isset($editexpen)) { ?>
                <div class="alert alert-success">
                <?php echo $editexpen ?>
                </div>
                <?php } ?>
				<?php if (isset($deleteexpen)) { ?>
                <div class="alert alert-success">
                <?php echo $deleteexpen ?>
                </div>
                <?php } ?>
                <div class="col-md-12">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" > 
                        <thead align="center">
                            <tr align="center">
                                <th> رقم الاستمارة </th>
                                <th> اسم المبتعث  </th>
                                <th> سنة الابتعاث  </th>
                                <th> اسم المصروف  / نوع المصروف  </th>
                                <th> نوع السداد  </th>
                                <th> تاريخ الصرف  </th>
                                <th> العملة  </th>
                            </tr>
                        </thead>
                        <tbody>
						<?php foreach ($Expenall as $all) { ?>
                            <tr>
                                <td><?= $all->SCHOLAR_ID ?></td>
								<td><?= iconv('windows-1256','utf-8',$all->EMP_NAME) ?></td>
                                <td><?= $all->YEAR_ID ?></td>
                                <td><?= $all->EXPENS_NAME ?></td>
                                <td><?php if($all->EXPENS_TYPE == 1){
                                    echo " من داخل الجامعة ";}else{echo "من وزارة التعليم العالي ";}  ?></td>
                                <td><?= $all->EXPENS_DATE ?></td>
                                <td><?= $all->CURRENCY_NAME ?></td>
                                <!-- <td>
								<div class="btn-group" style="margin-left:30px">
								<a href="<?=base_url()?>Scholarships_Expenses_cont/Updateexpenses/<?= $all->EXPENS_ID ?>">
								<i class="fa fa-edit text-primary"></i></a> 
								</div>
								<div class="btn-group" style="margin-right:30px">
								<a href="<?=base_url()?>Scholarships_Expenses_cont/deleteexpenses/<?= $all->EXPENS_ID ?>">
								<i class="fa fa-trash-o  text-danger"></i></a>
								</div>
								</td> -->
                            </tr>
							<?php } ?>
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
</div>
</div>
<?php $this->load->view('app/layout/parts/footer'); ?>
 <script type="text/javascript">
$( document ).ready(function(){
	$('#example').DataTable();
	});
</script>
    