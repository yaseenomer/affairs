<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('السيرة الذاتية /CV ') ?>

    <div class="row">
        <?php echo form_open(base_url('upgrades/Apply/insert'))?>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#personal" data-toggle="tab"><i class="fa fa-user-o"> </i> المعلومات الشخصية</a></li>

                <li class=""><a href="#edu" data-toggle="tab"><i class="fa fa-graduation-cap"></i>التعليم قبل الجامعي</a></li>

                <li class=""><a href="#unv" data-toggle="tab"><i class="fa fa-graduation-cap"></i>المؤهلات الجامعية وفوق الجامعية</a></li>

                <li class=""><a href="#research" data-toggle="tab"><i class="fa fa-graduation-cap"></i>عنوان الأطروحة</a></li>

                <li class=""><a href="#exp" data-toggle="tab"><i class="fa fa-graduation-cap"></i>الخبرة المهنية</a></li>

                <li class=""><a href="#teach" data-toggle="tab"><i class="fa fa-graduation-cap"></i>الخبرة التدريسية</a></li>

                <li class=""><a href="#project" data-toggle="tab"><i class="fa fa-graduation-cap"></i>الاشراف على المشاريع الطلابية </a></li>

                <li class=""><a href="#prosearch" data-toggle="tab"><i class="fa fa-graduation-cap"></i>المشروعات البحثية </a></li>

                <li class=""><a href="#administrative" data-toggle="tab"><i class="fa fa-graduation-cap"></i>الخبرة الإدارية</a></li>

                <li class=""><a href="#membership" data-toggle="tab"><i class="fa fa-graduation-cap"></i>العضوية المهنية </a></li>

                <li class=""><a href="#activeity" data-toggle="tab"><i class="fa fa-graduation-cap"></i>النشاط الإجتماعي </a></li>

                <li class=""><a href="#publication" data-toggle="tab"><i class="fa fa-graduation-cap"></i>المنشورات </a></li>

                <li class=""><a href="#siminars" data-toggle="tab"><i class="fa fa-graduation-cap"></i>السمنارات و الندوات و المؤتمرات  </a></li>

                <li class=""><a href="#personnals" data-toggle="tab"><i class="fa fa-graduation-cap"></i>أشخاص يمكن الرجوع اليهم </a></li>
            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">

            <div class="tab-content">

                <div class="tab-pane fade active in" id="personal">
                    <form name="form1" action="<?= base_url('upgrades/Application_Form/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">

                        <div class="col-md-3">
                            <label>الأسم الرابع/ انجليزي</label>
                            <input type="text"  name="LST_NAME_ENG" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>الأسم الثالث /انجليزي</label>
                            <input type="text"  name="THR_NAME_ENG" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>الأسم الثاني/ انجليزي</label>
                            <input type="text"  name="SND_NAME_ENG" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>الأسم الأول /انجليزي</label>
                            <input type="text"  name="FRT_NAME_ENG" class="form-control">
                        </div>


                    </div>
                    <br>
                    <!----- names  arabic-->
                    <div class="row">
                        <div class="col-md-3">
                            <label>الأسم الأول / عربي</label>
                            <input type="text"  name="FRT_NAME_AR" class="form-control">
                        </div>


                        <div class="col-md-3">
                            <label>الأسم الثاني / عربي</label>
                            <input type="text"  name="SND_NAME_AR" class="form-control">
                        </div>


                        <div class="col-md-3">
                            <label>الأسم الثالث / عربي</label>
                            <input type="text"  name="THR_NAME_AR" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>الأسم الرابع / عربي</label>
                            <input type="text"  name="LST_NAME_AR" class="form-control">
                        </div>

                    </div>
                    <br>
                    <!----- EMP_LANGUAGES-->
                    <div class="row">
                        <div class="col-md-6">
                            <label>اللغات التي تتقنها</label>

                         <!--   <input type="checkbox" name="EMP_LANGUAGES" value="عربي" class="form-control">عربي
                            <input type="checkbox" name="EMP_LANGUAGES" value="انجليزي" class="form-control">انجليزي
                            <input type="checkbox" name="EMP_LANGUAGES" value="لغات اخرى" class="form-control">لغات اخرى-->
                            <input type="text"  name="EMP_LANGUAGES" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-4">
                            <label>رقم هاتف المنزل</label>
                            <input type="text"  name="HOME_PHONE" class="form-control">
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
<br>

                        <div class=" form-group col-md-6">
                            <label> اسم المدرسة   </label>
                            <input type="text"  name="SCHOOL_NAME" class="form-control">
                        </div>
                    </div>
                        <div class="row">
                            <label for="item">الدولة </label>
                            <select name="COUNTRY_NO"  class="form-control"  style="width:100%"  id="lev1">
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
                    </form>
                    <div class="row">
                        <div class=" form-group col-md-4">
                            <label>تاريخ التعيين بالجامعة  </label>
                            <input type="date" class="form-control">
                        </div>


                        <div class=" form-group col-md-4">
                            <label> تاريخ في حالة الفصل أو الإستقالة    </label>
                            <input type="date" class="form-control">
                        </div>

                        <div class=" form-group col-md-4">
                            <label> تاريخ  إعادة التعيين </label>
                            <input type="date" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>الدرجة الحالية  </label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label>تاريخ الترقي لها   </label>
                            <input type="date" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label>  الدرجة التي يود الترقي لها    </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>


                </div>

                <div class="tab-pane fade" id="unv">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>التاريخ </label>
                            <input type="date" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>الجهة  </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">

                        <div class="form-group col-md-12">
                            <label>طبيعة العمل في هذه الفترة   </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="research">

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label > في إجازة بدون راتب إعتبارا من  </label>
                            <input  type="date" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="exp">

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

                <div class="tab-pane fade" id="teach">

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

                <div class="tab-pane fade" id="project">

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

                <div class="tab-pane fade" id="prosearch">

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

                <div class="tab-pane fade" id="administrative">

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

                <div class="tab-pane fade" id="membership">

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

                <div class="tab-pane fade" id="activeity">

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

                <div class="tab-pane fade" id="publication">

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