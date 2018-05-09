<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">تعديل بيانات الدول</span>
           </div>
            
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
               <?php foreach ($approves as $row): ?>
                 <form action="<?php echo base_url();?>Committees_meetingController/UpdateCommittees_meetingItem/<?php echo $row->MEET_ID; ?>" method="post" role="form" >
                         <div class="form-body">
                         <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <label for="item">رقم  اللجنة</label>
                                       <input name="MEET_ID" type="text"  id="id" disabled="disable" class="form-control" value="<?php echo $row->MEET_ID; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <label for="item">رقم اجتماع اللجنة</label>
                                       <input name="COMM_ID" type="text"  id="id" disabled="disable" class="form-control" value="<?php echo $row->COMM_ID; ?>">
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
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="MEET_TYP" id="optionsRadios2" value="2" type="radio">     تدريب
                                                </label>
                                            </div>
                                             <div class="radio">
                                                <label>
                                                    <input name="MEET_TYP" id="optionsRadios2" value="3" type="radio">     ابتعاث
                                                </label>
                                            </div>
                                           </div>
                                                                                     
                                          </div>
                                           
                                          </div>
							                     
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">رقم الاستمارة   </label>
                                       <input name="APP_ID" type="text"  id="id" disabled="disable" class="form-control" value="<?php echo $row->APP_ID; ?>">
     								   
                                    </div>
                                </div>
                            </div>
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item"> التوصية    </label>
                                       <textarea name="RECOMMENDATION" class="form-control"   > <?php echo$row->RECOMMENDATION; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            
                              <!-- row end -->
                            
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="حفظ">
                                        <a href="<?=base_url();?>Committees_meetingController" class="btn btn-default"> رجوع </a>
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
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#MEET_DATE').datetimepicker(dateoptions);
</script>