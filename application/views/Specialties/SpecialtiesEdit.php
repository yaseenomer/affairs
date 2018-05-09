<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">التخصصات</span>  /
			   <span class="h-sub">تعديل بيانات تخصص</span>
           </div>
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="<?=base_url();?>Specialties_con/SpecialtieupdateItem" method="post" role="form" >
                     <div class="form-body">
                            <table class="table table-bordered table-hover ">
                                <thead>
                                    <tr>
                                    <th>
                                    اسم الكلية 
                                    </th>
                                    <th>
                                    اسم القسم  
                                    </th>
									<th>
                                    اسم التخصص  
                                    </th>
									<th>
                                    الوصف للتخصص  
                                    </th>
									</tr>
                                </thead>
                                <tbody>
								    <tr>
                                <?php foreach ($collall as $col) { ?>
                                        <td> 
						<input type="text" value="<?= $col->LOC_NAME ?>" name="loc_name" disabled>
						<input type="hidden" value="<?= $col->LOC_NO ?>" name="loc_no">
                                        </td>
								<?php } ?>
								<?php foreach ($deptall as $edit) { ?>
                                        <td> 
						<input type="text" value="<?= $edit->DEP_NAME ?>" name="dep_name"  disabled>
						<input type="hidden" value="<?= $edit->DEP_ID ?>" name="dep_no">
                                        </td>
								<?php } ?>
								<?php foreach ($spcall as $spc) { ?>
                                        <td> 
						<input type="text" style="width:300px;" value="<?= $spc->SP_NAME ?>" name="spc_name">
						                </td>
										<td>
						<input type="text" style="width:300px;" value="<?= $spc->SP_DESC ?>" name="spc_desc">
						<input type="hidden" value="<?= $spc->SP_ID ?>" name="sp_no">
                                        </td>
								<?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="send" type="submit" class="btn btn-success" value="حفظ التعديلات ">
                                     <a href="<?=base_url();?>Specialties_con" class="btn btn-default"> رجوع </a>
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