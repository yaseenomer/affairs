<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
              <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub"> قرارات البعثات</span>
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
                                       <label for="item">رقم الاستمارة </label>
     								   <select name="SCHOLAR_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                            <div class="form-group">
                                            <label>نوع الفرار  </label>
                                            <div class="radio">
                                                <label>
                                                    <input name="DECISION_TYP" id="optionsRadios1" value="1" checked="" type="radio">   رئيس الفسم
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="DECISION_TYP" id="optionsRadios2" value="2" type="radio">     العميد
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="DECISION_TYP" id="optionsRadios2" value="3" type="radio">     مدير الجامعة
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="DECISION_TYP" id="optionsRadios2" value="4" type="radio">     اخرى
                                                </label>
                                            </div>
                                          </div>
							                                                     
                             <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> الموظف متخذ القرار   </label>
                                       <input name="EMP_NO" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            
                              <!-- row end -->
                              <div class="form-group">
                                            <label> الفرار  </label>
                                            <div class="radio">
                                                <label>
                                                    <input name="DECISION" id="optionsRadios1" value="1" checked="" type="radio">   نعم 
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="DECISION" id="optionsRadios2" value="2" type="radio">     لا
                                                </label>
                                            </div>
                                           
                                          </div>
							                                                     
                             <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> تاريخ اتخاذ القرار  </label>
                                       <input name="DECISION_DATE"  id="DECISION_DATE" type="text" class="form-control" value="<?php echo set_value('DECISION_DATE'); ?>">
                                    <?php echo form_error('DECISION_DATE','<span class='.'error'.'>','</span>') ?> 
                                    </div>
                                </div>
                            </div>
                            
                              <!-- row end -->
                                <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> التوصية </label>
                                       <textarea name="RECOMMENDATION" class="form-control" ></textarea>
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
    $('#DECISION_DATE').datetimepicker(dateoptions);
</script>