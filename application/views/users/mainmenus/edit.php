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
                <span class="h-main">  إضافة قائمة رئيسية   </span>
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
                            <a href="" class="btn red btn-sm"></a>
                            <a href="" class="btn green btn-sm"></a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">

                            <form action="<?=base_url('users/MainMenus/update')?>" method="post">

                                <input type="hidden" name="id" value="<?=$main->MAIN_MENU_ID?>">
                                <div class="form-group row <?=form_error('name')? ' has-error': ''?>">
                                    <label for="name" class="col-sm-2 col-md-offset-1 col-form-label">إسم القائمة الرئيسية  </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control"  name="name" value="<?=$main->MAIN_MENU_NAME?>" >
                                        <?=form_error('name')? '<span class="help-block">'.form_error('name').'</span>' : ''?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="location" class="col-sm-2 col-md-offset-1 col-form-label">وصف القائمة  </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="location"  name="desc" value="<?=$main->MAIN_MENU_DISC?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">حفظ  </button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>

                <?php $this->load->view('app/layout/parts/footer'); ?>






