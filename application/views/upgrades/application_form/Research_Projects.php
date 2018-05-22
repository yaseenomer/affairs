<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('السيرة الذاتية /CV ') ?>

    <div class="row">
        <?php  echo form_open(base_url('upgrades/APP_FORM'))?>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">

                <li class="active"><a href="#prosearch" data-toggle="tab"><i class="fa fa-graduation-cap"></i>    المشروعات البحثية</a></li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">

            <div class="tab-content">

                   <!------------------------------------------------------->
                <div class="tab-pane fade active in" id="prosearch">
                 <form name="form5" action="<?= base_url('upgrades/APP_PROJECTS/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label > تاريخ المشروع   </label>
                            <input  type="text" class="form-control" name="DATE_OF_PRO" id="DATE_OF_PRO" value="<?php echo set_value('DATE_OF_PRO'); ?>">
                            <?php echo form_error('DATE_OF_PRO','<span class='.'error'.'>','</span>') ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label>أسم الباحث الرئيسي  </label>
                            <!--<textarea class="form-control" name="RESEARCHER_NAME"></textarea>-->
                            <input type="text" class="form-control" name="RESEARCHER_NAME">
                        </div>
                    </div>
                        <div class="form-group col-md-6">
                            <label>العنوان  </label>
                            <textarea class="form-control" name="PRO_TITLE"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label>الوصف  </label>
                            <textarea class="form-control" name="DESCRIPTION"></textarea>
                        </div>

                     <div class="row">
                        <div class="col-md-4">
                            <label>أرفق  ملف المشروع</label>
                            <input type="file"  name="FILE_BATH[]" class="form-control"multiple="multiple">
                        </div>

                    </div>
                        <br>  <br>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="حفــــظ">
                            <input type="submit" class="btn btn-success" value="حفظ و إستمرار">
                        </div>
                    </div>
                </form>
                </div>
                <!------------------------------------------------------->

            </div>

        </div>
        <?php echo form_close()?>
    </div>

<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#DATE_OF_PRO').datetimepicker(dateoptions);
</script>