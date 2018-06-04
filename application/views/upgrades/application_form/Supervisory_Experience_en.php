<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <ul class="nav nav-tabs tabs-right">
                <li class="active"><a href="#personal" data-toggle="tab"><i class="fa fa-user-o"> </i> Personal Information   </a></li>

                <li class=""><a href="#edu" data-toggle="tab">   Pre-University Education <i class="fa fa-graduation-cap"></i></a></li>

                <li class=""><a href="#unv" data-toggle="tab"> University Qualifications & University Degree  <i class="fa fa-graduation-cap"></i> </a></li>

                <li class=""><a href="#exp" data-toggle="tab">   University / Teaching / Supervisory Experience <i class="fa fa-graduation-cap"></i></a></li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9 pull-left">

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
                <div class="tab-pane fade" id="unv">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">

                            <tbody>
                            <tr>
                                <th>search file </th>
                                <th>Thesis Title / Research</th>
                                <th>  Received Date </th>
                                <th> Estimation</th>
                                <th> College</th>
                                <th> Specialization </th>
                                <th> Country</th>
                                <th> University</th>
                                <th> Type of Qualification </th>

                            </tr>
                            <?php
                            if(!empty($UnivData)){
                            foreach ($UnivData as $find) { ?>
                              <tr>
                                  <td><?php echo $find->FILE_BATH?></td>
                                  <td><?php echo $find->THESIS_TITLE?></td>
                                  <td><?php echo $find->DATE_OF_ISSUED ?> </td>
                                  <td><?php echo $find->UNIV_EDU_GRADE?></td>
                                  <td><?php echo $find->UNIV_EDU_COLLEGE?></td>
                                  <td><?php echo $find->COUNTRY_NO?></td>
                                  <td><?php echo $find->COUNTRY_NO?></td>
                                  <td><?php echo $find->UNV_ID?></td>
                                  <td><?php echo $find->UNIV_EDU_TYPE ?></td>

                              </tr>
                           
                            <?php } }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->

                <div class="tab-pane fade " id="exp">
                    <?php echo form_open_multipart(base_url('upgrades/APP_UNIVERSITIES_EXP/insert'));  ?>

                    <br>
                    <div class="row" >
                        <div class="col-md-6">
                            <label></label>
                        </div>
                        <input type="hidden"  name="app_id"  value="<?php echo $this->session->app_id; ?>" class="form-control">
                        <input type="hidden"  name="emp_no"  value="<?php echo $this->session->emp_no;  ?>" class="form-control">
                        <div class="form-group col-md-6 pull-left">
                           <label class="pull-right">Type of experience </label>
                            <br>
                            <select name="UNI_EXP_TYPE"class="form-control">

                                <option value="">Select from the menu</option>
                                <option value="1">Teaching</option>
                                <option value="2">Internal Supervision</option>
                                <option value="3">External Supervision </option>

                            </select>
                       <!--    <input type="radio" name="UNI_EXP_TYPE" value="1" /> Teaching
                       
                           <input type="radio" name="UNI_EXP_TYPE" value="2" />Internal Supervision
                       
                           <input type="radio" name="UNI_EXP_TYPE" value="3" />External Supervision
                        -->
                        </div>
                    </div>
                        <br>  <br>
                    <div class="row">

                        <div class="form-group col-md-4">
                            <label class="pull-right"> End date </label>
                            <input  type="text" class="form-control" name="END_DATE" id="END_DATE" value="<?php echo set_value('END_DATE'); ?>">
                            <?php echo form_error('END_DATE','<span class='.'error'.'>','</span>') ?>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="pull-right"> Start Date  </label>
                            <input  type="text" class="form-control" name="START_DATE" id="START_DATE" value="<?php echo set_value('START_DATE'); ?>">
                            <?php echo form_error('START_DATE','<span class='.'error'.'>','</span>') ?>
                        </div>

                         <div class=" form-group col-md-4">
                            <label class="pull-right"> Type of Experience </label>
                            <select name="UNI_EXP_SUB_TYPE"class="form-control">

                                <option value="">Select from the menu</option>
                                <option value="1">Ph.D</option>
                                <option value="2">Master</option>
                                <option value="3">High Diploma</option>
                                <option value="5">Bachelor </option>
                                <option value="0">  Diploma</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="pull-right">College </label>
                            <input type="text" class="form-control" name="UNIV_EXP_COLLEGE">
                        </div>

                        <div class=" form-group col-md-6">
                            <label class="pull-right">  University </label>
                            <select name="UNV_ID"class="form-control">
                                <option>Select from the menu </option>
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


                    </div>
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label class="pull-right">Specialization  </label>
                                <input type="text" class="form-control" name="UNIV_EXP_SPECIAL">
                            </div>

                        <div class="form-group col-md-6">
                            <label class="pull-right">Department  </label>
                            <input type="text" class="form-control" name="UNIV_EXP_DEPART">
                        </div>

                        </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label class="pull-right">Number of Projects Supervised </label>
                            <input type="text" class="form-control" name="PROJECTS_NUMBERS">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="pull-right">The Courses he Studied  </label>
                            <textarea class="form-control" name="EXP_COURCES"></textarea>
                        </div>

                    </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label></label>
                            </div>
                        <div class="form-group col-md-6">
                            <label class="pull-right">Notes  </label>
                            <textarea class="form-control" name="NOTES"></textarea>
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="Add More">
                                <input type="submit" class="btn btn-success" value="Save & Continue">
                            </div>
                        </div>

                    <?php echo form_close()?>

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
    $('#START_DATE').datetimepicker(dateoptions);
</script>


<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#END_DATE').datetimepicker(dateoptions);
</script>
