
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

	 

	 
<div class="page-container">
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
	
<div class="table-responsive"> 
         <table id="tab" class="table table-bordered " width="100%" cellspacing="1">
       
            <tbody>
        <?php
        if(!empty($d))
        {
            foreach($d as $row)
            {
				   // $x= $row->FILE_BATH;
                ?>
          
                <tr  class="table-secondary">
                       <td >الاسم باللغة العربية </td>
                    <td ><?php echo $row->INS_ARAB_NAME; ?></td> </tr>
					<?php if($row->INS_TYP==1) {?>
					 <tr  class="table-secondary">
					  <td >  الكلية    </td>
					<td ><?php echo $row->LOC_NAME; ?></td> </tr> 
					 <tr  class="table-secondary">
					  <td>القسم  </td>
					<td ><?php echo $row->DEP_NAME; ?></td> </tr> 
						 <?php } ?>
					
				    <tr  class="table-secondary">
					<td>تاريخ الادخال   </td>
				   <td ><?php echo $row->ENTRY_DATE; ?></td> </tr>
				    <tr  class="table-secondary">
					 <td >تاريخ التعديل   </td>
					<td ><?php echo $row->UPDATE_DATE; ?></td> </tr>
					 <tr  class="table-secondary">
					  <td >المستخدم   </td>
						<td ><?php echo $row->USR_NO; ?></td>
                    </tr>
                <?php
            }
        }
        else
        {
            ?>
            <tr>
                <td colspan="5"> لا توجد بيانات </td>
            </tr>
            <?php
        }
        ?>

                </tbody>
    </table>
	
</div>
</div>
</div>
</div>
</div>
</div>

	 
	 
	 
<?php $this->load->view('app/layout/parts/footer'); ?>

<script>
    $(document).ready(function() {
        $('#tab').DataTable();
    });
</script>
