<?php
/**
 * Created by PhpStorm.
 * User: sarah
 * Date: 5/28/2018
 * Time: 10:02 AM
 */


$this->load->view('app/layout/parts/top'); ?>

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-header">
            <div class="header-title">
                <span class="h-main">   المقدمين للترقي    </span>
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

                            <?php if (isset($insert)) { ?>
                                <div class="alert alert-success">
                                    <?php echo $insert ?>
                                </div>
                            <?php } ?>

                            <?php if (isset($update)) { ?>
                                <div class="alert alert-success">
                                    <?php echo $update ?>
                                </div>
                            <?php } ?>
                            <?php if (isset($delete)) { ?>
                                <div class="alert alert-success">
                                    <?php echo $delete ?>
                                </div>
                            <?php } ?>

                            <table id="group" class="table table-striped table-bordered table-advance" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>
                                        اسم الاستاذ
                                    </th>

                                   <!-- <th>
                                      حالة البعثة
                                    </th>-->

                                </tr>
                                </thead>
                                <tbody >
                                <?php $x = 1; foreach ($alls as $all) { ?>
                                    <tr>
                                        <td><?php echo $x++?></td>

                                        <td>
                                            <a  href="<?=base_url("upgrades/Application_Form/show/$all->APP_ID") ?>">
                                              <?= iconv('windows-1256','utf-8',$all->EMP_NAME ) ?>
                                            </a>
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
                $('#group').DataTable();
            });

        </script>










