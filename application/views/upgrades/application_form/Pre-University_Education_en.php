<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <ul class="nav nav-tabs tabs-right">

                <li class="active"><a href="#personal" data-toggle="tab"><i class="fa fa-user-o"> </i> Personal Information   </a></li>

                <li class=""><a href="#edu" data-toggle="tab">   Pre-University Education <i class="fa fa-graduation-cap"></i></a></li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9 pull-left">

            <div class="tab-pane fade active in" id="personal">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <?php
                        if(!empty($person)){
                            foreach ($person as $find) { ?>
                                <table class="table  table-advance table-bordered" >
                                    <tr><td><?php echo $find->FRT_NAME_AR ." ". $find->SND_NAME_AR." ".$find->THR_NAME_AR." ".$find->LST_NAME_AR ?></td></tr>
                                    <thead><tr><th>Name in Arabic</th></tr></thead>

                                    <thead><tr> <th >Name in English</th></tr></thead>
                                    <tr> <td><?php echo $find->FRT_NAME_ENG." ". $find->SND_NAME_ENG." ". $find->THR_NAME_ENG." ". $find->LST_NAME_ENG ?></td></tr>

                                    <thead><tr> <th>Languages you know </th></tr></thead>
                                    <tr> <td><?php echo $find->EMP_LANGUAGES ?> </td></tr>

                                    <thead><tr> <th>Home Phone Number</th></tr></thead>
                                    <tr> <td><?php echo $find->HOME_PHONE ?></td></tr>
                                </table>
                            <?php } }?>
                    </div>
                    <br>  <br>


                    <!-- </form>-->
                </div>
                <!------------------------------------------------------->
                <!------------------------------------------------------->

                <div class="tab-pane fade" id="edu">
                    <?php echo form_open_multipart(base_url('upgrades/Edu/insert'))?>
                    <div class="row">
                        <input type="hidden"  name="app_id"  value="<?php echo $this->session->app_id; ?>" class="form-control">
                        <input type="hidden"  name="emp_no"  value="<?php echo $this->session->emp_no;  ?>" class="form-control">
                        <div class=" form-group col-md-6">
                            <label class="pull-right">  School Grade </label>
                            <select name="PRE_EDU_TYPE"class="form-control">
                                <option value=""></option>
                                <option value="Basis">Basis</option>
                                <option value="Primary">Primary</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Secondary">Secondary</option>

                            </select>
                        </div>

                        <div class=" form-group col-md-6">
                            <label class="pull-right">  School Name  </label>
                            <input type="text"  name="SCHOOL_NAME" class="form-control">
                        </div>
                    </div>
                        <br>
                        <div class="row form-group col-md-12 pull-right">

                            <label for="item" class="pull-right"> Country</label>
                            <select name="COUNTRY_NO"  class="form-control form-group col-md-12  "   id="lev1">
                                <option>Select from the menu </option>

                                <?php
                                if(!empty($levels))
                                {
                                    foreach($levels as $each)
                                    {
                                        ?>
                                        <option value="<?php echo  $each->COUNTRY_NO ?>"><?php echo $each->COUNTRY_NAME_ENG ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                            <br> <br> <br>
                        <div class="row">
                            <div class=" form-group col-md-4">
                                <label class="pull-right"> Rating / Percentage </label>
                                <input type="TEXT" class="form-control" name="PRE_EDU_GRADE">
                            </div>

                            <div class=" form-group col-md-4">
                                <label class="pull-right"> TO YEAR    </label>
                                <input type="text" class="form-control" name="PRE_EDU_END" id="PRE_EDU_END" value="<?php echo set_value('PRE_EDU_END'); ?>">
                                <?php echo form_error('PRE_EDU_END','<span class='.'error'.'>','</span>') ?>
                            </div>

                            <div class=" form-group col-md-4">
                            <label class="pull-right">  YEAR </label>
                            <input type="text" class="form-control" name="PRE_EDU_START" id="PRE_EDU_START" value="<?php echo set_value('PRE_EDU_START'); ?>" >
                            <?php echo form_error('PRE_EDU_START','<span class='.'error'.'>','</span>') ?>
                            </div>

                        </div>

                    
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label></label>
                        </div>
                        <div class="col-md-6">
                            <label class="pull-right">Attach The Certificate </label>
                            <input type="file"  name="attachs[]" class="form-control">
                        </div>

                    </div>
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                               
                                <input type="submit" class="btn btn-success" value="Save & Contiue">
                            </div>
                        </div>

                    <?php echo form_close()?>
                </div>
    <!------------------------------------------------------->
    <div class="row">
                            <div class="form-group col-md-12">
                                <form name="form2" action="<?= base_url('upgrades/Edu/create_en') ?>" method="post" enctype="multipart/form-data" role="form">
                                <input type="submit" class="btn btn-success" value="Add More">
                                 </form>
                                
                            </div>
                        </div>

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

