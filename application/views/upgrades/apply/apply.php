<?php $this->load->view('app/layout/parts/top');main_header(array('الترقيات')); canvas_header(' إستمارة التقديم للترقي ') ?>


    <div class="row">
        <?php echo form_open(base_url('upgrades/Apply/insert'))?>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#coll" data-toggle="tab">
                        <i class="fa fa-user-o"> </i> معلومات عن الكلية
                    </a>
                </li>

                <li class=""><a href="#profile" data-toggle="tab">
                        <i class="fa fa-graduation-cap"></i>
                        معلومات عن مقدم الطلب
                    </a>
                </li>

                <li class=""><a href="#unv" data-toggle="tab">
                        <i class="fa fa-graduation-cap"></i>
                       التعيين بغير الجامعة
                    </a>
                </li>

                <li class=""><a href="#holiday" data-toggle="tab">
                        <i class="fa fa-graduation-cap"></i>
                        الإجازات
                    </a>
                </li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">

            <div class="tab-content">

                <div class="tab-pane fade active in" id="coll">

                    <div class="row">
                        <div class="col-md-4">
                            <label>الكلية</label>
                            <input type="text" class="form-control" value="<?php echo  $emp_details->LOC_NAME ?>" readonly>

                        </div>


                        <div class="col-md-4">
                            <label>القسم</label>
                            <input type="text" class="form-control" value="<?php echo  $emp_details->DEP_NAME ?>" readonly>
                        </div>


                        <div class="col-md-4">
                            <label>التخصص</label>
                            <input type="text" class="form-control" readonly name="SPECIAL_NAME">
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="profile">


                    <input type="hidden" value="<?php echo $emp_info->EMP_NO?>" name="EMP_NO">
                    <input type="hidden" value="<?php echo (int) date('Y')?>" name="YEAR_ID">
                    <input type="hidden" value="<?php echo $emp_info->MERITAL?>" name="MERITAL">
                    <input type="hidden" value="<?php echo $emp_grades->EMP_TYPE?>" name="EMP_TYPE">
                    <input type="hidden" value="<?php echo $emp_grades->GRADE_NO?>" name="CURRENT_GRD_ID">


                    <div class="row">

                        <div class=" form-group col-md-6">
                            <label>الاسم </label>
                            <input type="text" class="form-control" value="<?php echo  iconv('windows-1256','utf-8',$emp_info->EMP_NAME)?>" readonly>
                        </div>


                        <div class=" form-group col-md-6">
                            <label> رقم الهاتف  </label>
                            <input    type="text" class="form-control" value="<?php echo $emp_info->REL_PHONE?>" name="REL_PHONE" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" form-group col-md-4">
                            <label>تاريخ التعيين بالجامعة  </label>
                            <input type="text" class="form-control" value="<?php echo date('Y-m-d',strtotime($emp_info->HIRE_DATE))?>" readonly>
                            <input type="hidden"  value="<?php echo date('d-M-y',strtotime($emp_info->HIRE_DATE))?>" name="HIRE_DATE" >

                        </div>


                        <div class=" form-group col-md-4">
                            <label> تاريخ في حالة الفصل أو الإستقالة    </label>
                            <input type="text" class="form-control" readonly>
                        </div>

                        <div class=" form-group col-md-4">
                            <label> تاريخ  إعادة التعيين </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>الدرجة الحالية  </label>
                            <input type="text" class="form-control" value="<?php echo  iconv('windows-1256','utf-8',$emp_grades->GRADE_NAME)?>" readonly>
                        </div>

                        <div class="form-group col-md-4">
                            <label>تاريخ الترقي لها   </label>
                            <input type="date" class="form-control" value="<?php echo date('Y-m-d',strtotime($emp_info->APP_DATE))?>" readonly>
                            <input type="hidden"  value="<?php echo date('d-M-y',strtotime($emp_info->APP_DATE))?>"  name="GRD_DATE">
                        </div>

                        <div class="form-group col-md-4">
                            <input  name="NEXT_GRD" type="hidden"  value="<?php echo $emp_grades->GRADE_NO +1 ?>">
                            <label>  الدرجة التي يود الترقي لها    </label>
                            <input type="text" class="form-control" value="<?php echo $next_degree?>" readonly>
                        </div>
                    </div>


                </div>

                <div class="tab-pane fade" id="unv">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>التاريخ </label>
                            <input type="date" class="form-control" >
                        </div>

                        <div class="form-group col-md-6">
                            <label>الجهة  </label>
                            <input type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="row">

                        <div class="form-group col-md-12">
                            <label>طبيعة العمل في هذه الفترة   </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="holiday">

                    <div class="row">
                        <?php  if($emp_holiday < 0 ) { ?>

                            <div class="form-group col-md-12">
                                <p class="secondary-color">   ليست في إجازة </p>
                                <input type="hidden" value="0" name="EMP_STATUS">
                            </div>

                       <?php }else{  ?>
                        <div class="form-group col-md-6">
                            <label > تاريخ بداية الإجازة   </label>
                            <input  type="text" class="form-control" value="<?php  echo $emp_holidays->START_HOLYDAY ?>" name="VACATION_START">
                        </div>

                            <div class="form-group col-md-6">
                                <label > تاريخ نهاية  الإجازة   </label>
                                <input  type="text" class="form-control" value="<?php  echo $emp_holidays->END_HOLYDAY ?>" name="VACATION_END">
                            </div>
                            <input type="hidden" value="1" name="EMP_STATUS">
                       <?php }  ?>
                        <div class="form-group col-md-12">
                            <input type="submit"  class="btn btn-success" value="حفـــــظ" >
                        </div>
                    </div>

                </div>


            </div>

        </div>
        <?php echo form_close()?>
    </div>

<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>