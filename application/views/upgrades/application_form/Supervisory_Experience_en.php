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

                        <table class="table table-bordered table-advance" >

                            <tr>
                                <td><?php //echo $find->LOC_NAME ?></td>
                                <th>Name in Arabic</th>
                            </tr>

                            <tbody>
                            <tr>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <th >Name in English</th>
                            </tr>
                            <tr>

                                <td><?php //echo iconv('windows-1256', 'utf-8', $find->EMP_NAME)?> </td>
                                <th>Languages you know </th>
                            </tr>
                            <tr>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <th>Home Phone Number</th>

                            </tr>
                            </tbody>
                        </table>
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
                            <tr>
                                <th>Basis </th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>

                            </tr>
                            <tr>
                                <th>Primary </th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            <tr>
                                <th>Intermediate </th>

                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            <tr>
                                <th> Secondary</th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>

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
                                <td><?php ?></td>
                                <th> Type of Qualification </th>

                            </tr>
                            <tr>
                                <td><?php ?></td>
                                <th> University</th>

                            </tr>
                            <tr>
                                <td><?php ?></td>
                                <th> Country</th>

                            </tr>
                            <tr>
                                <td><?php ?></td>
                                <th> Specialization </th>

                            </tr>
                            <tr>
                                <td><?php ?></td>
                                <th> College</th>

                            </tr>
                            <tr>
                                <td><?php ?></td>
                                <th> Estimation</th>

                            </tr>
                            <tr>
                                <td><?php ?> </td>
                                <th>  Received Date </th>

                            </tr>
                            <tr>
                                <td><?php ?></td>
                                <th>Thesis Title / Research</th>

                            </tr>

                            <tr>
                                <td><?php ?></td>
                                <th>search file </th>

                            </tr>
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
    $('#START_DATE').datetimepicker(dateoptions);
</script>


<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#END_DATE').datetimepicker(dateoptions);
</script>
