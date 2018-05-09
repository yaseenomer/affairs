<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub"> النشرات و المؤتمرات و البحوث  </span>
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
                                            <label>نوع النشر  </label>
                                            <div class="radio">
                                                <label>
                                                    <input name="PUB_TYP" id="optionsRadios1" value="1" checked="" type="radio">   مؤتمر 
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="PUB_TYP" id="optionsRadios2" value="2" type="radio">     نشاط
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="PUB_TYP" id="optionsRadios2" value="3" type="radio">      بحث
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="PUB_TYP" id="optionsRadios2" value="4" type="radio">     ورقة علمية
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="PUB_TYP" id="optionsRadios2" value="5" type="radio">     سمنار 
                                                </label>
                                            </div>
                                          </div>
							                                
                            <!-- row end -->
                            
                               <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> تاريخ النشر  </label>
                                       <input name="DATE_OF_PUB"  id="DATE_OF_PUB" type="text" class="form-control" value="<?php echo set_value('DATE_OF_PUB'); ?>">
                                     <?php echo form_error('DATE_OF_PUB','<span class='.'error'.'>','</span>') ?> 
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> مكان النشر   </label>
                                       <textarea name="PLACE_OF_PUB" class="form-control" ></textarea>
                                    </div>
                                </div>
                            </div>
                            
                              <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> العنوان </label>
                                       <textarea name="TITLE" class="form-control" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> الوصف </label>
                                       <textarea name="DESCRIPTION" class="form-control" ></textarea>
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
    $('#DATE_OF_PUB').datetimepicker(dateoptions);
</script>