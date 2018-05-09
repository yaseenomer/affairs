<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
              <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">الدورات</span>
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
                                       <label for="item">البرنامج </label>
     								   <select name="PROG_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div>
                                
                            </div>
                              <!-- row end -->
                               <div class="row">
                               <div class="col-md-4">
                                    <div class="form-group">
                                       <label for="item">تاريخ بداية الدورة</label>
                                       <input name="COUR_START_DATE"  id="COUR_START_DATE" type="text" class="form-control" value="<?php echo set_value('COUR_START_DATE'); ?>">
                                    <?php echo form_error('COUR_START_DATE','<span class='.'error'.'>','</span>') ?> 
                                    </div>
                                
                                    <div class="form-group">
                                       <label for="item">تاريخ النهاية</label>
                                       <input name="COUR_END_DATE" id="COUR_END_DATE" type="text" class="form-control" value="<?php echo set_value('COUR_END_DATE'); ?>" >
                                     <?php echo form_error('COUR_END_DATE','<span class='.'error'.'>','</span>') ?> 
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                             <div class="row">
                               <div class="col-md-4">
                                    <div class="form-group">
                                       <label for="item">زمن بداية الدورة</label>
                                       <input name="START_TIME" type="text" class="form-control" >
                                    </div>
                               
                                    <div class="form-group">
                                       <label for="item">زمن النهاية</label>
                                       <input name="END_TIME" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="form-group">
                                            <label>الحالة  </label>
                                            <div class="radio">
                                                <label>
                                                    <input name="COUR_STATUS" id="optionsRadios1" value="1" checked="" type="radio">   مجاز
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="COUR_STATUS" id="optionsRadios2" value="2" type="radio">    غير مجاز
                                                </label>
                                            </div>
                                          </div>
							
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-2">
                                    <div class="form-group">
                                       <label for="item">عدد المقاعد </label>
                                       <input name="COUR_SEATS" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الدولة </label>
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
                                       <label for="item"> الجهة \ في حالة من خارج الجامعة  </label>
                                       <input name="COUR_PLACE" type="text" class="form-control" >
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
          format:'d-M-y'
	 };
    $('#COUR_START_DATE').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'d-M-y'
	 };
    $('#COUR_END_DATE').datetimepicker(dateoptions);
</script>