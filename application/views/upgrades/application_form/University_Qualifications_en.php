<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <ul class="nav nav-tabs tabs-right">
                <li class="active"><a href="#personal" data-toggle="tab"><i class="fa fa-user-o"> </i> Personal Information   </a></li>

                <li class=""><a href="#edu" data-toggle="tab">   Pre-University Education <i class="fa fa-graduation-cap"></i></a></li>

                <li class=""><a href="#unv" data-toggle="tab"> University Qualifications & University Degree  <i class="fa fa-graduation-cap"></i> </a></li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9 pull-right">

            <div class="tab-content">
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
                <div class="tab-pane fade " id="edu">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">

                            <tr>
                                <th>School Grade</th>
                                <th>School Name   </th>
                                <th>Country </th>
                                <th>YEAR</th>
                                <th>TO YEAR </th>
                                <th> Rating / Percentage</th>
                                <th>Certificate</th>
                            </tr>

                            <tbody>
                            <?php
                            if(!empty($pre)){
                                foreach ($pre as $find) { ?>
                            <tr>
                                <th><?php echo $find->PRE_EDU_TYPE ?> </th>
                                <td><?php echo $find->SCHOOL_NAME ?></td>
                                <td><?php echo $find->COUNTRY_NO ?></td>
                                <td><?php echo $find->PRE_EDU_START ?></td>
                                <td><?php echo $find->PRE_EDU_END ?></td>
                                <td><?php echo $find->PRE_EDU_GRADE ?></td>
                                <td><?php echo "uploads/attach/PRE_EDU/".$APP_ID.$find->FILE_BATH ?></td>

                            </tr>

                            <?php } }?>
                            </tbody>
                        </table>
                    </div>
                    <br>  <br>


                    <!-- </form>-->
                </div>
                <!------------------------------------------------------->
                <!------------------------------------------------------->
                <div class="tab-pane fade "  id="unv">
                    <?php echo form_open_multipart(base_url('upgrades/APPLICATION_UNIV_EDU/insert'));  ?>

                    <div class="row">

                    <div class=" form-group col-md-12">
                        <label class="pull-right">  Country </label>
                        <select name="COUNTRY_NO"  class="form-control"  style="width:60%"  id="lev1">
                            <option>Select from the menu</option>

                            <?php
                            if(!empty($levels))
                            {
                                foreach($levels as $each)
                                {
                                    ?>
                                    <option value="<?php echo  $each->COUNTRY_NO ?>"><?php echo $each->COUNTRY_NAME_ENG?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>

                    </div>

                </div>
                    <div class="row">

                        <div class=" form-group col-md-6">
                            <label class="pull-right">  University </label>
                            <select name="UNV_ID"class="form-control">
                                <option>Select from the menu</option>

                                <?php
                                if(!empty($uni))
                                {
                                    foreach($uni as $each)
                                    {
                                        ?>
                                        <option value="<?php echo  $each->UNV_ID ?>"><?php echo $each->UNV_ENG_NAME ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>

                    <div class=" form-group col-md-6">
                        <label class="pull-right"> Type of Qualification  </label>
                        <select name="UNIV_EDU_TYPE"class="form-control">
                            <option>Select from the menu</option>
                            <option value="Two Years Diploma">Two Years Diploma</option>
                            <option value="Diploma 3 years">Diploma 3 Years</option>
                            <option value="Bachelor of 4 Years">Bachelor of 4 Years</option>
                            <option value="Bachelor of 5 Years">Bachelor of 5 Years</option>
                            <option value=" Higher Diploma"> Higher Diploma</option>
                            <option value="master ">master </option>
                            <option value="Ph.D">Ph.D</option>

                        </select>
                    </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="pull-right"> Specialization  </label>
                            <input type="text" class="form-control" name="UNIV_EDU_SPECIAL">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="pull-right"> College </label>
                            <input type="text" class="form-control" name="UNIV_EDU_COLLEGE">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label class="pull-right"> Estimation </label>
                            <input type="text" class="form-control" name="UNIV_EDU_GRADE">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="pull-right"> Received Date </label>
                            <input type="text" class="form-control" name="DATE_OF_ISSUED" id="DATE_OF_ISSUED"value="<?php echo set_value('DATE_OF_ISSUED'); ?>" >
                            <?php echo form_error('DATE_OF_ISSUED','<span class='.'error'.'>','</span>') ?>
                        </div>

                    </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label></label>
                                </div>

                              <div class="form-group col-md-6">
                                <label class="pull-right"> Thesis Title / Research  </label>
                                   <textarea class="form-control" name="THESIS_TITLE"></textarea>
                              </div>
                            </div>
                     <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label></label>
                        </div>
                        <div class="col-md-6">

                            <label class="pull-right"> Attach the search file </label>
                            <input type="file"  name="attachs[]" class="form-control"multiple="multiple">
                        </div>

                    </div>
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="Add More">
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
    $('#DATE_OF_ISSUED').datetimepicker(dateoptions);
</script>
