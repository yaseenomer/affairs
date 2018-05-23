<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <ul class="nav nav-tabs tabs-right">

                <li class="active"><a href="#siminars" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Professional & Administrative Experience  </a></li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9 pull-left">

            <div class="tab-content">

                <!------------------------------------------------------->
                <div class="tab-pane fade active in" id="siminars">
                    <form name="form8" action="<?= base_url('upgrades/APP_OTHER_EXPRIENCES/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="row ">
                            <div class="col-md-6">
                                <label></label>
                            </div>


                           <!-- <input type="radio" name="EXP_TYPE" value="1" /> Administrative Experience

                            <input type="radio" name="EXP_TYPE" value="2" />Professional Experience
                         -->
                            <div class="form-group col-md-6">
                                <label class="pull-right" > Type of Experience  </label>
                            <select name="EXP_TYPE" class="form-control">

                                <option value="">Select from the menu</option>
                                <option value="1">Administrative Experience</option>
                                <option value="2">Professional Experience</option>

                            </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">

                            <div class="form-group col-md-12">
                                <label class="pull-right">The Description  </label>
                                <textarea class="form-control" name="DESCRIPTION"></textarea>
                            </div>
                        </div>
                        <div class="row">

                                <div class="form-group col-md-6">
                                    <label class="pull-right"> End date    </label>
                                    <input  type="text" class="form-control" name="EXP_END_DATE" id="EXP_END_DATE" value="<?php echo set_value('EXP_END_DATE'); ?>">
                                    <?php echo form_error('EXP_END_DATE','<span class='.'error'.'>','</span>') ?>
                                </div>

                            <div class="form-group col-md-6">
                                <label class="pull-right"> Start Date    </label>
                                <input  type="text" class="form-control" name="EXP_START_DATE" id="EXP_START_DATE" value="<?php echo set_value('EXP_START_DATE'); ?>">
                                <?php echo form_error('EXP_START_DATE','<span class='.'error'.'>','</span>') ?>
                            </div>

                        </div>
                        <div class="row">
                            <div class=" form-group col-md-6">
                                <label class="pull-right">  University </label>
                                <select name="UNV_ID"class="form-control">
                                    <option>Select from the menu </option>
                                    <?php
                                    if(!empty($univ))
                                    {
                                        foreach($univ as $each)
                                        {
                                            ?>
                                            <option value="<?php echo  $each->UNV_ID ?>"><?php echo $each->UNV_ENG_NAME ?></option>
                                            <?php
                                        }
                                    }
                                    ?>

                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="pull-right">Place of Expertise  </label>
                                <!--<textarea class="form-control" name="TITLE"></textarea>-->
                                <input type="text"class="form-control" name="EXP_PLACE">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label></label>
                            </div>
                            <div class="col-md-6">
                                <label class="pull-right">Attach the Certificate </label>
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
    $('#EXP_END_DATE').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#EXP_START_DATE').datetimepicker(dateoptions);
</script>


