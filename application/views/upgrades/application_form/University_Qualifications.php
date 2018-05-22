<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('السيرة الذاتية /CV ') ?>

    <div class="row">
        <?php  echo form_open(base_url('upgrades/APP_FORM'))?>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">

                <li class="active"><a href="#unv" data-toggle="tab"><i class="fa fa-graduation-cap"></i>المؤهلات الجامعية وفوق الجامعية   </a></li>

        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">

            <div class="tab-content">
    <!------------------------------------------------------->
                <div class="tab-pane fade active in" id="unv">
                <form name="form3" action="<?= base_url('upgrades/APPLICATION_UNIV_EDU/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                <div class="row">
                        <div class=" form-group col-md-6">
                            <label> نوع المؤهل  </label>
                            <select name="UNIV_EDU_TYPE"class="form-control">
                                <option value=""></option>
                                <option value="دبلوم  سنتين">دبلوم  سنتين</option>
                                <option value="دبلوم 3 سنة">دبلوم 3 سنة</option>
                                <option value="بكالوريوس 4 سنة">بكالوريوس 4 سنة</option>
                                <option value="بكالوريوس 5 سنة">بكالوريوس 5 سنة</option>
                                <option value="دبلوم عالي">دبلوم عالي</option>
                                <option value="ماجستير">ماجستير</option>
                                <option value="دكتوراة">دكتوراة</option>


                            </select>
                        </div>

                        <div class=" form-group col-md-6">
                            <label>  الجامعة </label>
                            <select name="UNV_ID"class="form-control">
                                <option>اختار من القائمة </option>

                                <?php
                                if(!empty($uni))
                                {
                                    foreach($uni as $each)
                                    {
                                        ?>
                                        <option value="<?php echo  $each->UNV_ID ?>"><?php echo $each->UNV_ARAB_NAME ?></option>
                                        <?php
                                    }
                                }
                                ?>
                                

                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class=" form-group col-md-6">
                            <label>  الدولة </label>
                            <select name="COUNTRY_NO"  class="form-control"  style="width:60%"  id="lev1">
                                <option>اختار من القائمة </option>

                                <?php
                                if(!empty($levels))
                                {
                                    foreach($levels as $each)
                                    {
                                        ?>
                                        <option value="<?php echo  $each->COUNTRY_NO ?>"><?php echo iconv("windows-1256","utf-8",$each->COUNTRY_NAME )?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label>الكلية </label>
                            <input type="text" class="form-control" name="UNIV_EDU_COLLEGE">
                        </div>

                        <div class="form-group col-md-5">
                            <label>التخصص  </label>
                            <input type="text" class="form-control" name="UNIV_EDU_SPECIAL">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label>تاريخ الحصول عليه </label>
                            <input type="text" class="form-control" name="DATE_OF_ISSUED" id="DATE_OF_ISSUED"value="<?php echo set_value('DATE_OF_ISSUED'); ?>" >
                            <?php echo form_error('DATE_OF_ISSUED','<span class='.'error'.'>','</span>') ?>
                        </div>


                        <div class="form-group col-md-5">
                            <label>التقدير </label>
                            <input type="text" class="form-control" name="UNIV_EDU_GRADE">
                        </div>
                    </div>
                            <br>
                            <div class="row">
                              <div class="form-group col-md-10">
                                <label>عنوان الاطروحة / البحث  </label>
                                   <textarea class="form-control" name="THESIS_TITLE"></textarea>
                              </div>
                            </div>
                     <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label>أرفق  ملف البحث  </label>
                            <input type="file"  name="FILE_BATH[]" class="form-control"multiple="multiple">
                        </div>

                    </div>
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="حفــــظ">
                                <input type="submit" class="btn btn-success" value="حفظ و إستمرار">
                            </div>
                        </div>
                     </form>
                </div>

               </div>

        </div>
        <?php echo form_close()?>
    </div>

<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>


<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#DATE_OF_ISSUED').datetimepicker(dateoptions);
</script>


