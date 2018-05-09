<?php $this->load->view('app/layout/parts/top'); ?>


<div class="page-content-wrapper">
    <div class="page-content">

        <div class="page-header">
            <div class="header-title">
                <span class="h-main">  الدول  </span>
                <span class="h-sub">

                </span>
            </div>
            <div class="header-action">


            </div>
        </div>
        <div class="row">
             
            <div class="col-md-10 col-md-offset-1">

                <div class="portlet light bordered" id="vue-5">
                    <div class="portlet-title">
                        <div class="actions">
                            <?php // if (for_admin_accounting()){  ?>
                            <a href="<?=base_url()?>UniversitiesController/AddUniversities" class="btn green btn-sm">
                                 اضافة جامعة جديدة  </a>
                            <?php  //} ?>
                             </div>
                    </div>
                    <div class="portlet-body form">
                        <form role="form" action="<?=base_url()?>CountriesController" method="post">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php if (isset($approve)) { ?>
                                            <div class="alert alert-success">
                                                <?php echo $approve ?>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($addcon)) { ?>
                                            <div class="alert alert-success">
                                                <?php echo $addcon ?>
                                            </div>
                                        <?php } ?>
                                         <?php if (isset($editcon)) { ?>
                                            <div class="alert alert-success">
                                                <?php echo $editcon ?>
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
                                                    <th> رقم الدولة </th>
                                                     <!--<th> إسم الدولة</th>-->
                                                    <th>اسم الجامعة باللغة العربية</th>
                                                    <th>اسم الجامعة باللغة الانجليزية</th>
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

                                              <?php foreach ($generals as $general) { ?>

                                                <tr>
                                                    <td><?= $general->COUNTRY_NO ?></td>
                                                   <!-- <td><?= $general->COUNTRY_NAME ?> </td>-->
                                                    <td><?= $general->UNV_ARAB_NAME ?> </td>
                                                    <td><?= $general->UNV_ENG_NAME ?> </td>
 <td>
 <div class="btn-group">
     <a href="<?=base_url()?>UniversitiesController/ShowUniversities/<?= $general->UNV_ID ?>"  class="fa fa-info-circle"></a>  
</div>
</td>
<td>
<div class="btn-group">
     <a href="<?=base_url()?>UniversitiesController/EditUniversities/<?= $general->UNV_ID ?>"  class="fa fa-edit text-success"></a>  
</div>
</td>
<td>
<div class="btn-group">
     <a href="<?=base_url()?>UniversitiesController/DeleteUniversities/<?= $general->UNV_ID ?>" class="fa fa-trash-o text-danger"></a> 
   
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
<?php $this->load->view('app/layout/parts/footer'); ?>
