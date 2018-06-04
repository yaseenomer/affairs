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

                <li class=""><a href="#siminars" data-toggle="tab"><i class="fa fa-graduation-cap"></i> الخبرات المهنية و الادارية  </a></li>

                <li class=""><a href="#personnals" data-toggle="tab"><i class="fa fa-graduation-cap"></i> أشخاص يمكن الرجوع اليهم  </a></li>
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
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">
                            <tbody>
                            <tr>
                                <th>نوع النشرات </th>
                                <td><?php ?></td>
                                <th>التاريخ</th>
                                <td><?php ?></td>
                            </tr>
                            <tr>
                                <th>المكان</th>
                                <td><?php ?></td>
                                <th> اللغة</th>
                                <td><?php ?> </td>
                            </tr>
                            <tr>
                                <th>العنوان</th>
                                <td><?php ?></td>
                            </tr>
                            <tr>
                                <th>الوصف</th>
                                <td><?php ?></td>
                            </tr>
                            <tr>
                                <th>ملف المنشور</th>
                                <td><?php ?></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <div class="tab-pane fade" id="pubmember">
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

                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <div class="tab-pane fade "  id="siminars">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">
                            <tbody>
                            <tr>
                                <th>نوع الخبرة</th>
                                <td><?php //echo $find->LOC_NAME ?></td>
                                <th> الوصف</th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>

                            <tr>
                                <th>تاريخ البداية   </th>
                                <td><?php ?> </td>
                                <th>تاريخ النهاية </th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            <tr>

                            </tr>
                            <tr>
                                <th>مكان الخبرة</th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            <tr>
                                <th>الجامعة</th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            <tr>
                                <th>الشهادة</th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                  <!------------------------------------------------------->

                <div class="tab-pane fade " id="personnals">
                    <form name="form9" action="<?= base_url('upgrades/APP_CV_REFERENCES/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>الاسم   </label>
                            <input type="text"class="form-control" name="EMP_NAME">
                            <input type="hidden"  name="app_id"  value="<?php echo $app_id ?>" class="form-control">
                            <input type="hidden"  name="emp_no"  value="<?php echo $emp_no  ?>" class="form-control">
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
                                <option>اختار من القائمة </option>
                                <?php
                                if(!empty($qual))
                                {
                                    foreach($qual as $q)
                                    {
                                        ?>
                                        <option value="<?php echo  $q->DEG_ID ?>"><?php echo $q->DEG_ARAB_NAME ?></option>
                                        <?php
                                    }
                                }
                                ?>


                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="حفــــظ">
                            <input type="submit" class="btn btn-success" value="حفظ و إستمرار">
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>
