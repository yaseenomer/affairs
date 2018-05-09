<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
<div class="page-content">
    <div class="page-header">
        <div class="header-title">
            <span class="h-main">الشئون العلمية</span>  /
            <span class="h-sub">  تعديل بيانات مصروف  </span>
        </div>        
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
            <div class="portlet-body form">
                <form action="<?= base_url() ?>Expenses_type_cont/expensesupdateItem" method="post" role="form" >
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="item"> رقم المصروف </label>
                                    <input name="EXPENS_id" value="<?=$expense->EXPENS_ID?>" type="text" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="item"> اسم المصروف  </label>
                                    <input name="EXPENS_name" value="<?=$expense->EXPENS_NAME?>" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input name="" type="submit" class="btn btn-success" value="حفظ">
                                    <a href="<?=base_url();?>Expenses_type_cont" class="btn btn-default"> رجوع </a>
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