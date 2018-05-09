<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-header">
            <div class="header-title">
                <span class="h-main"> المستخدمين</span>  /
                <span class="h-sub"> اضافة مستخدم</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="portlet-title">
                    <?php if (isset($add)) { ?>
                        <div class="alert alert-success">
                            <?php echo $add ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="portlet-title">
                    <?php if (isset($error)) { ?>
                        <div class="alert alert-success">
                            <?php echo $error ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="portlet-title">
                    <?php if (isset($exist)) { ?>
                        <div class="alert alert-success">
                            <?php echo $exist ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="portlet light bordered">
                    <div class="portlet-body form">
                        <form action="<?php echo base_url()?>authi/adduser" method="post" role="form" >
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="item">إختر الكلية </label>
                                            <select name="collge" type="text" class="form-control" id="collge_id1">
                                                <?php foreach ($coll as $collage) { ?>
                                                    <option value="<?= $collage->LOC_NO ?>"> <?= $collage->LOC_NAME ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="item">إختر المجموعة </label>
                                            <select name="group" type="text" class="form-control" id="group_id1">
                                                <?php foreach ($groups as $grp) { ?>
                                                    <option value="<?= $grp->GROUP_ID ?>"> <?= $grp->GROUP_NAME ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group <?=form_error('fullname')? ' has-error': ''?>">
                                            <label for="item"> الإسم كاملاً </label>
                                            <input name="fullname" type="text" class="form-control" id="fullname_id">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group<?=form_error('empno')? ' has-error': ''?>">
                                            <label for="item"> الرقم الوظيفي </label>
                                            <input name="empno" type="text" class="form-control" id="empno_id">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group<?=form_error('logname')? ' has-error': ''?>">
                                            <label for="item"> إسم الدخول </label>
                                            <input name="logname" type="text" class="form-control" id="logname_id">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group<?=form_error('pwd')? ' has-error': ''?>">
                                            <label for="item"> كلمة المرور </label>
                                            <input name="pwd" type="password" class="form-control" id="pwd_id">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group<?=form_error('passconf')? ' has-error': ''?>">
                                            <label for="item"> إعادة كلمة المرور</label>
                                            <input name="passconf" type="password" class="form-control" id="passconf_id">
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="" type="submit" class="btn btn-success" value="حفظ المستخدم">
                                            <input name="" type="reset" class="btn btn-default" value="الغاء">
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
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="portlet light bordered">
                    <?php if($gau){ ?>
                    <table class="table table-bordered table-hover" id="show">
                        <tr>
                            <th>#</th>
                            <th>رقم المستخدم</th>
                            <th>إسم الدخول</th>
                            <th>إسم الكامل</th>
                            <th>الرقم الوظيفي</th>
                            <th>إسم الكلية</th>
                            <th>الصلاحية</th>
                            <th>إسم المجموعة</th>
                            <th style="width:25px;">&nbsp;</th>
                            <th style="width:25px;">&nbsp;</th>
                            <th style="width:25px;">&nbsp;</th>
                        </tr>
                        <tbody>
                        <?php
                        $i = 0;
                        foreach($gau as $l1){
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $l1->USR_NO ?></td>
                                <td><?php echo $l1->USR_NAME ?></td>
                                <td><?php echo $l1->FULL_NAME ?></td>
                                <td><?php echo $l1->OFFICIAL_ID ?></td>
                                <td><?php echo $l1->LOC_NAME ?></td>
                                <td><?php echo $l1->USR_PERMIT ?></td>
                                <td><?php echo $l1->GROUP_NAME ?></td>
                                <td><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                    </a></td>
                                <td><a href="#" data-toggle="modal" id="edit"> <i class="fa fa-pencil-square-o" aria-hidden="true" style="color:lightblue"></i>  </a></td>
                                <td> <a href="<?php echo base_url()?>authi/delete/<?php echo $l1->USR_NO ?>"
                                        onclick="javascript:return confirm('هل انت متاكد من عملية الحذف')">
                                        <i class="fa fa-times" aria-hidden="true" style="color:red"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        }
                        ?>
                        </tbody>
                    </table>
                    <div>
                        <?php //echo $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('app/layout/parts/footer'); ?>
        <script type="text/javascript">
            $(function(){
                $('#lev1_id').change(function(){
                    $('#lev2_id').val($('#lev1_id').val());
                });

                $('#show tr #edit').on('click', function(ev) {
                    //$('#ev').preventDefault();
                    $('#myModal').modal({
                        show: 'true'
                    });
                });
            });
        </script>
