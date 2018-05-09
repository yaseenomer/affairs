<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">اساتذة الدورات</span>
           </div>
            
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="<?=base_url();?>Course_instruct_con/InstructorItems" method="post" role="form" >
                     <div class="form-body">
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> اسم البرنامج </label>
     								   <select name="PRO_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <?php foreach ($ProgAll as $alli) { ?>
									   <option value="<?= $alli->PROG_ID ?>"><?= $alli->PROG_ARAB_NAME ?></option>
						               <?php  } ?>
									   </select>
                                    </div>
                                </div>
                            </div>
                              <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> الاستاذ </label>
     								   <select name="INS_ID"  class="form-control"  style="width:100%">
									   <option> اختار من القائمة </option>
									   <?php foreach ($InstrAll as $all) { ?>
									   <option value="<?= $all->INS_ID ?>"><?= $all->INS_ARAB_NAME ?></option>
						               <?php  } ?>
									   </select>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="حفظ">
                                     <a href="<?=base_url();?>Course_instruct_con" class="btn btn-default"> رجوع </a>
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