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
                <span class="h-main"> عرض تفاصيل     </span>
                <span class="h-sub">
                </span>
            </div>
            <div class="header-action">
            </div>
        </div>
        <div class="row" id="courses">

            <div class="col-md-10 col-md-offset-1">

                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">

                        </div>

                    </div>
                    <div class="portlet-body">

                        <div class="row">
                            <div class="col-md-6 col-md-offset-5">
                                <a href="<?php echo base_url('affirs/courses/edit/').$course->COUR_ID?>" class="btn btn-success" >   <i class="fa fa-edit "></i> تعديل </a>
                                <a href="<?php echo base_url('affirs/courses/delete/').$course->COUR_ID?>" class="btn btn-danger">  <i class="fa fa-trash-o "></i> حزف </a>
                                <template v-if="<?=$course->COUR_STATUS?> == 0">
                                    <a href="<?php echo base_url('affirs/courses/approve/').$course->COUR_ID?>" class="btn btn-primary">  <i class="fa fa-check "></i> تصديق </a>
                                </template>
                                <template v-else="<?=$course->COUR_STATUS?> == 1">
                                    <a href="<?php echo base_url('affirs/courses/desapprove/').$course->COUR_ID?>" class="btn btn-warning">  <i class="fa fa-remove "></i> إلغاء تصديق  </a>
                                </template>
                            </div>
                        </div>
                        <br><br>


                        <div class="row">



                            <div class="col-md-10 col-md-offset-1">

                                <?php if (isset($update)) { ?>
                                    <div class="alert alert-success">
                                        <?php echo $update ?>
                                    </div>
                                <?php } ?>

                                <?php if (isset($approve)) { ?>
                                    <div class="alert alert-success">
                                        <?php echo $approve ?>
                                    </div>
                                <?php } ?>

                                <?php if (isset($desapprove)) { ?>
                                    <div class="alert alert-success">
                                        <?php echo $desapprove ?>
                                    </div>
                                <?php } ?>

                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <i class="fa fa-circle-o  font-purple"></i> رقم الكورس
                                        <span class="pull-right font-purple "><?= $course->COUR_ID ?> </span>
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fa fa-circle-o  font-green"></i> تاريخ بداية الدورة
                                        <span class="pull-right font-purple "><?= $course->COUR_START_DATE ?> </span>
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fa fa-circle-o  font-yellow"></i>تاريخ النهاية
                                        <span class="pull-right font-purple"><?= $course->COUR_END_DATE ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fa fa-circle-o  font-blue"></i>زمن بداية الدورة
                                        <span class="pull-right font-purple"><?= $course->START_TIME ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fa fa-circle-o  font-red"></i>زمن النهاية
                                        <span class="pull-right font-purple"><?= $course->END_TIME ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fa fa-circle-o  font-yellow-lemon"></i> الحالة

                                        <template v-if="<?= $course->COUR_STATUS ?> == 1">
                                            <span class="pull-right font-green">مجاز </span>
                                        </template>
                                        <template v-else="<?= $course->COUR_STATUS ?> != 1">
                                            <span class="pull-right font-purple">غير مجاز </span>
                                        </template>

                                    </li>
                                    <li class="list-group-item">
                                        <i class="fa fa-circle-o  font-yellow"></i> عدد المقاعد
                                        <span class="pull-right font-purple"><?= $course->COUR_SEATS ?></span>
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fa fa-circle-o  font-green-meadow"></i> الدولة
                                        <span class="pull-right font-purple"><?= $course->COUNTRY_NO ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fa fa-circle-o  font-red-sunglo"></i> الجهة \ في حالة من خارج الجامعة
                                        <span class="pull-right font-purple "><?= $course->COUR_PLACE ?></span>
                                    </li>

                                </ul>

                            </div>

                        </div>


                    </div>
                </div>


            </div>
        </div>

        <?php $this->load->view('app/layout/parts/footer'); ?>

        <script>
            new Vue({
                el:'#courses'
            });

        </script>













