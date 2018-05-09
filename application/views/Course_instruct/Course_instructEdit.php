<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
<div class="page-content">
    <div class="page-header">
        <div class="header-title">
            <span class="h-main"> الشئون العلمية </span>  /
            <span class="h-sub"> تعديل بيانات الدورة </span>
        </div>   
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <div class="portlet light bordered">
            <div class="portlet-body form">
                <form action="<?php echo base_url();?>Course_instruct_con/UpdateInstrcour" method="post" role="form" >
                    <div class="form-body">
							<div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> الاستاذ الجديد </label>
     								   <select name="newIns"  class="form-control"  style="width:100%">
									   <?php foreach ($CourInstAll as $row){ ?>
									   <option value="<?php echo $row->INS_ID; ?>"><?php echo $row->INS_ARAB_NAME; ?></option>
									   <?php } ?>
									   <?php foreach ($InstrAll as $all) { ?>
									   <option value="<?= $all->INS_ID ?>"><?= $all->INS_ARAB_NAME ?></option>
						               <?php  } ?>
									   </select>
									   <input type="hidden" value="<?= $row->INS_ID; ?>" name="inid" readonly >
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
							<div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> اسم البرنامج الجديد </label>
     								   <select name="newPro"  class="form-control"  style="width:100%">
									   <?php foreach ($CourInstAll as $row){ ?>
									   <option value="<?php echo $row->COUR_ID; ?>"><?php echo $row->PROG_ARAB_NAME; ?></option>
									   <?php  } ?>
									   <?php foreach ($ProgAll as $alli) { ?>
									   <option value="<?= $alli->PROG_ID ?>"><?= $alli->PROG_ARAB_NAME ?></option>
						               <?php  } ?>
									   </select>
									   <input type="hidden" value="<?= $row->COUR_ID; ?>" name="cuid" readonly >
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="حفظ">
                                     <a href="<?=base_url();?>Course_instruct_con " class="btn btn-default"> رجوع </a>
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