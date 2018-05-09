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
                            <div class="col-md-2 col-md-offset-10">
                                <a href="<?php echo base_url('affirs/courses/create') ?>"
                                   class="btn btn-success pull-right">إضافة كورس / دورة </a><br><br>

                            </div>
                            <div class="col-md-12">
                                <?php if (isset($delete)) { ?>
                                    <div class="alert alert-success">
                                        <?php echo $delete ?>
                                    </div>
                                <?php } ?>
                                <?php if (isset($insert)) { ?>
                                    <div class="alert alert-success">
                                        <?php echo $insert ?>
                                    </div>
                                <?php } ?>
                            </div>


                            <table id="course" class="table table-striped table-bordered" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>
                                        رقم الدورة
                                    </th>
                                    <th>
                                        اسم البرنامج
                                    </th>
                                    <th>
                                        اسم الدولة
                                    </th>
                                    <th>
                                        عمليات
                                    </th>

                                </tr>
                                </thead>
                                <tbody class="bank">
                                <?php foreach ($courses as $course) { ?>
                                    <tr>
                                        <td><?= $course->COUR_ID ?></td>
                                        <td> <?= $course->PROG_ARAB_NAME ?></td>
                                        <td> <?=  iconv("windows-1256" , "utf-8",$course->COUNTRY_NAME) ?></td>

                                        <td>
                                            <a href="<?php echo base_url('affirs/courses/show/') . $course->COUR_ID ?>"
                                               class="fa fa-eye text-primary" style="float: right"></a>


                                        </td>

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php $this->load->view('app/layout/parts/footer'); ?>


        <script>
            $(document).ready(function () {
                $('#course').DataTable();
            });

        </script>










