<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/4/2018
 * Time: 1:06 PM
 */

$this->load->view('app/layout/parts/top');main_header(array());canvas_header('العنوان') ?>

    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#home" data-toggle="tab">
                        <i class="fa fa-user-o"> </i>البيانات الشخصية
                    </a>
                </li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="home">
                    <?php  echo form_open('affirs/Scholarship/insert1'); ?>
                    <div class="row">
                        <input type="hidden" value="<?= $program->PROG_ID ?>"
                               name="PROG_ID">

                        <div class="form-group col-md-6">
                            <label>الكلية</label>
                            <input type="text" class="form-control"
                                   value="<?= $coldeps->LOC_NAME ?>" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label>القسم</label>
                            <input type="text" class="form-control"
                                   value="<?= $coldeps->DEP_NAME ?>" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label>إسم الاستاذ</label>
                            <input type="text" class="form-control"
                                   value="<?php echo iconv('windows-1256', 'utf-8', $emp->EMP_NAME) ?>"
                                   readonly>
                            <input type="hidden" value="<?= $emp->EMP_NO ?>"
                                   name="EMP_NO">
                        </div>

                        <div class="form-group col-md-6">
                            <label> تاريخ التعيين </label>
                            <input type="text" class="form-control"
                                   value="<?= date('Y-m-d', strtotime($emp->HIRE_DATE)) ?>"
                                   readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label>رقم الهاتف </label>
                            <input type="text" class="form-control"
                                   value="<?= $emp->REL_PHONE ?>" >
                        </div>

                        <div class="form-group col-md-6">
                            <label> البريد الالكتروني </label>
                            <input type="text" class="form-control"
                                   value="<?php echo iconv('windows-1256', 'utf-8', $emp->E_MAIL) ?>">
                        </div>
                        <?php $this->session->set_userdata('phone',$emp->REL_PHONE);
                              $this->session->set_userdata('email',$emp->E_MAIL);
                        ?>

                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="حفظ وإستمرار  ">
                        </div>
                    </div>
                    <?php  echo form_close() ?>
                </div>

            </div>
        </div>
    </div>

<?php  canvas_footer(); $this->load->view('app/layout/parts/footer'); ?>