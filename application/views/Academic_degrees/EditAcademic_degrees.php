<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">تعديل بيانات مؤهل</span>
           </div>
            
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
               <?php foreach ($approves as $row): ?>
                 <form action="<?php echo base_url();?>Academic_degreesController/UpdateAcademic_degreesItem/<?php echo $row->DEG_ID; ?>" method="post" role="form" >
                     
                            <div class="form-body">
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <label for="item">رقم المؤهل</label>
                                       <input name="COUNTRY_NO" type="text"  id="id" disabled="disable" class="form-control" value="<?php echo $row->DEG_ID; ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">المؤهل باللغة العربية </label>
                                       <input name="DEG_ARAB_NAME" type="text" class="form-control" value="<?php echo $row->DEG_ARAB_NAME; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                            
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> المؤهل باللغة الانجليزية</label>
                                       <input name="DEG_ENG_NAME" type="text" class="form-control"value="<?php echo $row->DEG_ENG_NAME; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="حفظ">
                                     <a href="<?=base_url();?>Academic_degreesController" class="btn btn-default"> رجوع </a>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                     </div>
                 </form>
                 <?php endforeach; ?>
              </div>
            </div>
         </div>
      </div>  
    
</div>     
<?php $this->load->view('app/layout/parts/footer'); ?>