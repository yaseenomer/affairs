<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">

                <li class="active"><a href="#edu" data-toggle="tab"><i class="fa fa-graduation-cap"></i>   Pre-University Education </a></li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">

            <div class="tab-content">

    <!------------------------------------------------------->

                <div class="tab-pane fade active in" id="edu">
                    <form name="form2" action="<?= base_url('upgrades/Edu/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class=" form-group col-md-6">
                            <label>  School Grade </label>
                            <select name="PRE_EDU_TYPE"class="form-control">
                                <option value=""></option>
                                <option value="Basis">Basis</option>
                                <option value="Primary">Primary</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Secondary">Secondary</option>

                            </select>
                        </div>

                        <div class=" form-group col-md-6">
                            <label>  School Name  </label>
                            <input type="text"  name="SCHOOL_NAME" class="form-control">
                        </div>
                    </div>
                        <br>
                        <div class="row" class=" form-group col-md-6">
                            <label for="item"> Country</label>
                            <select name="COUNTRY_NO"  class="form-control"  style="width:60%"  id="lev1">
                                <option>Select from the menu </option>

                                <?php
                                if(!empty($levels))
                                {
                                    foreach($levels as $each)
                                    {
                                        ?>
                                        <option value="<?php echo  $each->COUNTRY_NO ?>"><?php echo $each->COUNTRY_NAME_EN ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                            <br> <br> <br>
                        <div class="row">
                        <div class=" form-group col-md-4">
                            <label>  YEAR </label>
                            <input type="text" class="form-control" name="PRE_EDU_START" id="PRE_EDU_START" value="<?php echo set_value('PRE_EDU_START'); ?>" >
                            <?php echo form_error('PRE_EDU_START','<span class='.'error'.'>','</span>') ?>
                        </div>


                        <div class=" form-group col-md-4">
                            <label> TO YEAR    </label>
                            <input type="text" class="form-control" name="PRE_EDU_END" id="PRE_EDU_END" value="<?php echo set_value('PRE_EDU_END'); ?>">
                            <?php echo form_error('PRE_EDU_END','<span class='.'error'.'>','</span>') ?>
                        </div>

                        <div class=" form-group col-md-4">
                            <label> Rating / Percentage </label>
                            <input type="TEXT" class="form-control" name="PRE_EDU_GRADE">
                        </div>
                    </div>
                        </div>
                    
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Attach The Certificate </label>
                            <input type="file"  name="FILE_BATH[]" class="form-control"multiple="multiple">
                        </div>

                    </div>
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="Save">
                                <input type="submit" class="btn btn-success" value="Save & Contiue">
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
    $('#PRE_EDU_START').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#PRE_EDU_END').datetimepicker(dateoptions);
</script>

