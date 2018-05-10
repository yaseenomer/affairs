<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('الترقيات ') ?>


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

                <li class=""><a href="#type" data-toggle="tab">
                        <i class="fa fa-graduation-cap"></i>
                        طريقة الترقي
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
                            <input type="text" class="form-control">
                        </div>


                        <div class="col-md-4">
                            <label>القسم</label>
                            <input type="text" class="form-control">
                        </div>


                        <div class="col-md-4">
                            <label>التخصص</label>
                            <input type="text" class="form-control">
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="profile">
                    <div class="row">
                        <div class=" form-group col-md-6">
                            <label>الاسم </label>
                            <input type="text" class="form-control">
                        </div>


                        <div class=" form-group col-md-6">
                            <label> رقم الهاتف  </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

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

                <div class="tab-pane fade" id="holiday">

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label > في إجازة بدون راتب إعتبارا من  </label>
                            <input  type="date" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="type">

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