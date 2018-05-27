<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <ul class="nav nav-tabs tabs-right">

                <li class="active"><a href="#personal" data-toggle="tab"><i class="fa fa-user-o"> </i> Personal Information   </a></li>

                <li class=""><a href="#edu" data-toggle="tab">   Pre-University Education <i class="fa fa-graduation-cap"></i></a></li>

                <li class=""><a href="#unv" data-toggle="tab"> University Qualifications & University Degree  <i class="fa fa-graduation-cap"></i> </a></li>

                <li class=""><a href="#exp" data-toggle="tab">   University / Teaching / Supervisory Experience <i class="fa fa-graduation-cap"></i></a></li>

                <li class=""><a href="#prosearch" data-toggle="tab"> Research Projects <i class="fa fa-graduation-cap"></i> </a></li>

                <li class=""><a href="#publication" data-toggle="tab"> Publications,Conferences & Research  <i class="fa fa-graduation-cap"></i></a></li>
                <li class=""><a href="#pubmember" data-toggle="tab"> Participants in The Publication  <i class="fa fa-graduation-cap"></i></a></li>

                <li class=""><a href="#siminars" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Professional & Administrative Experience  </a></li>

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
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">

                            <tr>
                                <td><?php ?></td>
                                <th>Type of experience </th>
                                <td><?php ?></td>
                                <th>Type of Experience</th>

                            </tr>

                            <tbody>
                            <tr>
                                <td><?php ?> </td>
                                <th> Start Date </th>
                                <td><?php  ?></td>
                                <th> End date</th>

                            </tr>

                            <tr>
                                <td><?php  ?></td>
                                <th> University </th>
                                <td><?php  ?></td>
                                <th> College </th>

                            </tr>

                            <tr>
                                <td><?php  ?></td>
                                <th> Specialization </th>
                                <td><?php  ?></td>
                                <th> Department </th>

                            </tr>
                            <tr>
                                <td><?php  ?></td>
                                <th> Number of Projects Supervised  </th>

                            </tr>
                            <tr>
                                <td><?php  ?></td>
                                <th> The Courses he Studied </th>

                            </tr>
                            <tr>
                                <td><?php  ?></td>
                                <th> Notes </th>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <!------------------------------------------------------->
                <div class="tab-pane fade " id="prosearch">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">
                            <tbody>
                            <tr>
                                <td><?php ?></td>
                                <th>Date of the Project</th>

                            </tr>
                            <tr>
                                <td><?php  ?></td>
                                <th>Name of Principal Investigator </th>

                            </tr>
                            <tr>
                                <td><?php ?> </td>
                                <th> Address</th>

                            </tr>
                            <tr>
                                <td><?php ?></td>
                                <th>Description</th>

                            </tr>
                            <tr>
                                <td><?php ?></td>
                                <th> Project File</th>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <!------------------------------------------------------->
                <div class="tab-pane fade " id="publication">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">
                            <tbody>
                            <tr>
                                <td><?php ?></td>
                                <th>Date</th>
                                <td><?php ?></td>
                                <th> Type of PUBLICATIONS </th>


                            </tr>
                            <tr>
                                <td><?php ?> </td>
                                <th> The language </th>
                                <td><?php ?></td>
                                <th>Place</th>

                            </tr>
                            <tr>
                                <td><?php ?></td>
                                <th>Address</th>

                            </tr>
                            <tr>
                                <td><?php ?></td>
                                <th>The Description </th>

                            </tr>
                            <tr>
                                <td><?php ?></td>
                                <th>Publication File</th>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <div class="tab-pane fade" id="pubmember">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">

                            <tr>
                                <th>الاسم باللغة العربية</th>
                                <td><?php //echo $find->LOC_NAME ?></td>
                            </tr>

                            <tbody>
                            <tr>
                                <th>الاسم باللغة الانجليزية</th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <!------------------------------------------------------->
                <div class="tab-pane fade " id="siminars">
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


