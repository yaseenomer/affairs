<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/4/2018
 * Time: 1:06 PM
 */

$this->load->view('app/layout/parts/top'); ?>


<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-header">
            <div class="header-title">
                <span class="h-main">    صلاحيات المجموعات   </span>
                <span class="h-sub">
                </span>
            </div>
            <div class="header-action">
            </div>
        </div>
        <div class="row" id="main">

            <div class="col-md-10 col-md-offset-1">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">

                        </div>

                    </div>
                    <div class="portlet-body">
                        <div class="row">

                            <form action="<?=base_url('users/GroupPermissions/insert')?>" method="post">
                                <table class="table">
                                    <tr>
                                        <th>اسم المجموعة </th>
                                        <th> القائمة الرئيسية </th>
                                        <th> القوائم الفرعية </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?=$group->GROUP_NAME?>
                                            <input type="hidden"  class="form-control" value="<?=$group->GROUP_ID?>" name="GROUP_ID" >
                                        </td>
                                        <td>
                                            <?=$main->MAIN_MENU_NAME?>
                                            <input type="hidden"  class="form-control" value=" <?=$main->MAIN_MENU_ID?>" name="MAIN_MENU_ID" >
                                        </td>
                                        <td>
                                            <?php foreach ($subs as $sub) { ?>
                                            <input type="checkbox"  class="form-control" value="<?=$sub->SUB_MENU_ID?>" name="SUB_MENU_ID[]" readonly> <?=$sub->SUB_MENU_NAME?> <br><br>
                                            <?php  } ?>
                                        </td>
                                    </tr>

                                </table>

                                <div class="form-group row">
                                    <label for="location" class="col-sm-1 col-form-label"> الصلاحيات   </label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control"   name="GROUP_PRIV" >
                                    </div>
                                </div>






                                <div class="form-group row">
                                    <div class="col-sm-10 col-md-offset-1">
                                        <button type="submit" class="btn btn-success">حفظ  </button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>

                <?php $this->load->view('app/layout/parts/footer'); ?>








