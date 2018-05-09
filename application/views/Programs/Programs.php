<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">البرامج</span>
           </div>
            
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="" method="post" role="form" >
                     <div class="form-body">
                           
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">رقم اجتماع اللجنة  </label>
     								   <select name="MEET_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الكلية </label>
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
                                       <label for="item">القسم </label>
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
                                       <label for="item">نوع التدريب </label>
     								   <select name="PROG_TYP_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div>
                            </div>
                             <!-- row end -->
							<div class="form-group">
                                            <label>الحالة  </label>
                                            <div class="radio">
                                                <label>
                                                    <input name="PROG_STATUS" id="optionsRadios1" value="1" checked="" type="radio">   مجاز
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="PROG_STATUS" id="optionsRadios2" value="2" type="radio">    غير مجاز
                                                </label>
                                            </div>
                                          </div>
							
                            <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> اسم البرنامج باللغة العربية  </label>
                                       <input name="PROG_ARAB_NAME" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                             <!-- row end -->
                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> اسم البرنامج باللغة الانجليزية </label>
                                       <input name="PROG_ENG_NAME" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                             <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">نبذة عن  البرنامج </label>
                                       <textarea  name="PROG_INTRODUCTION" type="text" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">موجز البرنامج  </label>
                                       <textarea  name="PROG_SUMMARY" type="text" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اهداف البرنامج  </label>
                                       <textarea  name="PROG_OBJECTIVES" type="text" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> نسبة ساعات النظري </label>
                                       <input name="THEORY_HOURS" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> نسبة ساعات العملي </label>
                                       <input name="PRACTICAL_HOURE" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> تاريخ اجازة البرنامج </label>
                                       <input name="APPROVED_DATE" id="APPROVED_DATE" type="text" class="form-control" value="<?php echo set_value('APPROVED_DATE'); ?>">
                                   <?php echo form_error('APPROVED_DATE','<span class='.'error'.'>','</span>') ?> 
                                    </div>
                                </div>
                            </div>
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
    $('#APPROVED_DATE').datetimepicker(dateoptions);
</script>

