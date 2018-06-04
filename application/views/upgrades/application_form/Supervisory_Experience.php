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
                    <?php echo form_open_multipart(base_url('upgrades/APP_UNIVERSITIES_EXP/insert'));  ?>
                    <input type="hidden"  name="app_id"  value="<?php echo $this->session->app_id; ?>" class="form-control">
                    <input type="hidden"  name="emp_no"  value="<?php echo $this->session->emp_no;  ?>" class="form-control">
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
                                <option value="1">دكتوراة</option>
                                <option value="2">ماجستير</option>
                                <option value="3">دبلوم عالي</option>
                                <option value="5">بكالوريوس </option>
                                <option value="0">  دبلوم</option>


                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label > تاريخ البداية  </label>
                            <input  type="text" class="form-control" name="START_DATE" id="START_DATE" value="<?php echo set_value('START_DATE'); ?>">
                            <?php echo form_error('START_DATE','<span class='.'error'.'>','</span>') ?>
                        </div>

                        <div class="form-group col-md-4">
                            <label > تاريخ النهاية </label>
                            <input  type="text" class="form-control" name="END_DATE" id="END_DATE" value="<?php echo set_value('END_DATE'); ?>">
                            <?php echo form_error('END_DATE','<span class='.'error'.'>','</span>') ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
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
                                <input type="submit" class="btn btn-success" value="حفظ و إستمرار">
                            </div>
                        </div>

                    <?php echo form_close()?>

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
    $('#START_DATE').datetimepicker(dateoptions);
</script>


<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#END_DATE').datetimepicker(dateoptions);
</script>