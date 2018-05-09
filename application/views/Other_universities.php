<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub"> الجامعات الاخرى </span>
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
     								   <select name="APP_ID"  class="form-control"  style="width:100%">
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
                                       <label for="item"> الجامعة  </label>
     								   <select name="UNV_ID"  class="form-control"  style="width:100%">
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
                                       <label for="item">الدولة  </label>
     								   <select name="COUNTRY_NO"  class="form-control"  style="width:100%">
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
                                       <label for="item"> تاريخ البداية  </label>
                                       <input name="START_DATE" id="START_DATE" type="text" class="form-control" value="<?php echo set_value('START_DATE'); ?>" >
                                     <?php echo form_error('START_DATE','<span class='.'error'.'>','</span>') ?> 
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">تاريخ النهاية  </label>
                                       <input  name="END_DATE" id="END_DATE" type="text" class="form-control" value="<?php echo set_value('END_DATE'); ?>"/>
                                     <?php echo form_error('END_DATE','<span class='.'error'.'>','</span>') ?> 
                                    </div>
                                </div>
                            </div>
                            
                           <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> وصف الوظيفة  </label>
                                       <textarea name="JOB_DESC" class="form-control" ></textarea>
                                    </div>
                                </div>
                            </div>
                            
                              <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> ملاحظات </label>
                                       <textarea name="NOTES" class="form-control" ></textarea>
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
    $('#START_DATE').datetimepicker(dateoptions);
</script>
<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#END_DATE').datetimepicker(dateoptions);
</script>