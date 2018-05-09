<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
<div class="page-content">
    <div class="page-header">
        <div class="header-title">
            <span class="h-main">الشئون العلمية</span>  /
            <span class="h-sub"> اضافة مصروف جديد للمبتعث </span>
        </div>        
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
            <div class="portlet-body form">
                <form action="<?= base_url()?>Scholarships_Expenses_cont/getScholar" method="post" role="form" >
                    <div class="form-body">
					<div class="row">
					    <div class="form-group col-md-6">
						    <label for="item"> اختر نوع البعثة </label>
							<select class="form-control" name="prog_typ">
							<?php foreach ($programs as $prog) { ?>
							<option value="<?=$prog->PROG_ID?>"><?=$prog->PROG_ARAB_NAME?></option>
							<?php } ?>
							</select>
						</div>
						<div class="form-group col-md-6">
						    <label for="item"> اختر سنة البعثة  </label>
							<select class="form-control" name="year_id">
							<?php foreach ($years as $year) { ?>
							<option value="<?=$year->YEAR_ID?>"><?=$year->YEAR_NAME?></option>
							<?php } ?>
							</select>
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name="" type="submit" class="btn btn-success" value="استمرار">
                                <a href="<?=base_url();?>Scholarships_Expenses_cont" class="btn btn-default"> رجوع </a>
                            </div>
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