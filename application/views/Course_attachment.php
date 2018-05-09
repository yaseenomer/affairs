<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">مرفقات الدورات</span>
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
                                       <label for="item">اسم الدورة </label>
     								   <select name="COUR_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div>
                            </div>
                              <!-- row end -->
							  <div class="input-group image-preview">
						<input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
						<!-- don't give a name === doesn't send on POST/GET --> 
						<span class="input-group-btn"> 
						<!-- image-preview-clear button -->
						<button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
						<!-- image-preview-input -->
						<div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
							<input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
							<!-- rename it --> 
						</div>
						<button type="button" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
						</span> </div>
							  
							  
							  
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الملف </label>
     								    <input type="file"  name="FILE_BATH" class="form-control"/>
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