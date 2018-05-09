<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">تعديل بيانات الجامعات</span>
           </div>
            
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
               <?php foreach ($approves as $row): ?>
                <form action="<?php echo base_url();?>UniversitiesController/UpdateUniversitiesItem/<?php echo $row->UNV_ID; ?>" method="post" role="form" >
                     <div class="form-body">
                     
                      <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <label for="item">رقم الجامعة</label>
                                       <input name="UNV_ID" type="text"  id="id" disabled="disable" class="form-control" value="<?php echo $row->UNV_ID; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                           <!-- <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الدولة </label>
     								   <select name="COUNTRY_NO"  class="form-control"  style="width:100%" id="lev1">
									   	<option>اختار من القائمة </option>
									                 
             <?php
     if(!empty($levels))
    {
foreach($levels as $each)
{
    ?>
    <option value="<?php echo  $each->COUNTRY_NO ?>"><?php echo $each->COUNTRY_NAME ?></option>
    <?php
}
}
?>
    </select>
                                    </div>
                                </div>
                            </div>-->
                            <!-- row end -->
                               <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم الجامعة عربي</label>
                                       <input name="UNV_ARAB_NAME"  id="lev2"type="text" class="form-control" value="<?php echo $row->UNV_ARAB_NAME; ?> ">
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم الجامعة انجليزي</label>
                                       <input name="UNV_ENG_NAME" type="text" class="form-control" value="<?php echo $row->UNV_ENG_NAME; ?>" >
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="حفظ">
                                        <a href="<?=base_url();?>UniversitiesController" class="btn btn-default"> رجوع </a>
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
<script type="text/javascript">
   $(function(){
	   $('#lev1').change(function(){

	  var id1 = $('#lev1').val();
	  
	    $.ajax({
			type:'POST',
			url:'<?php echo base_url() ?>'+'Leveltwocotroller/fillLevel2',
			data:{id:id1},
			success: function(r){
			  // alert(id);
				$('#lev2').html(r);
			}
		});
	   });
	   
	   $('#lev2').change(function(){
	   var id = $('#lev2').val();
	  // alert(id);
	    $.ajax({
			type:'POST',
			url:'<?php echo base_url() ?>'+'Leveltwocotroller/fillLevel3',
			data:{lev1id:id},
			success: function(r){
				$('#lev3').html(r);
			}
		});
	   });
	   
	   $('#lev3').change(function(){
	   var id = $('#lev3').val();
	  // alert(id);
	    $.ajax({
			type:'POST',
			url:'<?php echo base_url() ?>'+'Level5/fillLevel4',
			data:{lev1id:id},
			success: function(r){
				$('#lev4').html(r);
			}
		});
	   });
	   
	   $('#lev4').change(function(){
		  // alert($('#lev4').val());
	     $('#p1').val($('#lev4').val());
	   });
       

	   
   });
</script>