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
                <form action="<?= base_url()?>Scholarships_Expenses_cont/expensesItems" method="post" role="form" >
                    <div class="form-body">
					<div class="row">
						<div class="form-group col-md-6">
						    <label for="item">اختر اسم المبتعث </label>
							<select class="form-control" name="emp_name">
							<?php foreach ($Scholars as $scholar) { ?>
							<option value="<?=$scholar->EMP_NO?>"><?=iconv('windows-1256','utf-8',$scholar->EMP_NAME)?></option>
							<?php } ?>
							</select>
							<input type="hidden" name="scholar_id" value="<?=$scholar->SCHOLAR_ID?>">
							<input type="hidden" name="year_id" value="<?=$scholar->YEAR_ID?>">
						</div>
						<div class="form-group col-md-6">
						    <label for="item"> اختر نوع المصروف  </label>
							<select class="form-control" name="expense_id">
							<?php foreach ($Expenses as $expen) { ?>
							<option value="<?=$expen->EXPENS_ID?>"><?=$expen->EXPENS_NAME?></option>
							<?php } ?>
							</select>
						</div>
						<div class="form-group col-md-6">
						    <label> اختر نوع السداد المناسب : </label>
							<div class="inline">
							<input type="radio" name="expence_typ" id="item" value="1">
							<label for="item">سداد من داخل الجامعة </label>
							</div>
							<div class="inline">
							<input type="radio" name="expence_typ" id="item2" value="2">
							<label for="item2">سداد من وزارة التعليم العالي</label>
							</div>
						</div>
						<div class="form-group col-md-6">
                            <label> تاريخ الصرف  </label>
							<input name="expense_date" type="date" class="form-control">
						</div>
						<div class="form-group col-md-6">
                            <label for="item"> العملة  </label>
							<select class="form-control" name="currency_id">
							<?php foreach ($Currencies as $currency) { ?>
							<option value="<?=$currency->CURRENCY_ID?>"><?=$currency->CURRENCY_NAME?></option>
							<?php } ?>
							</select>
						</div>
						<div class="form-group col-md-6">
                            <label for="item"> الملبغ  </label>
							<input type="text" class="form-control" name="amounte">
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name="" type="submit" class="btn btn-success" value="حفظ">
                                <a href="<?=base_url();?>Scholarships_Expenses_cont/Addexpenses" class="btn btn-default"> رجوع </a>
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