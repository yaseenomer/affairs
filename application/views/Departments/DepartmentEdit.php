<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">الاقسام</span>  /
			   <span class="h-sub">تعديل بيانات قسم </span>
           </div>
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="<?=base_url();?>Departments_con/DepartmentupdateItem" method="post" role="form" >
                     <div class="form-body">
                            <table class="table table-bordered table-hover ">
                                <thead>
                                    <tr>
                                    <th>
                                    اسم الكلية 
                                    </th>
                                    <th>
                                    رقم القسم  
                                    </th>
                                    <th>
                                    اسم القسم  
                                    </th>
									</tr>
                                </thead>
                                <tbody>
                                <?php foreach ($colldep as $col) { ?>
                                    <tr>
                        <td> <input type="text" value="<?= $col->LOC_NAME ?>" name="loc_name" readonly>
						<input type="hidden" value="<?= $col->LOC_NO ?>" name="loc_no" readonly >
                                                            </td>
								<?php } ?>
								<?php foreach ($depatedit as $edit) { ?>
                        <td> <input style="width:300px;" type="text" value="<?= $edit->DEP_ID?>" name="dep_id">
                                                            </td>
                        <td> <input style="width:300px;" type="text" value="<?= $edit->DEP_NAME?>" name="dep_name">
                                                            </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="send" type="submit" class="btn btn-success" value="حفظ التعديلات ">
                                     <a href="<?=base_url();?>Departments_con" class="btn btn-default"> رجوع </a>
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