<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('السيرة الذاتية /CV ') ?>

    <div class="row">
        <?php echo form_open(base_url('upgrades/Apply/insert'))?>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#personal" data-toggle="tab"><i class="fa fa-user-o"> </i> المعلومات الشخصية  </a></li>

                <li class=""><a href="#edu" data-toggle="tab"><i class="fa fa-graduation-cap"></i>   التعليم قبل الجامعي</a></li>

                <li class=""><a href="#unv" data-toggle="tab"><i class="fa fa-graduation-cap"></i>المؤهلات الجامعية وفوق الجامعية   </a></li>

                <li class=""><a href="#exp" data-toggle="tab"><i class="fa fa-graduation-cap"></i>   التدريسية / الاشرافية \ الخبرات الجامعية</a></li>

                <li class=""><a href="#prosearch" data-toggle="tab"><i class="fa fa-graduation-cap"></i>    المشروعات البحثية</a></li>

                <li class=""><a href="#publication" data-toggle="tab"><i class="fa fa-graduation-cap"></i> النشرات ومؤتمرات وبحوث  </a></li>

                <li class=""><a href="#siminars" data-toggle="tab"><i class="fa fa-graduation-cap"></i> السمنارات و الندوات و المؤتمرات  </a></li>

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
                            <label> اللغات التي تتقنها / Languages</label>

                         <!--   <input type="checkbox" name="EMP_LANGUAGES" value="عربي" class="form-control">عربي
                            <input type="checkbox" name="EMP_LANGUAGES" value="انجليزي" class="form-control">انجليزي
                            <input type="checkbox" name="EMP_LANGUAGES" value="لغات اخرى" class="form-control">لغات اخرى-->
                            <input type="text"  name="EMP_LANGUAGES" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-6">
                            <label> رقم هاتف المنزل/ home phone number </label>
                            <input type="text"  name="HOME_PHONE" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>أرفق  ملف السيرة الذاتية/Attach the CV file</label>
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
                            <label>  المراحل الدراسية /School Grade </label>
                            <select name="PRE_EDU_TYPE"class="form-control">
                                <option value=""></option>
                                <option value="ابتدائي">ابتدائي</option>
                                <option value="اساس">اساس</option>
                                <option value="متوسط">متوسط</option>
                                <option value="ثانوي">ثانوي</option>

                            </select>
                        </div>
                    </div>
                        <br>
                        <div class="row">
                        <div class=" form-group col-md-6">
                            <label> اسم المدرسة / School Name  </label>
                            <input type="text"  name="SCHOOL_NAME" class="form-control">
                        </div>
                    </div>
                        <div class="row" class=" form-group col-md-6">
                            <label for="item">الدولة / Country</label>
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
                            <input type="date" class="form-control" name="PRE_EDU_START">
                        </div>


                        <div class=" form-group col-md-4">
                            <label> الى عام    </label>
                            <input type="date" class="form-control" name="PRE_EDU_END">
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
                <div class="tab-pane fade" id="unv">
                <form name="form3" action="<?= base_url('upgrades/APPLICATION_UNIV_EDU/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                <div class="row">
                        <div class=" form-group col-md-4">
                            <label> نوع المؤهل  </label>
                            <select name="UNIV_EDU_TYPE"class="form-control">
                                <option value=""></option>
                                <option value="دبلوم  سنتين">دبلوم  سنتين</option>
                                <option value="ديلوم 3 سنة">ديلوم 3 سنة</option>
                                <option value="بكلاريوس 4 سنة">بكلاريوس 4 سنة</option>
                                <option value="بكلاريوس 5 سنة">بكلاريوس 5 سنة</option>
                                <option value="ماجستير">ماجستير</option>
                                <option value="دكتوراة">دكتوراة</option>

                            </select>
                        </div>
                        <br>
                    <div class="row">
                        <div class=" form-group col-md-4">
                            <label>  الجامعة </label>
                            <select name="UNV_ID"class="form-control">
                                <option value=""></option>
                                

                            </select>
                        </div>
                        <br>

                        <div class="row">
                        <div class=" form-group col-md-8">
                            <label>  الدولة </label>
                            <select name="COUNTRY_NO"class="form-control">
                                <option value=""></option>
                                

                            </select>
                        </div>
                            <br>
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label>الكلية </label>
                            <input type="text" class="form-control" name="UNIV_EDU_COLLEGE">
                        </div>

                        <div class="form-group col-md-8">
                            <label>التخصص  </label>
                            <input type="text" class="form-control" name="UNIV_EDU_SPECIAL">
                        </div>
                    

                        <div class="form-group col-md-12">
                            <label>تاريخ الحصول عليه </label>
                            <input type="date" class="form-control" name="DATE_OF_ISSUED">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>التقدير </label>
                            <input type="text" class="form-control" name="UNIV_EDU_GRADE">
                        </div>

                        <div class="form-group col-md-6">
                            <label>عنوان الاطروحة  </label>
                            <textarea class="form-control" name="THESIS_TITLE"></textarea>
                        </div>
                    

                    </div>
                     <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label>أرفق  ملف  </label>
                            <input type="file"  name="FILE_BATH" class="form-control">
                        </div>

                    </div>
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="حفــــظ">
                            </div>
                        </div>
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
                       
                        <label> نوع الخبرة  </label>
                       <input type="radio" name="UNI_EXP_TYPE" value="2" />اشراف داخلي
                       
                        <label> نوع الخبرة  </label>
                       <input type="radio" name="UNI_EXP_TYPE" value="3" />اشراف خارجي

                    </div>
                        <br>  <br>
                         <div class=" form-group col-md-6">
                            <label> نوع المؤهل  </label>
                            <select name="UNI_EXP_SUB_TYPE"class="form-control">
                                <option value=""></option>
                                <option value="دبلوم  ">  دبلوم</option>
                                <option value="بكالريوس">بكالريوس </option>
                                <option value="ماجستير">ماجستير</option>
                                <option value="دكتوراة">دكتوراة</option>

                            </select>
                        </div>
                        <br>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label > تاريخ البداية  </label>
                            <input  type="date" class="form-control" name="START_DATE">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-12">
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
                        <br>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label>الكلية </label>
                            <input type="text" class="form-control" name="UNIV_EXP_COLLEGE">
                        </div>

                        <div class="form-group col-md-6">
                            <label>القسم  </label>
                            <input type="text" class="form-control" name="UNIV_EXP_DEPART">
                        </div>
                        <div class="form-group col-md-6">
                            <label>التخصص  </label>
                            <input type="text" class="form-control" name="UNIV_EXP_SPECIAL">
                        </div>
                        <div class="form-group col-md-6">
                            <label>الكورسات التى درسها  </label>
                            <textarea class="form-control" name="EXP_COURCES"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label>عدد المشاريع المشرف عليها </label>
                            <input type="text" class="form-control" name="PROJECTS_NUMBERS">
                        </div>
                        <div class="form-group col-md-6">
                            <label>ملاحظات  </label>
                            <textarea class="form-control" name="NOTES"></textarea>
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
                        <div class="form-group col-md-12">
                            <label > تاريخ المشروع   </label>
                            <input  type="date" class="form-control" name="DATE_OF_PRO">
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
                        
                        <div class="form-group col-md-6">
                            <label>أسم الباحث الرئيسي  </label>
                            <textarea class="form-control" name="RESEARCHER_NAME"></textarea>
                        </div>
                        
                         <div class="row">
                        <div class="col-md-4">
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

                <!------------------------------------------------------->
                <div class="tab-pane fade" id="publication">
                    <form name="form6" action="<?= base_url('upgrades/APP_PUBLICATIONS/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label > طريقة الترقي </label>
                            <select name="" class="form-control" style="width:100%" >
                                <option value="1"> بالبحث العلمي المتميز </option>
                                <option value="2">بالمساهمة في التدريس والبحث والخبرة المهنية </option>
                                <option value="3">بالخدمة الطويلة الممتازة </option>
                            </select>
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

                <div class="tab-pane fade" id="siminars">

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label > طريقة الترقي </label>
                            <select name="" class="form-control" style="width:100%" >
                                <option value="1"> بالبحث العلمي المتميز </option>
                                <option value="2">بالمساهمة في التدريس والبحث والخبرة المهنية </option>
                                <option value="3">بالخدمة الطويلة الممتازة </option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="حفــــظ">
                        </div>
                    </div>

                </div>

                <!------------------------------------------------------->

                <div class="tab-pane fade" id="personnals">

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label > طريقة الترقي </label>
                            <select name="" class="form-control" style="width:100%" >
                                <option value="1"> بالبحث العلمي المتميز </option>
                                <option value="2">بالمساهمة في التدريس والبحث والخبرة المهنية </option>
                                <option value="3">بالخدمة الطويلة الممتازة </option>
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
        <?php echo form_close()?>
    </div>

<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>