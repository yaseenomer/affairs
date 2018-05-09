<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
             <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">المرشحين للدورات</span>
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
                                       <label for="item">الدورة </label>
     								   <select name="PROG_ID"  class="form-control"  style="width:100%">
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
                                       <label for="item">الموظف </label>
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
                                       <label for="item">الكلية </label>
     								   <select name="LOC_NO"  class="form-control"  style="width:100%">
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
                                                    <input name="CAND_TYP" id="optionsRadios1" value="1" checked="" type="radio">   مقبول
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="CAND_TYP" id="optionsRadios2" value="2" type="radio">     مرشح
                                                </label>
                                            </div>
                                          </div>
							
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الهاتف </label>
                                       <input name="REL_PHONE" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            
                             <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> البريد الالكتروني </label>
                                       <input name="E_MAIL" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-2">
                                    <div class="form-group">
                                       <label for="item"> الرسوم مثلا 00000.00</label>
                                       <input name="COUR_FEES" type="text" class="form-control" >
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