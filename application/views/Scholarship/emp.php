<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/4/2018
 * Time: 1:06 PM
 */

$this->load->view('app/layout/parts/top'); ?>

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-header">
            <div class="header-title">
                <span class="h-main">   الدورات     </span>
                <span class="h-sub">
                </span>
            </div>
            <div class="header-action">
            </div>
        </div>
        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">

                        </div>

                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <?php flash($error,'danger')?>

                            <form method="post" action="<?=base_url('affirs/Scholarship/create')?>">

                                <div class="row">
                                    <input type="hidden" value="<?=$program->PROG_ID?>" name="PROG_ID">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item">الكلية </label>
                                            <input type="text" class="form-control" value="<?=$coldeps->LOC_NAME?>" readonly>
                                            <label for="item">القسم  </label>
                                            <input type="text" class="form-control" value="<?=$coldeps->DEP_NAME?>" readonly>
                                            <label for="item"> نوع الابتعاث </label>
                                            <input type="text" class="form-control" value="<?=$program->PROG_ARAB_NAME?>" readonly>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item">اسم الاستاذ </label>
                                            <select name="EMP_NO"  id="emp" class="form-control" style="width:100%">
                                                <option value="">اختار من القائمة</option>
                                                <?php foreach ($emps as $emp) { ?>
                                                    <option value="<?=$emp->EMP_NO?>"><?php echo iconv('windows-1256','utf-8',$emp->EMP_NAME)?> </option>
                                                <?php }  ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <input type="submit" value="إستمرار " class="btn btn-success">
                                    </div>
                                </div>




                            </form>



                        </div>


                    </div>
                </div>

            </div>
        </div>

        <?php $this->load->view('app/layout/parts/footer'); ?>












