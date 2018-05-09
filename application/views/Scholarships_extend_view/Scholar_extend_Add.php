<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub"> تمديد الابتعاث</span>
           </div> 
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="<?=base_url()?>Scholarships_ext_con/extendItems" enctype="multipart/form-data" method="post" role="form" >
                     <div class="form-body">
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="item">اختر اسم المبتعث </label>
                            <select class="form-control" name="emp_name">
                        <?php foreach ($Scholars as $scholar) { ?>
                            <option value="<?=$scholar->EMP_NO?>"><?=iconv('windows-1256','utf-8',$scholar->EMP_NAME)?></option>
                        <?php } ?>
                            </select>
                            <input type="hidden" name="scholar_id" value="<?=$scholar->SCHOLAR_ID?>">
                            <input type="hidden" name="year_id" value="<?=$scholar->YEAR_ID?>">
                        </div>
                            <!-- row end -->
                        <div class="form-group col-md-6">
                            <label for="item"> فترة التمديد بالشهور  </label>
                            <input name="EXT_DURRATION" type="text" class="form-control"/>
                        </div> 
                             <!-- row end -->
                        <div class="form-group col-md-6">
                            <label for="item"> تاريخ بداية فترة التمديد </label>
                            <input name="START_DATE"  id="START_DATE" type="text" class="form-control" value="<?php echo set_value('START_DATE'); ?>">
                            <?php echo form_error('START_DATE','<span class='.'error'.'>','</span>') ?> 
                        </div>
                            <!-- row end -->
                        <div class="form-group col-md-6">
                            <label for="item"> تاريخ نهاية فترة التمديد </label>
                            <input  name="END_DATE" id="END_DATE" type="text" class="form-control"value="<?php echo set_value('END_DATE'); ?>"/>
                            <?php echo form_error('END_DATE','<span class='.'error'.'>','</span>') ?> 
                        </div>
                           <!-- row end -->
                        <div class="form-group col-md-6">
                            <label for="item"> اسباب التمديد </label>
                            <textarea name="EXT_REASON" class="form-control" ></textarea>
                        </div>
                              <!-- row end -->
                        <div class="form-group col-md-6">
                            <label for="item"> التوصية </label>
                            <textarea name="RECOMMENDATION" class="form-control" ></textarea>
                        </div>
                              <!-- row end -->
                        <div class="form-group col-md-6">
                            <label for="item"> ارفع صورة من التوصية </label>
                            <input type="file" name="attachs[]" class="form-control" multiple="multiple">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="item"> اسم المشرف  </label>
                            <input name="super_name" type="text" class="form-control"/>
                        </div>                               
                             <!-- row end -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input name="" type="submit" class="btn btn-success" value="حفظ">
                                    <a href="<?=base_url();?>Scholarships_ext_con/Addextends" class="btn btn-default"> رجوع </a>
                                </div>
                            </div>
                        </div>
                            <!-- row end -->
                    </div>
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
          format:'y-M-d'
	 };
    $('#START_DATE').datetimepicker(dateoptions);
</script>
<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'y-M-d'
	 };
    $('#END_DATE').datetimepicker(dateoptions);
</script>