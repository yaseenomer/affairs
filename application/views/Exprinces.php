<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub"> الخبرات المهنية و التدريسية   </span>
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
                            <div class="form-group">
                                            <label>نوع الخبرة  </label>
                                            <div class="radio">
                                                <label>
                                                    <input name="EXP_TYPE" id="optionsRadios1" value="1" checked="" type="radio">   اشراف 
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="EXP_TYPE" id="optionsRadios2" value="2" type="radio">     جامعي
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="EXP_TYPE" id="optionsRadios2" value="3" type="radio">      فوق جامعي
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="EXP_TYPE" id="optionsRadios2" value="4" type="radio">     مهني 
                                                </label>
                                            </div>
                                           
                                          </div>
							                                
                            <!-- row end -->
                            
                               <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> العنوان   </label>
                                       <input name="TITLE" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> الوصف    </label>
                                       <textarea name="DESCRIPTION" class="form-control" ></textarea>
                                    </div>
                                </div>
                            </div>
                            
                              <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> التاريخ   </label>
                                       <input name="EXP_DATE"  id="EXP_DATE" type="text" class="form-control" value="<?php echo set_value('EXP_DATE'); ?>">
                                     <?php echo form_error('EXP_DATE','<span class='.'error'.'>','</span>') ?> 
                                    </div>
                                </div>
                            </div>
                        
                            <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> مكان الخبرة\في حالة مهني   </label>
                                       <input name="EXP_PLACE" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الجامعة \ في حالة الجامعة </label>
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
                                       <label for="item"> الملف </label>
                                       <input type="text" name="FILE_BATH" class="form-control"/>
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
    $('#EXP_DATE').datetimepicker(dateoptions);
</script>