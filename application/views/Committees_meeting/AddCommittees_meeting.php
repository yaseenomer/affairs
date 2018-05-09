<?php $this->load->view('app/layout/parts/top') ?>

<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub"> اجتماعات اللجان</span>
           </div>
        <div class="col-md-12">
            <?php if (isset($delete)) { ?>
                <div class="alert alert-success">
                    <?php echo $delete ?>
                </div>
            <?php } ?>
            <?php if (isset($insert)) { ?>
                <div class="alert alert-success">
                    <?php echo $insert ?>
                </div>
            <?php } ?>

            <?php if (isset($update)) { ?>
                <div class="alert alert-success">
                    <?php echo $update ?>
                </div>
            <?php } ?>

            <?php if (isset($lockcon)) { ?>
                <div class="alert alert-success">
                    <?php echo $lockcon ?>
                </div>
            <?php } ?>
        </div>

     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="<?= base_url() ?>Committees_meetingController/Committees_meetingSetItems" method="post" role="form" >
                    <div class="form-body">
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم اللجنة  </label>
     								   <select name="COMM_ID"  class="form-control"  style="width:100%">
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
                                       <label for="item"> تاريخ  الاجتماع  </label>
                                       <input name="MEET_DATE"  id="MEET_DATE" type="text" class="form-control" value="<?php echo set_value('MEET_DATE'); ?>">
                                    <?php echo form_error('MEET_DATE','<span class='.'error'.'>','</span>') ?>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                              <div class="form-group">
                                            <label>  نوع القرار  </label>
                                            <div class="radio">
                                                <label>
                                                    <input name="MEET_TYP" id="optionsRadios1" value="1" checked="" type="radio">   ترقية
                                                </label>
                                                <label>
                                                    <input name="MEET_TYP" id="optionsRadios2" value="2" type="radio">     تدريب
                                                </label>
                                                <label>
                                                    <input name="MEET_TYP" id="optionsRadios2" value="3" type="radio">     ابتعاث
                                                </label>

                                           </div>

                                          </div>

                                          </div>

                            <!-- row end -->

                         <!--   <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">رقم الاستمارة   </label>
     								   <select name="APP_ID"  class="form-control"  style="width:100%">

									   <option></option>
									   </select>
                                    </div>
                                </div>
                            </div>
                             <!-- row end -->
                            <!-- <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> التوصية    </label>
                                       <textarea name="RECOMMENDATION" class="form-control" ></textarea>
                                    </div>
                                </div>
                            </div>

                              <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="التالي">
                                        <a href="<?=base_url();?>Committees_meetingController" class="btn btn-default"> رجوع </a>
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
    var dateoptions = {
	      timepicker:false,
          format:'d-M-Y'
	 };
    $('#MEET_DATE').datetimepicker(dateoptions);
</script>

