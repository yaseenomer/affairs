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
                <span class="h-main">   البرامج    </span>
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
                                <a href="<?php echo base_url('affirs/programs/create')?>" class="btn btn-success pull-right">إضافة برنامج </a><br><br>

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




                            <table id="programse" class="table table-striped table-bordered" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>
                                      رقم البرنامج
                                    </th>
                                    <th>
                                        اسم البرنامج باللغة العربية
                                    </th>
                                    <th>
                                        اسم البرنامج باللغة الانجليزية
                                    </th>

                                    <th>
                                        عمليات
                                    </th>

                                </tr>
                                </thead>
                                <tbody class="bank">
                                <?php foreach ($programs  as $program) { ?>
                                    <tr>
                                        <td><?= $program->PROG_ID ?></td>
                                        <td> <?= $program->PROG_ARAB_NAME ?></td>
                                        <td><?= $program->PROG_ENG_NAME?></td>

                                        <td>
                                            <a href="<?php echo base_url('affirs/programs/show/').$program->PROG_ID?>"   class="fa fa-eye text-primary" style="float: right"></a>





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
                $('#programse').DataTable();
            });

        </script>










