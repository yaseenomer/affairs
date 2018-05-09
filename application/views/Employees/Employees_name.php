
<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">الموظفين</span>
           </div>
            
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="<?= base_url() ?>Emp_name/Search" method="post" role="form" >
                     <div class="form-body">
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم الموظف</label>
                                       <input name="EMP_NAME" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                         <!-- row end -->
                         <div class="row">
                             <div class="col-md-8">
                                 <div class="form-group">
                                     <label for="item">الكلية </label>

                                     <SELECT name="EMP_NAME"class="form-control">
                                         <OPTION></OPTION>
                                     </SELECT>
                                 </div>
                             </div>
                         </div>


                         <!-- row end -->
                         <div class="row">
                             <div class="col-md-8">
                                 <div class="form-group">
                                     <label for="item">القسم </label>

                                     <SELECT name="EMP_NAME"class="form-control">
                                         <OPTION></OPTION>
                                     </SELECT>
                                 </div>
                             </div>
                         </div>

                         <!-- row end -->
                            <!-- row end -->
                         <div class="row">
                             <div class="col-md-8">
                                 <div class="form-group">
                                     <label for="item">اسم الموظف</label>

                                     <SELECT name="EMP_NAME"class="form-control">
                                         <OPTION></OPTION>
                                     </SELECT>
                                 </div>
                             </div>
                         </div>

                         <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="بحث">
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