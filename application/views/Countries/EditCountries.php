<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">تعديل بيانات الدول</span>
           </div>
            
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
               <?php foreach ($approves as $row): ?>
                 <form action="<?php echo base_url();?>CountriesController/UpdateCountriesItem/<?php echo $row->COUNTRY_NO; ?>" method="post" role="form" >
                         <div class="form-body">
                         
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <label for="item">رقم الدولة</label>
                                       <input name="COUNTRY_NO" type="text"  id="id" disabled="disable" class="form-control" value="<?php echo $row->COUNTRY_NO; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم الدولة</label>
                                       <input name="COUNTRY_NAME" type="text" class="form-control" value="<?php echo iconv("windows-1256" , "utf-8",$row->COUNTRY_NAME); ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="حفظ">
                                        <a href="<?=base_url();?>CountriesController" class="btn btn-default"> رجوع </a>
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