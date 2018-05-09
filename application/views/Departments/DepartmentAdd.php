<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">الاقسام</span>
           </div>
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="<?=base_url();?>Departments_con/DepartmentItems" method="post" role="form" >
                     <div class="form-body">
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم الكلية</label>
     								   <select name="loc_no"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <?php foreach ($collAll as $all) { ?>
						               <option value="<?= $all->LOC_NO ?>"><?= $all->LOC_NAME ?></option>
						               <?php  } ?>
									   </select>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">رقم القسم</label>
                                       <input name="dep_no" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
							<div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">  اسم القسم </label>
                                       <input name="dep_name" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="send" type="submit" class="btn btn-success" value="حفظ">
                                     <a href="<?=base_url();?>Departments_con " class="btn btn-default"> رجوع </a>
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