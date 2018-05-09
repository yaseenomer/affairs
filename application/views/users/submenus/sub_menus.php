<?php $this->load->view('app/layout/parts/top') ?>        
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main"> القوائم</span>  /
               <span class="h-sub">القوائم الفرعية</span>
           </div>
            
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
         
                  <div class="portlet-body form">
                     <form action="<?php echo base_url('users/submenus/save')?>" method="post" role="form" >
                     <div class="form-body">
                         <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">القائمة الرئيسية</label>
                                       <select name="main_menu" type="text" class="form-control" id="main_menu">
                                       <?php echo $main_menu ?>
                                       </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">وصف القائمة الفرعية</label>
                                       <input name="sub_menu" type="text" class="form-control" id="sub_menu">
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">العنوان</label>
                                       <input name="surl" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="حفظ القائمة الفرعية">
                                     <input name="" type="reset" class="btn btn-default" value="الغاء">
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

<div class="row">
<div class="col-md-10 col-md-offset-1">
  <div class="portlet light bordered">


  </div>
</div>
</div>    
<?php $this->load->view('app/layout/parts/footer'); ?>
