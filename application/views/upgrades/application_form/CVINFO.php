<?php
$this->load->view('app/layout/parts/top'); ?>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-header">
            <div class="header-title">
                <span class="h-main">تعديل بيانات الموظف  / <?= iconv('windows-1256','utf-8',$info->EMP_TEC_NAME)?>  </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="portlet light">
                    <div class="portlet-body">
                        <form action="<?= base_url('authiTeacher/update') ?>" method="post">

                            <label for="item" class="h-main">البيانات الاساسية</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="item">اسم الدخول</label>
                                        <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="item"> الاسم كامل</label>
                                        <input type="text" class="form-control" name="full_name"  value="<?= iconv('windows-1256','utf-8',$info->EMP_TEC_NAME)?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="item"> اسم المجموعة</label>
                                        <input type="hidden" name="grp_id"  value="<?= $info->GROUP_ID?>">
                                        <input type="text" class="form-control" value="<?= $info->GROUP_NAME?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->

                            <hr style="border:1px solid black">
                            <label for="item" class="h-main">التعديلات</label>
                            <hr style="border:1px solid black">

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <div class="form-group">
                                        <label>الكلية </label>
                                        <select name="LOC_NO"  class="form-control browser-default" id="collage">
                                            <option value="<?= $info->LOC_NO ?>"><?= $info->LOC_NAME ?></option>
                                            <?php  foreach ($coll as $col ) { ?>
                                                <option value="<?= $col->LOC_NO ?>"><?= $col->LOC_NAME ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="item">القسم </label>
                                        <?php if($info->DEP_ID == ''){
                                            echo "(الموظف ليس مضاف الى قسم الرجاء التعديل)" ; ?>
                                            <select name="DEP_ID"  class="form-control" id="dep">
                                            </select>
                                        <?php }else{ ?>
                                            <select name="DEP_ID"  class="form-control" id="dep">
                                                <option value="<?= $info->DEP_ID ?>"><?= $info->DEP_NAME ?></option>
                                            </select>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="item"> البريد الالكتروني </label>
                                        <input type="text" class="form-control" name="email"  value="<?= $info->EMAIL?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="submit"  class="btn btn-success" value="حفظ  التعديل ">
                                </div>
                                <a href="<?= base_url().'authiTeacher' ?>">
                                    <input class="btn btn-default" value="رجوع">
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('app/layout/parts/footer'); ?>









