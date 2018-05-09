<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">اعضاء اللجان</span>
           </div>
            
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="<?= base_url() ?>Committees_memberController/Committees_memberSetItems" method="post" role="form" >
                     <div class="form-body">
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم اللجنة</label>
     								   <select name="COMM_ID"  class="form-control"  style="width:100%" id="lev1">
									   <option>اختار من القائمة </option>
									   
									                 
             <?php
     if(!empty($levels))
    {
foreach($levels as $each)
{
    ?>
    <option value="<?php echo  $each->COMM_ID ?>"><?php echo $each->COMM_TITLE ?></option>
    <?php
}
}
?>
    </select>
									  
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                               <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم العضو</label>
                                       <input name="MEMBER_NAME" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <!-- row end -->
                         <!--<div class="row">
                           <div class="col-md-8">
                                <div class="form-group">
                                   <label for="item">رقم عضو اللجنة </label>
                                   <input name="EMP_NO" type="text" class="form-control"   readonly="">

                                    </div>
                                </div>
                            </div>-->
                         <!-- row end -->
                         <div class="row">
                             <div class="col-md-8 ">
                                 <div class="form-group">
                                     <label for="item">الموظف </label>
                                     <select name="EMP_NO"  class="form-control"  style="width:100%">
                                         <option>اختار من القائمة </option>
                                         <?php foreach ($emps as $emp) { ?>
                                             <option value="<?=$emp->EMP_NO?>"><?php echo iconv('windows-1256','utf-8',$emp->EMP_NAME)?> </option>
                                         <?php }  ?>
                                     </select>
                                 </div>
                             </div>
                         </div>
                            <!-- row end -->

                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> الوظيفة في اللجنة</label>
                                       <input name="JOB_TITLE" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="حفظ">
                                        <a href="<?=base_url();?>Committees_memberController" class="btn btn-default"> رجوع </a>
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