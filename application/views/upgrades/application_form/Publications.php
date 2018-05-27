<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('السيرة الذاتية /CV ') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">

                <li class="active"><a href="#personal" data-toggle="tab"><i class="fa fa-user-o"> </i> المعلومات الشخصية  </a></li>

                <li class=""><a href="#edu" data-toggle="tab"><i class="fa fa-graduation-cap"></i>   التعليم قبل الجامعي</a></li>

                <li class=""><a href="#unv" data-toggle="tab"><i class="fa fa-graduation-cap"></i>المؤهلات الجامعية وفوق الجامعية   </a></li>

                <li class=""><a href="#exp" data-toggle="tab"><i class="fa fa-graduation-cap"></i>  الخبرات الجامعية/ التدريسية / الاشرافية  </a></li>

                <li class=""><a href="#prosearch" data-toggle="tab"><i class="fa fa-graduation-cap"></i>    المشروعات البحثية</a></li>

                <li class=""><a href="#publication" data-toggle="tab"><i class="fa fa-graduation-cap"></i> النشرات والمؤتمرات والبحوث  </a></li>
                <li class=""><a href="#pubmember" data-toggle="tab"><i class="fa fa-graduation-cap"></i> المشاركون في النشر  </a></li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">

            <div class="tab-content">
                <!------------------------------------------------------->
                <!------------------------------------------------------->
                <div class="tab-pane fade active in" id="personal">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">

                            <tr>
                                <th>الاسم باللغة العربية</th>
                                <td><?php //echo $find->LOC_NAME ?></td>
                            </tr>

                            <tbody>
                            <tr>
                                <th>الاسم باللغة الانجليزية</th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            <tr>
                                <th>اللغات التي تتقنها </th>
                                <td><?php //echo iconv('windows-1256', 'utf-8', $find->EMP_NAME)?> </td>
                            </tr>
                            <tr>
                                <th>رقم هاتف المنزل</th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>  <br>


                    <!-- </form>-->
                </div>
                <!------------------------------------------------------->
                <div class="tab-pane fade " id="edu">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">

                            <tr>
                                <th>المراحل الدراسية</th>
                                <th>اسم المدرسة </th>
                                <th>الدولة </th>
                                <th>من عام </th>
                                <th> الى عام</th>
                                <th> التقدير \ النسبة</th>
                                <th> المرفق</th>
                            </tr>

                            <tbody>
                            <tr>
                                <th>ابتدائي </th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>

                            </tr>
                            <tr>
                                <th>اساس </th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            <tr>
                                <th>متوسط </th>

                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            <tr>
                                <th> ثانوي</th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <br>  <br>


                    <!-- </form>-->
                </div>
                <!------------------------------------------------------->
                <div class="tab-pane fade" id="unv">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">

                            <tr>
                                <th>نوع المؤهل</th>
                                <td><?php ?></td>
                            </tr>

                            <tbody>
                            <tr>
                                <th>الجامعة</th>
                                <td><?php ?></td>
                            </tr>
                            <tr>
                                <th> الدولة </th>
                                <td><?php ?> </td>
                            </tr>
                            <tr>
                                <th> الكلية</th>
                                <td><?php ?></td>
                            </tr>
                            <tr>
                                <th> التخصص</th>
                                <td><?php ?></td>
                            </tr>
                            <tr>
                                <th> تاريخ الحصول عليه </th>
                                <td><?php ?></td>
                            </tr>
                            <tr>
                                <th> التقدير</th>
                                <td><?php ?></td>
                            </tr>
                            <tr>
                                <th> عنوان الاطروحة / البحث</th>
                                <td><?php ?></td>
                            </tr>
                            <tr>
                                <th> ملف البحث</th>
                                <td><?php ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <div class="tab-pane fade " id="exp">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">

                            <tr>
                                <th>نوع الخبرة</th>
                                <td><?php ?></td>
                                <th>نوع المؤهل</th>
                                <td><?php ?></td>
                            </tr>

                            <tbody>
                            <tr>
                                <th>تاريخ البداية </th>
                                <td><?php ?> </td>
                                <th> تاريخ النهاية</th>
                                <td><?php  ?></td>
                            </tr>

                            <tr>
                                <th> الجامعة </th>
                                <td><?php  ?></td>
                                <th> الكلية </th>
                                <td><?php  ?></td>
                            </tr>

                            <tr>
                                <th> القسم </th>
                                <td><?php  ?></td>
                                <th> التخصص </th>
                                <td><?php  ?></td>
                            </tr>
                            <tr>
                                <th> الكورسات التى درسها </th>
                                <td><?php  ?></td>
                            </tr>
                            <tr>
                                <th> عدد المشاريع المشرف عليها </th>
                                <td><?php  ?></td>
                            </tr>
                            <tr>
                                <th> ملاحظات </th>
                                <td><?php  ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <div class="tab-pane fade " id="prosearch">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">
                            <tbody>
                            <tr>
                                <th>تاريخ المشروع </th>
                                <td><?php ?></td>
                            </tr>
                            <tr>
                                <th>أسم الباحث الرئيسي </th>
                                <td><?php  ?></td>
                            </tr>
                            <tr>
                                <th> العنوان</th>
                                <td><?php ?> </td>
                            </tr>
                            <tr>
                                <th>الوصف</th>
                                <td><?php ?></td>
                            </tr>
                            <tr>
                                <th>ملف المشروع</th>
                                <td><?php ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <div class="tab-pane fade " id="publication">
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
                                <input  type="text" class="form-control" name="DATE_OF_PUB" id="DATE_OF_PUB"value="<?php echo set_value('DATE_OF_PUB'); ?>">
                                <?php echo form_error('DATE_OF_PUB','<span class='.'error'.'>','</span>') ?>
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
                                <input type="file"  name="attachs[]" class="form-control"multiple="multiple">
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

                <!------------------------------------------------------->
                <div class="tab-pane fade" id="pubmember">
                        <?php echo form_open_multipart(base_url('upgrades/PUBLICATIONS_PARTS/insert'));  ?>
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
                                <input type="submit" class="btn btn-success" value="حفظ و إستمرار">
                            </div>
                        </div>
                    </form>
                </div>

                <!------------------------------------------------------->
            </div>

        </div>

    </div>

<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>


<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#DATE_OF_PUB').datetimepicker(dateoptions);
</script>