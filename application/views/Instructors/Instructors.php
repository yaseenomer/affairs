
<?php $this->load->view('app/layout/parts/top'); ?>

<div class="portlet box caption">
    <div class="portlet-title">
        <div class="caption">

            <h3 class="page-title">
                الشئون العلمية   <small></small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="<?php echo base_url();?>guides"> التدريب  </a>
                        <i class="fa fa-angle-left"></i>
                    </li>
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="<?php echo base_url();?>guides/show">الاساتذة   </a>
                        <i class="fa fa-angle-left"></i>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</div>
	 
	 
<?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong></strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php }else if($this->session->flashdata('error')){  ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong></strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php }else if($this->session->flashdata('warning')){  ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong></strong> <?php echo $this->session->flashdata('warning'); ?>
        </div>
    <?php }else if($this->session->flashdata('info')){  ?>
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong></strong> <?php echo $this->session->flashdata('info'); ?>
        </div>
    <?php } ?>

        </div>
    </div>
</div>

	 
	 
<div class="page-container"><div class="page-content-wrapper">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                

				
<form class="form-horizontal" role="form"  action = "<?php echo base_url();?>Instructors_con/add"  method="post" enctype="multipart/form-data" >

    <div class="form-body">
	
	
     <div class="form-group">
			  <label class="col-md-2 control-label">   النوع </label>
            <div class="col-md-8">
			    <div class="radio">
      <label><input type="radio" name="type" value="1" id="internal" checked="checked" > داخلي  </label>
   
      <label><input type="radio" name="type" value="2" id="external"> خارجي  </label>
    </div> 
     </div>
	   </div>

 <div id="in">
 
	   <div class="form-group">
			 <label class="col-md-2 control-label"> الكلية    </label>
            <div class="col-md-8">
           <select name="loc"  class="form-control input-lg" id="loc" >
<option>اختر من القائمة  </option>
 <?php
   if(!empty($loc))
   {
    foreach($loc as $each)
      {
   $LOC_NO= $each->LOC_NO ;

    echo "<option value=".$LOC_NO.">".$each->LOC_NAME."</option>";
 }
   }
 ?>
 </select>
            </div> 
			</div>
		 <div class="form-group">
			 <label class="col-lg-2 control-label"> القسم    </label>
            <div class="col-lg-8">
           <select name="dept" class="form-control input-lg" id="dept">
	 <option>اختار من القائمة </option>
	 </select>
            </div> 
			 </div> 
			 </div>
			 <div class="form-group">
			 <label class="col-lg-2 control-label"> الدرجة العلمية   </label>
            <div class="col-lg-8">
          <select name="DEG" class="form-control input-lg" style="width:100%" required>
	 <option>اختار من القائمة </option>
		 <?php
      if(!empty($degree))
    {
     foreach($degree as $each)
     {
    $DEG_ID= $each->DEG_ID ;
  echo "<option value=".$DEG_ID.">".$each->DEG_ARAB_NAME. "</option>";
  }
 }
 ?>
 </select>
            </div> 
			</div>
		
     	 <div class="form-group">
            <label class="col-md-2 control-label"> الاسم باللغة العربية     </label>
            <div class="col-md-8">
           <select id="arb" name="num"  class="form-control input-lg"  required >
	       <option>اختار من القائمة </option>
	
           </select>
           <input type="hidden" id="nam" name="emp_name" />
            </div>  </div> 
			 <div class="form-group">
            <label class="col-md-2 control-label"> الاسم باللغة العربية     </label>
            <div class="col-md-8">
           <input type ="text"  name="arab"  id="ar" class="form-control input-lg"  >
	   
            </div>  </div>
			
			 <div class="form-group">
			 <label class="col-md-2 control-label"> الاسم باللغة الانجليزية  </label>
            <div class="col-md-8">
           <input type="text " class="form-control input-lg"  id="eng" name="eng" required >
              </input>
            </div> 
			 </div> 
	  
			
			 <label class="col-md-2 control-label "> السيرة الذاتية    </label>
            <div class="col-md-3">
			
          <label class="btn btn-default btn-file">
        Browse <input type="file"  name="cv">
    </label>
              </input>
            </div> 
			 </div> 
	  
	
			 
			
 <div class="form-group">
    <div class="col-md-10 form-actions right1" align="left">
        <button type="submit" class="btn btn-success ">حفظ </button>
        <a href="<?=base_url();?>Instructors_con" class="btn btn-default"> رجوع </a>
    </div>
	</div>
	
	</div>
</form>	
		</div>
		</div>
		</div>
		</div>
	 
	 
	 

	 
	 
	 
<?php $this->load->view('app/layout/parts/footer'); ?>
 
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	  <script type="text/javascript">
	$(document).ready(function()
{
$('#internal').click(function()
{
$('#loc').removeAttr("disabled")
$('#dept').removeAttr("disabled")
$('#arb').removeAttr("disabled")
$('#ar').attr("disabled","disabled");
});
$('#external').click(function()
{
$('#loc').attr("disabled","disabled");
$('#dept').attr("disabled","disabled");
$('#arb').attr("disabled","disabled");
$('#ar').removeAttr("disabled")
});
});
</script>
	
	

<script type="text/javascript">

    $(function(){
        $('#loc').change(function() {
            var id = $('#loc').val();
           // alert(id);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url() ?>' + 'Instructors_con/get_depart',
                data: {loc_id: id},
                success: function (r) {
                    $('#dept').html(r);
                }
            });
        });
    });
	
	
	
	 $(function(){
        $('#loc').change(function() {
            var id = $('#loc').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url() ?>' + 'Instructors_con/get_emp',
                data: {loc_id: id},
                success: function (r) {
                    $('#arb').html(r);
                }
            });
        });
    });
		
	 $(function(){
        $('#arb').change(function() {
            var id = $('#arb').val();
			var name = $('#arb option:selected').text();
           $('#nam').val(name);
	        $.ajax({
                type: 'POST',
                url: '<?php echo base_url() ?>' + 'Instructors_con/get_name',
                data: {emp_no: id},
                success: function (r) {
                    $('#nam').html(r);
                }
            });
        });
    });
</script>
