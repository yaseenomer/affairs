<?php $this->load->view('app/layout/parts/top') ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-header">
                <div class="header-title">
                    <span class="h-main">الشئون العلمية</span>  /
                    <span class="h-sub">المرشحين للدورات</span>
                </div>

            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="portlet light bordered">
                        <div class="portlet-body form">
                            <form action="<?=base_url('affirs/Candidates/insert')?>" method="post" role="form" >
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                               <div class="form-group">
                                                <label for="item">الدورة </label>
                                                <select name="COUR_ID"  class="form-control"  style="width:100%">
                                                    <option>اختار من القائمة </option>

                                                    <?php foreach ($courses as $cours) { ?>
                                                    <option value="<?=$cours->COUR_ID?>"><?=$cours->PROG_ARAB_NAME?> </option>
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row end -->
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <label for="item">الموظف </label>
                                                <select name="EMP_NO"  class="form-control"  style="width:100%">
                                                    <option>اختار من القائمة </option>
                                                    <?php foreach ($emps as $emp) { ?>
                                                    <option value="<?=$emp->EMP_NO?>"><?php echo iconv('windows-1256','utf-8',$emp->EMP_NAME)?> </option>
                                                    <?php }  ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- row end -->
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group <?=form_error('REL_PHONE')? ' has-error': ''?>">
                                                <label for="item">الهاتف </label>
                                                <input name="REL_PHONE" type="text" class="form-control" >
                                                <?=form_error('REL_PHONE')? '<span class="help-block">'.form_error('REL_PHONE').'</span>' : ''?>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- row end -->
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group <?=form_error('E_MAIL')? ' has-error': ''?>">
                                                <label for="item"> البريد الالكتروني </label>
                                                <input name="E_MAIL" type="text" class="form-control" >
                                                <?=form_error('E_MAIL')? '<span class="help-block">'.form_error('E_MAIL').'</span>' : ''?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <input name="" type="submit" class="btn btn-success" value="حفظ">
                                                <input name="" type="reset" class="btn btn-default" value="رجوع">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row end -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
<?php $this->load->view('app/layout/parts/footer'); ?>