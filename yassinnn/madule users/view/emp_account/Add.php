<?php $this->load->view('app/layout/parts/first');// $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">اضافة مستخدم</span>
           </div>
            
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="<?= base_url() ?>Emp_no/insert" method="post" role="form" >
                     <div class="form-body">
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم المستخدم   </label>
                                       <input name="USER_NAME" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                         <div class="row">
                             <div class="col-md-8">
                                 <div class="form-group">
                                     <label for="item">البريد الالكتروني   </label>
                                     <input name="EMAIL" type="text" class="form-control">
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-8">
                                 <div class="form-group">
                                     <label for="item">كلمة المرور   </label>
                                     <input name="PASSWORD" type="PASSWORD" class="form-control">
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-8">
                                 <div class="form-group">
                                     <label for="item">اعادة كلمة المرور   </label>
                                     <input name="REPASSWORD" type="PASSWORD" class="form-control">
                                 </div>
                             </div>
                         </div>
                           <!-- row end -->
                           
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="استمرار">
                                        <a href="<?=base_url();?>CommitteesController" class="btn btn-default"> رجوع </a>
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