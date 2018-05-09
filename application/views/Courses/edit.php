<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-header">
            <div class="header-title">
                <span class="h-main">الشئون العلمية</span>  /
                <span class="h-sub">الدورات</span>
            </div>

        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="portlet light bordered">
                    <div class="portlet-body form">
                        <form action="<?=base_url('affirs/courses/update')?>" method="post" role="form" >
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="hidden" value="<?=$cors->COUR_ID?>" name="id">
                                        <div class="form-group">
                                            <label for="item">البرنامج </label>
                                            <select name="PROG_ID"  class="form-control"  style="width:100%">
                                                <option value="<?=$cors->PROG_ID?>">  <?=$cors->PROG_ARAB_NAME?> </option>
                                                <?php foreach ($programs as $program)  { ?>
                                                    <option value="<?=$program->PROG_ID?>"><?=$program->PROG_ARAB_NAME?></option>
                                                <?php  } ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="item">تاريخ بداية الدورة</label>
                                            <input name="COUR_START_DATE"  type="text" class="form-control" value="<?=$cors->COUR_START_DATE ?>" >

                                        </div>

                                        <div class="form-group">
                                            <label for="item">تاريخ النهاية</label>
                                            <input name="COUR_END_DATE"  type="text" class="form-control"  value="<?=$cors->COUR_END_DATE ?>">

                                        </div>
                                    </div>
                                </div>

                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="item">زمن بداية الدورة</label>
                                            <input name="START_TIME" type="text" class="form-control" value="<?=$cors->START_TIME ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="item">زمن النهاية</label>
                                            <input name="END_TIME" type="text" class="form-control" value="<?=$cors->END_TIME ?>" >
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->

                                <?php $approve=$notapprove =''; if($cors->COUR_STATUS == 1 )  { $approve = 'checked'; }else{$notapprove = 'checked' ;}?>

                                <div class="form-group">
                                    <label>الحالة  </label>
                                    <div class="radio">
                                        <label>
                                            <input name="COUR_STATUS" id="optionsRadios1" <?=$approve?> value="1"  type="radio">   مجاز
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input name="COUR_STATUS" id="optionsRadios2"value="0" type="radio" <?=$notapprove?> >    غير مجاز
                                        </label>
                                    </div>
                                </div>

                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="item">عدد المقاعد </label>
                                            <input name="COUR_SEATS" type="text" class="form-control" value="<?=$cors->COUR_SEATS ?>" >
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="item">الدولة </label>
                                            <select name="COUNTRY_NO"  class="form-control"  style="width:100%">
                                                <option value="<?=$cors->COUNTRY_NO?>">  <?=iconv("windows-1256" , "utf-8",$cors->COUNTRY_NAME)?> </option>
                                                <?php foreach ($countries as $country)  { ?>
                                                    <option value="<?=$country->COUNTRY_NO?>"><?=iconv("windows-1256" , "utf-8",$country->COUNTRY_NAME)?></option>
                                                <?php  } ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="item"> الجهة \ في حالة من خارج الجامعة  </label>
                                            <input name="COUR_PLACE" type="text" class="form-control"  value="<?=$cors->COUR_PLACE?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input name="" type="submit" class="btn btn-success" value="حفظ">
                                            <input name="" type="reset" class="btn btn-default" value="رجوع">
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php $this->load->view('app/layout/parts/footer'); ?>
