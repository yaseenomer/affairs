<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">  الموظفين</span>
           </div>
            
     </div>
     
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="" method="post" role="form" >
                     <div class="form-body">
                            <?php foreach ($generals as $general) { ?>
                     <div class="row">
                     <div class="col-md-12 ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           بيانات الموظف
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab"> البيانات الشخصية </a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">بيانات العمل</a>
                                </li>
                                <li class=""><a href="#messages" data-toggle="tab">البيانات الاكاديمية</a>
                                </li>
                                
                            </ul>
                              <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                   
                                <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">رقم الموظف  </label>
     								   <input  name="EMP_NO" type="text" class="form-control" value="<?= $general->EMP_NO ?>" readonly="" />
                                    </div>
                                </div> 
                            </div>         
                                         
                               <!-- row end -->
                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم الموظف  </label>
     								   <input  name="EMP_NAME" type="text" class="form-control" value="<?= iconv("windows-1256" , "utf-8",$general->EMP_NAME) ?>" readonly="" />
                                    </div>
                                </div> 
                            </div>         
                                         
                               <!-- row end -->
                              <div class="form-group">
                                            <label> النوع  </label>
                                            <input  name="GENDER_TYPE" type="text" class="form-control" value="<?= $general->SEX ?>" readonly="" />
                                            </div>
                                           
								 <!-- row end -->
                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">تاريخ الميلاد   </label>
                                       <input  name="BIRTH_DATE" type="text" class="form-control" value="<?= $general->BIRTH_DATE ?>" readonly="" /> 
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">مكان الميلاد   </label>
     								   <input  name="BIRTH_PLACE" type="text" class="form-control" value="<?= iconv("windows-1256" , "utf-8",$general->BIRTH_PLACE) ?>" readonly=""/>
                                    </div>
                                </div> 
                            </div>         
                                         
                               <!-- row end -->
                               <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الجنسية  </label>
                                        <input  name="NATIONALITY" type="text" class="form-control" value="<?= $general->NATIONALITY ?>" readonly=""/>
     								  
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الديانة  </label>
                                       <input  name="RELIGION" type="text" class="form-control" value="<?= $general->RELIGION  ?>" readonly=""/>
     								  
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الحالة الاجتماعية  </label>
                                        <input  name="MERITAL" type="text" class="form-control" value="<?= $general->MERITAL ?>" readonly=""/>
     								   
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">العنوان    </label>
     								   <input  name="ADDRESS" type="text" class="form-control" value="<?= iconv("windows-1256" , "utf-8",$general->ADDRESS)  ?>" readonly=""/>
                                    </div>
                                </div> 
                            </div>         
                                         
                               <!-- row end -->
                                <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الهاتف    </label>
     								   <input  name="REL_PHONE" type="text" class="form-control"  />
                                    </div>
                                </div> 
                            </div>         
                                         
                               <!-- row end -->
                                <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">البريد الالكتروني    </label>
     								   <input  name="E_MAIL" type="text" class="form-control"  />
                                    </div>
                                </div> 
                            </div>         
                                         
                               <!-- row end -->
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>بيانات العمل  </h4>
                               <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الكلية  </label>
                                        <input  name="LOC_NO" type="text" class="form-control" value="<?= iconv("windows-1256" , "utf-8",$general->GRADE_NAME) ?>" readonly=""/>
     								   
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">القسم  </label>
                                        <input  name="DEP_ID" type="text" class="form-control" value="<?= iconv("windows-1256" , "utf-8",$general->NATION_NO) ?>" readonly=""/>
     								   
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end --> 
 
                             <div class="form-group">
                                            <label> الحالة  </label>
                                            <input  name="SCHOLAR_TYP" type="text" class="form-control" value="" readonly=""/>
                                            <!--<div class="radio">
                                                <label for="chkYes">
                                                    <input name="SCHOLAR_TYP" id="optionsRadios1" value="1" type="radio">   استقالة 
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="chkNo">
                                                    <input name="SCHOLAR_TYP" id="optionsRadios2" value="2" type="radio" >      تعين
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="SCHOLAR_TYP" id="optionsRadios2" value="3" type="radio">      اعادة تعيين
                                                </label>
                                            </div>-->
                                           
                                          </div>
                              <!-- row end -->
                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group" >
                                       <label for="item">تاريخ التعيين    </label>
                                       <input  name="HIRE_DATE" type="text" class="form-control" value="<?= $general->HIRE_DATE ?>" readonly=""/>
     								  <!-- <input  name="HIRE_DATE"  id="HIRE_DATE" type="text" class="form-control" value="<?php //echo set_value('HIRE_DATE'); ?>"/>-->
                                       <?php //echo form_error('HIRE_DATE','<span class='.'error'.'>','</span>') ?> 
                                    </div>
                                </div> 
                            </div>         
                                         
                               <!-- row end -->
                                <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">تاريخ الاستقالة    </label>
                                       <input  name="DISMISS_DATE" type="text" class="form-control" value="" readonly=""/>
     								 <!--  <input  name="DISMISS_DATE"  id="DISMISS_DATE" type="text" class="form-control" value="<?php// echo set_value('DISMISS_DATE'); ?>"/>-->
                                    <?php //echo form_error('DISMISS_DATE','<span class='.'error'.'>','</span>') ?>
                                    </div>
                                </div> 
                            </div>         
                                         
                               <!-- row end -->
                                <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">تاريخ اعادة التعيين    </label>
                                        <input  name="REHIRING_DATE" type="text" class="form-control" value="" readonly=""/>
     								   <!--<input  name="REHIRING_DATE" id="REHIRING_DATE" type="text" class="form-control" value="<?php //echo set_value('REHIRING_DATE'); ?>"/>-->
                                     <?php // echo form_error('REHIRING_DATE','<span class='.'error'.'>','</span>') ?>
                                    </div>
                                </div> 
                            </div>         
                                         
                               <!-- row end -->
                               <div class="form-group">
                                            <label> نوع التعيين  </label>
                                             <input  name="EMP_TYPE" type="text" class="form-control" value="" readonly=""/>
                                          <!--  <div class="radio">
                                                <label>
                                                    <input name="EMP_TYPE" id="optionsRadios1" value="1" checked="" type="radio">   اكاديمي 
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="EMP_TYPE" id="optionsRadios2" value="2" type="radio">      تفني
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="EMP_TYPE" id="optionsRadios2" value="3" type="radio">      فني 
                                                </label>
                                            </div>-->
                                           
                                          </div>
                              <!-- row end -->
                                          <div class="form-group">
                                            <label> حالة الموظف  </label>
                                            <input  name="EMP_STATUS" type="text" class="form-control" value="" readonly=""/>
                                           <!-- <div class="radio">
                                                <label>
                                                    <input name="EMP_STATUS" id="optionsRadios1" value="1" checked="" type="radio">   مداوم 
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="EMP_STATUS" id="optionsRadios2" value="2" type="radio">      اجازة
                                                </label>
                                            </div>-->
                                            
                                           
                                          </div>
                              <!-- row end -->
                            
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4> البيانات الاكاديمية </h4>
                                    <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">المؤهل     </label>
                                       <input  name="CURRENT_DEG" type="text" class="form-control" value="" readonly=""/>
     								  <!-- <select name="CURRENT_DEG"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>-->
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> تاريخ المنح  </label>
                                       <input  name="DEG_DATE" type="text" class="form-control" value="" readonly=""/>
     								  <!-- <input  name="DEG_DATE"  id="DEG_DATE" type="text" class="form-control" value="<?php //echo set_value('DEG_DATE'); ?>" />-->
                                        <?php //echo form_error('DEG_DATE','<span class='.'error'.'>','</span>') ?> 
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
      <?php }?>
</div>     
<?php $this->load->view('app/layout/parts/footer'); ?>
<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#BIRTH_DATE').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#HIRE_DATE').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#DISMISS_DATE').datetimepicker(dateoptions);
</script>


<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#REHIRING_DATE').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#DEG_DATE').datetimepicker(dateoptions);
</script>
