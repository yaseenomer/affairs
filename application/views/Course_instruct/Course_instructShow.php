<?php $this->load->view('app/layout/parts/top'); ?>
<div class="page-content-wrapper">
    <div class="page-content">
	    <div class="page-header">
            <div class="header-title">
                <span class="h-main">  اساتذة الدورات   </span>
            </div>
        </div>
        <div class="row">
		    <div class="col-md-10 col-md-offset-1">
		        <div class="portlet light bordered" id="vue-5">
                    <div class="portlet-title">
                        <div class="actions">
                            <?php  if (for_admin_accounting()){  ?>
                            <a href="<?=base_url()?>Course_instruct_con/Addcourse_instruct" class="btn green btn-sm">
                                 اضافة دورة جديدة  </a>
                            <?php  } ?>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form role="form" action="<?=base_url()?>/" method="post">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php if (isset($approve)) { ?>
                                            <div class="alert alert-success">
                                                <?php echo $approve ?>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($AddInst)) { ?>
                                            <div class="alert alert-success">
                                                <?php echo $AddInst ?>
                                            </div>
                                        <?php } ?>
                                         <?php if (isset($UpdateInst)) { ?>
                                            <div class="alert alert-success">
                                                <?php echo $UpdateInst ?>
                                            </div>
                                        <?php } ?>
                                           <?php if (isset($deletecon)) { ?>
                                            <div class="alert alert-success">
                                                <?php echo $deletecon ?>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($dis_approve)) { ?>
                                            <div class="alert alert-success">
                                                <?php echo $dis_approve ?>
                                            </div>
                                        <?php } ?>
                                        <div class="">
                                            <table id="example" class="table table-striped table-bordered" cellspacing="0" >
                                                <thead>
                                                <tr>
                                                    <th>
                                                      اسم الاستاذ 
                                                    </th>
                                                    <th>
                                                        اسم البرنامج 
                                                    </th>
                                                    <th>
                                                        عرض 
                                                    </th>
                                                    <th>
                                                        تعديل 
                                                    </th>
                                                    <th>
                                                        حذف 
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($InstrPro as $all) { ?>
												<tr>
                                                    <td><?= $all->INS_ARAB_NAME ?></td>
                                                    <td><?= $all->PROG_ARAB_NAME ?> </td>
<td>
<div class="btn-group">
    <a href="<?=base_url()?>Course_instruct_con/getInstrinfo/<?php echo $all->INS_ID ?>/<?php echo $all->COUR_ID ?>" class="fa fa-info-circle"></a>  
</div>
</td>
<td>
<div class="btn-group">
    <a href="<?=base_url()?>Course_instruct_con/EditInstr/<?php echo $all->INS_ID ?>/<?php echo $all->COUR_ID ?>" class="fa fa-edit text-success"></a>  
</div>
</td>
<td>
<div class="btn-group">
    <a href="<?=base_url()?>Course_instruct_con/DeleteInstr/<?php echo $all->INS_ID ?>/<?php echo $all->COUR_ID ?>" class="fa fa-trash-o text-danger"></a> 
</div>
</td>
                                                </tr>
                                                <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('app/layout/parts/footer'); ?>
 <script type="text/javascript">
$( document ).ready(function(){
	$('#example').DataTable();
});
</script>