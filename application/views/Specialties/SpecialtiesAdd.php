<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
<div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">التخصصات</span>
           </div>
    </div>
	
<div class="row" id="collages">
    <div class="col-md-10 col-md-offset-1">
        <div class="portlet light bordered">
            <div class="portlet-body form">
                <form action="<?=base_url();?>Specialties_con/SpecialtieItems" method="post" role="form" >
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="item">الكلية </label>
     								<select name="LOC_NO"  class="form-control"  style="width:100%" id="LOC_NO">
									<option>اختار من القائمة </option>
									<?php foreach ($collAll as $all) { ?>
						               <option value="<?= $all->LOC_NO ?>"><?= $all->LOC_NAME ?></option>
						            <?php  } ?>
									</select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="item">القسم </label>
     								<select name="DEP_ID"  class="form-control"  style="width:100%" id="DEP_ID">
									<option>اختار من القائمة </option>
									</select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="item">اسم التخصص </label>
                                    <input name="SP_NAME" type="text" class="form-control" id="SP_NAME" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="item">الوصف  </label>
                                    <textarea  name="SP_DESC" type="text" class="form-control" id="SP_DESC"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input name="" type="submit" class="btn btn-success" value="حفظ">
                                   <a href="<?=base_url();?>Specialties_con " class="btn btn-default"> رجوع </a>
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
</div>    
<?php $this->load->view('app/layout/parts/footer'); ?>
 <script>
 $(document).ready(function () {
	$('#DEP_ID').attr('disabled',true);
	$('#LOC_NO').change(function () {
		$("#LOC_NO option:selected").each(function () {
			var a = $(this).val();
			//alert(a);
			$.ajax({
				url:'<?=base_url()?>Specialties_con/getdpewhere',
				cache: true,
				method: "POST",
				data: {colid: a},
				success: function (data) {
					$('#DEP_ID').attr('disabled',false);
					$('#DEP_ID').html(data); }
            });
        });
    });
});
</script>
