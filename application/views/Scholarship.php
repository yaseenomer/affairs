<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub"> استمارة الابتعاث</span>
           </div>
            
     </div>
     
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="" method="post" role="form" >
                     <div class="form-body">
                            
                     <div class="row">
                     <div class="col-md-8 ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           بيانات الابتعاث
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">بيانات الاستاذ </a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">البيانات الاكاديمية</a>
                                </li>
                                <li class=""><a href="#messages" data-toggle="tab">بيانات الابتعاث</a>
                                </li>
                                
                            </ul>
                              <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <h4>بيانات الاستاذ </h4>
                                    <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم الاستاذ  </label>
     								   <select name="EMP_NO"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الكلية  </label>
     								   <select name="LOC_NO"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">القسم  </label>
     								   <select name="DEP_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">السنة  </label>
     								   <select name="YEAR_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">البرنامج  </label>
     								   <select name="PROG_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>البيانات الاكاديمية </h4>
                                    <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">المؤهل الحالي  </label>
     								   <select name="CURRENT_DEG"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">تاريخ منح المؤهل  </label>
     								   <input  name="DEG_DATE"  id="DEG_DATE" type="text" class="form-control"  value="<?php echo set_value('DEG_DATE'); ?>"/>
                                    <?php echo form_error('DEG_DATE','<span class='.'error'.'>','</span>') ?> 
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الجامعة التي منح منها  </label>
     								   <select name="DEG_UNIVERSITY"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الكلية التي منح منها    </label>
     								   <input  name="DEG_COLLEGE" type="text" class="form-control"/>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4> بيانات الابتعاث</h4>
                                    <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">المؤهل المراد الحصول عليه  </label>
     								   <select name="NEXT_DEG"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">مجال التخصص  </label>
     								   <select name="SP_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الجامعة المراد الالتحاق بها  </label>
     								   <select name="UNIVERSITY_TARGET"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                            <!-- row end -->
                              <div class="form-group">
                                            <label> الحالة  </label>
                                            <div class="radio">
                                                <label>
                                                    <input name="SCHOLAR_TYP" id="optionsRadios1" value="1" checked="" type="radio">   مجاز 
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="SCHOLAR_TYP" id="optionsRadios2" value="2" type="radio">     غير مجاز
                                                </label>
                                            </div>
                                           
                                          </div>
                                          <!-- row end -->
                              <div class="form-group">
                                            <label> نوع التفريغ  </label>
                                            <div class="radio">
                                                <label>
                                                    <input name="FREE_TYP" id="optionsRadios1" value="1" checked="" type="radio">   كامل 
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="FREE_TYP" id="optionsRadios2" value="2" type="radio">     جزئي
                                                </label>
                                            </div>
                                           
                                          </div>
							                                                     
                             <!-- row end -->
							               <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">   العنوان خارج السودان </label>
     								   <input  name="OUTSIDE_ADDRESS" type="text" class="form-control"/>
                                    </div>
                                </div> 
                            </div>
                                                        
                                                                  
                             <!-- row end -->
                             
                                </div>
                                
                            </div>
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
<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#DEG_DATE').datetimepicker(dateoptions);
</script>