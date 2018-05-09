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
                <span class="h-main">  اضافة مجموعة جديدة     </span>
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

                            <form action="<?=base_url('users/usersgroups/insert')?>" method="post">

                                <div class="form-group row <?=form_error('id')? ' has-error': ''?>">
                                    <label for="name" class="col-sm-2 col-md-offset-1 col-form-label">رقم  المجموعة    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control"  name="id" >
                                        <?=form_error('id')? '<span class="help-block">'.form_error('id').'</span>' : ''?>
                                    </div>
                                </div>


                                <div class="form-group row <?=form_error('name')? ' has-error': ''?>">
                                    <label for="name" class="col-sm-2 col-md-offset-1 col-form-label">إسم المجموعة    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control"  name="name" >
                                        <?=form_error('name')? '<span class="help-block">'.form_error('name').'</span>' : ''?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="location" class="col-sm-2 col-md-offset-1 col-form-label">وصف المجموعة   </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="location"  name="desc" >
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






