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
                <span class="h-main"> عرض تفاصيل   <?=$program->PROG_ARAB_NAME?>     </span>
                <span class="h-sub">
                </span>
            </div>
            <div class="header-action">
            </div>
        </div>
        <div class="row" id="apprve">

            <div class="col-md-10 col-md-offset-1">

                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">

                        </div>

                    </div>
                    <div class="portlet-body">

                            <div class="row">
                                <div class="col-md-6 col-md-offset-5">
                                    <a href="<?php echo base_url('affirs/programs/edit/').$program->PROG_ID?>" class="btn btn-success" >   <i class="fa fa-edit "></i> تعديل </a>
                                    <a href="<?php echo base_url('affirs/programs/delete/').$program->PROG_ID?>" class="btn btn-danger">  <i class="fa fa-trash-o "></i> حزف </a>
                                    <template v-if="<?=$program->PROG_STATUS?> == 0">
                                        <a href="<?php echo base_url('affirs/programs/approve/').$program->PROG_ID?>" class="btn btn-primary">  <i class="fa fa-check "></i> تصديق </a>
                                    </template>
                                    <template v-else="<?=$program->PROG_STATUS?> == 1">
                                        <a href="<?php echo base_url('affirs/programs/desapprove/').$program->PROG_ID?>" class="btn btn-warning">  <i class="fa fa-remove "></i> إلغاء تصديق  </a>
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

                            <ul class="list-group">
                                <li class="list-group-item">
                                    <i class="fa fa-circle-o  font-purple"></i> رقم البرنامج
                                    <span class="pull-right font-green "><?= $program->PROG_ID ?> </span>
                                </li>

                                <li class="list-group-item">
                                    <i class="fa fa-circle-o  font-green"></i> اسم البرنامج باللغة العربية
                                    <span class="pull-right font-green "><?= $program->PROG_ARAB_NAME ?> </span>
                                </li>

                                <li class="list-group-item">
                                    <i class="fa fa-circle-o  font-yellow"></i> اسم البرنامج باللغة الانجليزية
                                    <span class="pull-right font-green"><?= $program->PROG_ENG_NAME?></span>
                                </li>

                                <li class="list-group-item">
                                    <i class="fa fa-circle-o  font-blue"></i> الكلية
                                    <span class="pull-right font-green "> <?= $program->LOC_NAME?> </span>
                                </li>

                                <li class="list-group-item">
                                    <i class="fa fa-circle-o  font-red"></i> القسم
                                    <span class="pull-right font-green "><?= $program->DEP_NAME?> </span>
                                </li>

                                <li class="list-group-item">
                                    <i class="fa fa-circle-o  font-blue-soft"></i>  نوع التدريب
                                    <span class="pull-right font-green"><?= $program->PROG_TYP_NAME?> </span>
                                </li>

                                <li class="list-group-item">
                                    <i class="fa fa-circle-o font-yellow-lemon"></i> حالة البرنامج
                                    <span class="pull-right font-green "><?= $program->PROG_STATUS?> </span>
                                </li>

                                <li class="list-group-item">
                                    <i class="fa fa-circle-o  font-red-sunglo"></i>  نبذة عن البرنامج
                                    <span class="pull-right font-green "><?= $program->PROG_INTRODUCTION?> </span>
                                </li>

                                <li class="list-group-item">
                                    <i class="fa fa-circle-o  font-blue-chambray"></i> موجز البرنامج
                                    <span class="pull-right font-green "><?= $program->PROG_SUMMARY?> </span>
                                </li>

                                <li class="list-group-item">
                                    <i class="fa fa-circle-o  font-red-intense"></i>  اهداف البرنامج
                                    <span class="pull-right  font-green"><?= $program->PROG_OBJECTIVES?> </span>
                                </li>

                                <li class="list-group-item">
                                    <i class="fa fa-circle-o  font-green-jungle"></i> نسبة ساعات النظري
                                    <span class="pull-right font-green "><?= $program->THEORY_HOURS?> </span>
                                </li>

                                <li class="list-group-item">
                                    <i class="fa fa-circle-o  font-yellow-casablanca"></i> نسبة ساعات العملي
                                    <span class="pull-right font-green "><?= $program->PRACTICAL_HOURE?> </span>
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
            $(document).ready(function () {
                $('#program').DataTable();
            });

            new Vue({
                el:'#apprve'
            });

        </script>










