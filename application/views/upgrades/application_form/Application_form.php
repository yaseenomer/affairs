<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('السيرة الذاتية /CV ') ?>

    <div class="row">
        <?php // echo form_open(base_url('upgrades/Apply/insert'))?>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#personal" data-toggle="tab"><i class="fa fa-user-o"> </i> المعلومات الشخصية  </a></li>

                <li class=""><a href="#edu" data-toggle="tab"><i class="fa fa-graduation-cap"></i>   التعليم قبل الجامعي</a></li>

                <li class=""><a href="#unv" data-toggle="tab"><i class="fa fa-graduation-cap"></i>المؤهلات الجامعية وفوق الجامعية   </a></li>

                <li class=""><a href="#exp" data-toggle="tab"><i class="fa fa-graduation-cap"></i>   التدريسية / الاشرافية \ الخبرات الجامعية</a></li>

                <li class=""><a href="#prosearch" data-toggle="tab"><i class="fa fa-graduation-cap"></i>    المشروعات البحثية</a></li>

                <li class=""><a href="#publication" data-toggle="tab"><i class="fa fa-graduation-cap"></i> النشرات والمؤتمرات والبحوث  </a></li>

                <li class=""><a href="#pubmember" data-toggle="tab"><i class="fa fa-graduation-cap"></i> المشاركون في النشر  </a></li>

                <li class=""><a href="#siminars" data-toggle="tab"><i class="fa fa-graduation-cap"></i> الخبرات المهنية و الادارية  </a></li>

                <li class=""><a href="#personnals" data-toggle="tab"><i class="fa fa-graduation-cap"></i> أشخاص يمكن الرجوع اليهم  </a></li>
            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">

            <div class="tab-content">

                <div class="tab-pane fade active in" id="personal">
                    <form name="form1" action="<?= base_url('upgrades/Application_Form/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">

                        <div class="col-md-3">
                            <label>Fourth Name</label>
                            <input type="text"  name="LST_NAME_ENG" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Third Name</label>
                            <input type="text"  name="THR_NAME_ENG" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Second Name</label>
                            <input type="text"  name="SND_NAME_ENG" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>First Name</label>
                            <input type="text"  name="FRT_NAME_ENG" class="form-control">
                        </div>


                    </div>
                    <br>
                    <!----- names  arabic-->
                    <div class="row">
                        <div class="col-md-3">
                            <label>الأسم الأول </label>
                            <input type="text"  name="FRT_NAME_AR" class="form-control">
                        </div>


                        <div class="col-md-3">
                            <label>الأسم الثاني </label>
                            <input type="text"  name="SND_NAME_AR" class="form-control">
                        </div>


                        <div class="col-md-3">
                            <label>الأسم الثالث </label>
                            <input type="text"  name="THR_NAME_AR" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>الأسم الرابع </label>
                            <input type="text"  name="LST_NAME_AR" class="form-control">
                        </div>

                    </div>
                    <br>
                    <!----- EMP_LANGUAGES-->
                    <div class="row">
                        <div class="col-md-6">
                            <label> اللغات التي تتقنها </label>

                         <!--   <input type="checkbox" name="EMP_LANGUAGES" value="عربي" class="form-control">عربي
                            <input type="checkbox" name="EMP_LANGUAGES" value="انجليزي" class="form-control">انجليزي
                            <input type="checkbox" name="EMP_LANGUAGES" value="لغات اخرى" class="form-control">لغات اخرى-->
                            <input type="text"  name="EMP_LANGUAGES" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-6">
                            <label> رقم هاتف المنزل </label>
                            <input type="text"  name="HOME_PHONE" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>أرفق  ملف السيرة الذاتية</label>
                            <input type="file"  name="FILE_BATH" class="form-control">
                        </div>

                    </div>
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="حفــــظ">
                            </div>
                        </div>
    </form>
                </div>
    <!------------------------------------------------------->

                <div class="tab-pane fade" id="edu">
                    <form name="form2" action="<?= base_url('upgrades/Edu/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class=" form-group col-md-6">
                            <label>  المراحل الدراسية  </label>
                            <select name="PRE_EDU_TYPE"class="form-control">
                                <option value=""></option>
                                <option value="ابتدائي">ابتدائي</option>
                                <option value="اساس">اساس</option>
                                <option value="متوسط">متوسط</option>
                                <option value="ثانوي">ثانوي</option>

                            </select>
                        </div>

                        <div class=" form-group col-md-6">
                            <label> اسم المدرسة   </label>
                            <input type="text"  name="SCHOOL_NAME" class="form-control">
                        </div>
                    </div>
                        <br>
                        <div class="row" class=" form-group col-md-6">
                            <label for="item">الدولة </label>
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
                            <br> <br> <br>
                        <div class="row">
                        <div class=" form-group col-md-4">
                            <label> من عام </label>
                            <input type="text" class="form-control" name="PRE_EDU_START" id="PRE_EDU_START" value="<?php echo set_value('PRE_EDU_START'); ?>" >
                            <?php echo form_error('PRE_EDU_START','<span class='.'error'.'>','</span>') ?>
                        </div>


                        <div class=" form-group col-md-4">
                            <label> الى عام    </label>
                            <input type="text" class="form-control" name="PRE_EDU_END" id="PRE_EDU_END" value="<?php echo set_value('PRE_EDU_END'); ?>">
                            <?php echo form_error('PRE_EDU_END','<span class='.'error'.'>','</span>') ?>
                        </div>

                        <div class=" form-group col-md-4">
                            <label> التقدير \ النسبة </label>
                            <input type="TEXT" class="form-control" name="PRE_EDU_GRADE">
                        </div>
                    </div>
                        </div>
                    
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label>أرفق  الشهادة </label>
                            <input type="file"  name="FILE_BATH" class="form-control">
                        </div>

                    </div>
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="حفــــظ">
                            </div>
                        </div>

                    </form>
                </div>
    <!------------------------------------------------------->
                <div class="tab-pane fade" id="unv">
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
                            <input type="file"  name="FILE_BATH" class="form-control">
                        </div>

                    </div>
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="حفــــظ">
                            </div>
                        </div>
                     </form>
                </div>

    <!------------------------------------------------------->
                <div class="tab-pane fade" id="exp">
                <form name="form4" action="<?= base_url('upgrades/APP_UNIVERSITIES_EXP/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                     <br>
                    <div class="row">
                    <label> نوع الخبرة  </label>
                       <input type="radio" name="UNI_EXP_TYPE" value="1" /> تدريس
                       
                       <input type="radio" name="UNI_EXP_TYPE" value="2" />اشراف داخلي
                       
                       <input type="radio" name="UNI_EXP_TYPE" value="3" />اشراف خارجي

                    </div>
                        <br>  <br>
                    <div class="row">
                         <div class=" form-group col-md-4">
                            <label> نوع المؤهل  </label>
                            <select name="UNI_EXP_SUB_TYPE"class="form-control">
                                <option value=""></option>
                                <option value="دبلوم  ">  دبلوم</option>
                                <option value="بكالوريوس">بكالوريوس </option>
                                <option value="ماجستير">ماجستير</option>
                                <option value="دكتوراة">دكتوراة</option>

                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label > تاريخ البداية  </label>
                            <input  type="date" class="form-control" name="START_DATE">
                        </div>

                        <div class="form-group col-md-4">
                            <label > تاريخ النهاية </label>
                            <input  type="date" class="form-control" name="END_DATE">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class=" form-group col-md-6">
                            <label>  الجامعة </label>
                            <select name="UNV_ID"class="form-control">
                                <option value=""></option>
                                

                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>الكلية </label>
                            <input type="text" class="form-control" name="UNIV_EXP_COLLEGE">
                        </div>

                    </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label>القسم  </label>
                            <input type="text" class="form-control" name="UNIV_EXP_DEPART">
                        </div>
                        <div class="form-group col-md-6">
                            <label>التخصص  </label>
                            <input type="text" class="form-control" name="UNIV_EXP_SPECIAL">
                        </div></div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>الكورسات التى درسها  </label>
                            <textarea class="form-control" name="EXP_COURCES"></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label>عدد المشاريع المشرف عليها </label>
                            <input type="text" class="form-control" name="PROJECTS_NUMBERS">
                        </div>
                    </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label>ملاحظات  </label>
                            <textarea class="form-control" name="NOTES"></textarea>
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="حفــــظ">
                            </div>
                        </div>

                </form>

                </div>
    <!------------------------------------------------------->

                <div class="tab-pane fade" id="prosearch">
                 <form name="form5" action="<?= base_url('upgrades/APP_PROJECTS/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label > تاريخ المشروع   </label>
                            <input  type="date" class="form-control" name="DATE_OF_PRO">
                        </div>

                        <div class="form-group col-md-6">
                            <label>أسم الباحث الرئيسي  </label>
                            <!--<textarea class="form-control" name="RESEARCHER_NAME"></textarea>-->
                            <input type="text" class="form-control" name="RESEARCHER_NAME">
                        </div>
                    </div>
                        <div class="form-group col-md-6">
                            <label>العنوان  </label>
                            <textarea class="form-control" name="PRO_TITLE"></textarea>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label>الوصف  </label>
                            <textarea class="form-control" name="DESCRIPTION"></textarea>
                        </div>

                     <div class="row">
                        <div class="col-md-4">
                            <label>أرفق  ملف المشروع</label>
                            <input type="file"  name="FILE_BATH" class="form-control">
                        </div>

                    </div>
                        <br>  <br>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="حفــــظ">
                        </div>
                    </div>
                </form>
                </div>
                <!------------------------------------------------------->

                <!------------------------------------------------------->
                <div class="tab-pane fade" id="publication">
                    <form name="form6" action="<?= base_url('upgrades/APP_PUBLICATIONS/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <label> نوع النشرات  </label>
                        <input type="radio" name="PUB_TYP" value="1" /> مؤتمر

                        <input type="radio" name="PUB_TYP" value="2" />نشاط

                        <input type="radio" name="PUB_TYP" value="3" />ورقة علمية

                        <input type="radio" name="PUB_TYP" value="4" />سمنار

                        <input type="radio" name="PUB_TYP" value="5" />منشور

                        <input type="radio" name="PUB_TYP" value="6" />كتاب

                        <input type="radio" name="PUB_TYP" value="7" />مجلة

                        <input type="radio" name="PUB_TYP" value="8" />ندوة


                    </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label > التاريخ    </label>
                                <input  type="date" class="form-control" name="DATE_OF_PUB">
                            </div>

                            <div class="form-group col-md-6">
                                <label>المكان  </label>
                                <input type="text" class="form-control" name="PLACE_OF_PUB">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>اللغة  </label>
                            <input type="text" class="form-control" name="PUB_LANGUGE">
                        </div>
                        <div class="form-group col-md-6">
                            <label>العنوان  </label>
                            <!--<textarea class="form-control" name="TITLE"></textarea>-->
                            <input type="text"class="form-control" name="TITLE">
                        </div>

                        <div class="form-group col-md-6">
                            <label>الوصف  </label>
                            <textarea class="form-control" name="DESCRIPTION"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>أرفق  ملف المنشور </label>
                                <input type="file"  name="FILE_BATH" class="form-control">
                            </div>

                        </div>
                        <br>  <br>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="حفــــظ">
                        </div>
                    </div>
                    </form>
                </div>

                <!------------------------------------------------------->

                <div class="tab-pane fade" id="pubmember">
                    <form name="form7" action="<?= base_url('upgrades/PUBLICATIONS_PARTS/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="row">

                            <div class="col-md-3">
                                <label>Fourth Name</label>
                                <input type="text"  name="LST_NAME_ENG" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Third Name</label>
                                <input type="text"  name="THR_NAME_ENG" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Second Name</label>
                                <input type="text"  name="SND_NAME_ENG" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>First Name</label>
                                <input type="text"  name="FRT_NAME_ENG" class="form-control">
                            </div>


                        </div>
                        <br>
                        <!----- names  arabic-->
                        <div class="row">
                            <div class="col-md-3">
                                <label>الأسم الأول </label>
                                <input type="text"  name="FRT_NAME_AR" class="form-control">
                            </div>


                            <div class="col-md-3">
                                <label>الأسم الثاني </label>
                                <input type="text"  name="SND_NAME_AR" class="form-control">
                            </div>


                            <div class="col-md-3">
                                <label>الأسم الثالث </label>
                                <input type="text"  name="THR_NAME_AR" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>الأسم الرابع </label>
                                <input type="text"  name="LST_NAME_AR" class="form-control">
                            </div>

                        </div>
                        <br>
                      <!--  <div class="row">
                            <div class="col-md-4">
                                <label>أرفق  الملف </label>
                                <input type="file"  name="FILE_BATH" class="form-control">
                            </div>

                        </div>-->
                        <br>  <br>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="حفــــظ">
                        </div>
                    </div>
                    </form>
                </div>

                <!------------------------------------------------------->
                <!------------------------------------------------------->

                <div class="tab-pane fade" id="siminars">
                    <form name="form8" action="<?= base_url('upgrades/APP_OTHER_EXPRIENCES/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="row">
                            <label> نوع الخبرة  </label>
                            <input type="radio" name="EXP_TYPE" value="1" /> ادارية

                            <input type="radio" name="EXP_TYPE" value="2" />مهنية

                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>الوصف  </label>
                                <textarea class="form-control" name="DESCRIPTION"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label > تاريخ البداية    </label>
                                <input  type="date" class="form-control" name="EXP_START_DATE">
                            </div>

                                <div class="form-group col-md-6">
                                    <label > تاريخ النهاية    </label>
                                    <input  type="date" class="form-control" name="EXP_END_DATE">
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>مكان الخبرة  </label>
                                <!--<textarea class="form-control" name="TITLE"></textarea>-->
                                <input type="text"class="form-control" name="EXP_PLACE">
                            </div>

                            <div class=" form-group col-md-6">
                                <label>  الجامعة </label>
                                <select name="UNV_ID"class="form-control">
                                    <option value=""></option>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>أرفق  الشهادة  </label>
                                <input type="file"  name="FILE_BATH" class="form-control">
                            </div>

                        </div>
                        <br>  <br>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="حفــــظ">
                            </div>
                        </div>
                    </form>


                </div>

                <!------------------------------------------------------->

                <div class="tab-pane fade" id="personnals">
                    <form name="form9" action="<?= base_url('upgrades/APP_CV_REFERENCES/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>الاسم   </label>
                            <input type="text"class="form-control" name="EMP_NAME">
                        </div>

                        <div class="form-group col-md-6">
                            <label>العنوان الحالي   </label>
                            <input type="text"class="form-control" name="ADDRESS">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>الهاتف   </label>
                            <input type="text"class="form-control" name="REL_PHONE">
                        </div>

                        <div class="form-group col-md-6">
                            <label>البريد الالكتروني    </label>
                            <input type="text"class="form-control" name="E_MAIL">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>الوظيفة   </label>
                            <input type="text"class="form-control" name="REF_JOB">
                        </div>

                        <div class="form-group col-md-6">
                            <label>مكان العمل    </label>
                            <input type="text"class="form-control" name="WORK_PLC">
                        </div>
                        <div class="form-group col-md-6">
                            <label> الدرجة العلمية    </label>
                            <select name="CURRENT_DEG" >
                                <option></option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="حفــــظ">
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <?php //echo form_close()?>
    </div>

<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>
<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#PRE_EDU_START').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#PRE_EDU_END').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#DATE_OF_ISSUED').datetimepicker(dateoptions);
</script>

