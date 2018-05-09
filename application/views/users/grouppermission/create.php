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
                <span class="h-main">  صلاحيات  المجموعات   </span>
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

                            <form action="<?=base_url('users/GroupPermissions/add')?>" method="post">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item">المجموعة  </label>
                                            <select name="GROUP_ID" class="form-control" style="width:100%">
                                                <?php foreach ($groups as $group) { ?>
                                                <option value="<?=$group->GROUP_ID?>"><?=$group->GROUP_NAME?> </option>
                                                <?php  } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="main">القائمة الرئيسية  </label>
                                            <select name="MAIN_MENU_ID" class="form-control" id="main" style="width:100%">
                                                <?php foreach ($mains as $main) { ?>
                                                    <option value="<?=$main->MAIN_MENU_ID?>"><?=$main->MAIN_MENU_NAME?> </option>
                                                <?php  } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-10 col-md-offset-2">
                                        <button type="submit" class="btn btn-success">إستمرار   </button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>

                <?php $this->load->view('app/layout/parts/footer'); ?>








