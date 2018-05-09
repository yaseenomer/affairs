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
                <span class="h-main">   القوائم الرئيسية   </span>
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
                        <div class="actions">


                            <a  href="<?=base_url('users/MainMenus/create/')?>"   class="btn green">إضافة قائمة رئيسية  </a>


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

                            <table id="main" class="table table-striped table-bordered" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>
                                        رقم القائمة الرئيسية
                                    </th>
                                    <th>
                                        إسم القائمة الرئيسية
                                    </th>
                                    <th>
                                        وصف  القائمة الرئيسية
                                    </th>


                                    <th>
                                        تحكم
                                    </th>

                                </tr>
                                </thead>
                                <tbody >
                                <?php foreach ($mains as $main) { ?>
                                    <tr>
                                        <td><?= $main->MAIN_MENU_ID ?></td>
                                        <td> <?= $main->MAIN_MENU_NAME ?></td>
                                        <td><?= $main->MAIN_MENU_DISC ?></td>

                                        <td>
                                            <a  href="<?=base_url('users/MainMenus/edit/').$main->MAIN_MENU_ID ?>"   class="fa fa-edit text-success"></a>
                                            <a  href="<?=base_url('users/MainMenus/delete/').$main->MAIN_MENU_ID ?>"   class="fa fa-trash-o text-danger pull-right"></a>




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
                $('#main').DataTable();
            });

        </script>










