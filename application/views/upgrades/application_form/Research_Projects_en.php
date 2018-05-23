<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <ul class="nav nav-tabs tabs-right">

                <li class="active"><a href="#prosearch" data-toggle="tab"> Research Projects <i class="fa fa-graduation-cap"></i> </a></li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9 class="pull-left"">

            <div class="tab-content">

                <div class="tab-pane fade active in" id="prosearch">
                 <form name="form5" action="<?= base_url('upgrades/APP_PROJECTS/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="pull-right"> Date of the Project   </label>
                            <input  type="text" class="form-control" name="DATE_OF_PRO" id="DATE_OF_PRO" value="<?php echo set_value('DATE_OF_PRO'); ?>">
                            <?php echo form_error('DATE_OF_PRO','<span class='.'error'.'>','</span>') ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="pull-right">Name of Principal Investigator  </label>
                            <!--<textarea class="form-control" name="RESEARCHER_NAME"></textarea>-->
                            <input type="text" class="form-control" name="RESEARCHER_NAME">
                        </div>
                    </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                            <label class="pull-right">Address  </label>
                            <textarea class="form-control" name="PRO_TITLE"></textarea>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="pull-right">Description  </label>
                            <textarea class="form-control" name="DESCRIPTION"></textarea>
                        </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                             <label></label>
                         </div>
                        <div class="form-group col-md-6">
                            <label class="pull-right">Attach the Project File</label>
                            <input type="file"  name="FILE_BATH[]" class="form-control"multiple="multiple">
                        </div>

                    </div>
                        <br>  <br>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="Save">
                            <input type="submit" class="btn btn-success" value="Save & Continue">
                        </div>
                    </div>
                </form>
                </div>
                <!------------------------------------------------------->

            </div>

        </div>

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
