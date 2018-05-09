<?php $this->load->view('app/layout/parts/top') ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-header">
                <div class="header-title">
                    <span class="h-main">الشئون العلمية</span>  /
                    <span class="h-sub">اختيار البرنامج  </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="portlet light bordered">
                        <div class="portlet-body form">
                            <form action="<?=base_url()?>reports/Courses_candicate_report/get2" method="post" role="form" >
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="item"> البرنامج  </label>
                                                <select name="PROG_ID"  class="form-control"  style="width:100%">
                                                    <option>اختار من القائمة </option>
                                                    <?php foreach ($programs as $pro) { ?>
                                                        <option value="<?= $pro->PROG_ID ?>"><?= $pro->PROG_ARAB_NAME ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="item">تاريخ بداية البرنامج </label>
                                                <input  name="START_DATE"  id="DEG_DATE" type="text" class="form-control"  value="<?php echo set_value('DEG_DATE'); ?>"/>
                                                <?php echo form_error('DEG_DATE','<span class='.'error'.'>','</span>') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="item">تاريخ نهاية البرنامج </label>
                                                <input  name="END_DATE"  id="DATE" type="text" class="form-control"  value="<?php echo set_value('DATE'); ?>"/>
                                                <?php echo form_error('DATE','<span class='.'error'.'>','</span>') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input name="" type="submit" class="btn btn-success" value="استمرار">
                                                <input name="" type="reset" class="btn btn-default" value="رجوع">
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
    var dateoptions = {
        timepicker:false,
        format:'Y-m-d H:i:s'
    };
    $('#DEG_DATE').datetimepicker(dateoptions);

    var dateoptions = {
        timepicker:false,
        format:'Y-m-d H:i:s'
    };
    $('#DATE').datetimepicker(dateoptions);
</script>
