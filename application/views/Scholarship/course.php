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
                <span class="h-main">   انواع الإبتعاث      </span>
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
                            <div class="row">
                                <div class="col-md-12 text-center font-green">
                                    <p style="font-size: 25px">أختار نوع الابتعاث المراد </p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <table id="course" class="table table-striped table-bordered table-advance" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>
                                               #
                                            </th>
                                            <th>
                                                نوع الإبتعاث
                                            </th>


                                        </tr>
                                        </thead>
                                        <tbody class="bank">

                                        <?php $i = 1; foreach ($programs as $program) { ?>
                                            <tr>
                                                <td><?php echo  $i++ ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('affirs/Scholarship/emp/') . $program->PROG_ID ?>">
                                                    <?= $program->PROG_ARAB_NAME?>
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

            </div>
        </div>

        <?php $this->load->view('app/layout/parts/footer'); ?>


        <script>
            $(document).ready(function () {
                $('#course').DataTable();
            });

        </script>










