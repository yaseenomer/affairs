<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <ul class="nav nav-tabs tabs-right ">

                <li class="active"><a href="#personal" data-toggle="tab"><i class="fa fa-user-o"> </i> Personal Information   </a></li>

                <li class=""><a href="#edu" data-toggle="tab">   Pre-University Education <i class="fa fa-graduation-cap"></i></a></li>

                <li class=""><a href="#unv" data-toggle="tab"> University Qualifications & University Degree  <i class="fa fa-graduation-cap"></i> </a></li>

                <li class=""><a href="#exp" data-toggle="tab">   University / Teaching / Supervisory Experience <i class="fa fa-graduation-cap"></i></a></li>

                <li class=""><a href="#prosearch" data-toggle="tab"> Research Projects <i class="fa fa-graduation-cap"></i> </a></li>

                <li class=""><a href="#publication" data-toggle="tab"> Publications,Conferences & Research  <i class="fa fa-graduation-cap"></i></a></li>
                <li class=""><a href="#pubmember" data-toggle="tab"> Participants in The Publication  <i class="fa fa-graduation-cap"></i></a></li>

                <li class=""><a href="#siminars" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Professional & Administrative Experience  </a></li>

                <li class=""><a href="#personnals" data-toggle="tab"> People can be Consulted  <i class="fa fa-graduation-cap"></i></a></li>
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
                <div class="tab-pane fade "  id="siminars">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">
                            <tbody>
                            <tr>
                                <th>Type of Experience </th>
                                <td><?php //echo $find->LOC_NAME ?></td>
                                <th> The Description</th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>

                            <tr>
                                <th> End date   </th>
                                <td><?php ?> </td>
                                <th>Start Date </th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            <tr>

                            </tr>
                            <tr>
                                <th>University</th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            <tr>
                                <th>Place of Expertise </th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            <tr>
                                <th>Certificate</th>
                                <td><?php //echo $find->DEP_NAME ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <!------------------------------------------------------->
                <!------------------------------------------------------->

                <div class="tab-pane fade " id="personnals">
                    <form name="form9" action="<?= base_url('upgrades/APP_CV_REFERENCES/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="pull-right"> The Name   </label>
                            <input type="text"class="form-control" name="EMP_NAME">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="pull-right"> Current Address  </label>
                            <input type="text"class="form-control" name="ADDRESS">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="pull-right">Phone   </label>
                            <input type="text"class="form-control" name="REL_PHONE">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="pull-right">E-mail     </label>
                            <input type="text"class="form-control" name="E_MAIL">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="pull-right">Job   </label>
                            <input type="text"class="form-control" name="REF_JOB">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="pull-right">Workplace      </label>
                            <input type="text"class="form-control" name="WORK_PLC">
                        </div>

                        <div  class="form-group col-md-12  "  >
                            <label class="pull-right"> scientific degree     </label>
                            <select name="CURRENT_DEG" class="form-group col-md-12  " >
                                <option  dir="rtl">Select from the menu </option>
                                <?php
                                if(!empty($qual))
                                {
                                    foreach($qual as $q)
                                    {
                                        ?>
                                        <option value="<?php echo  $q->DEG_ID ?>"><?php echo $q->DEG_ENG_NAME ?></option>
                                        <?php
                                    }
                                }
                                ?>


                            </select>
                        </div>
                    </div>

                    <div class="row" >
                        <div class="form-group col-md-12" >
                            <input type="submit" class="btn btn-success" value="Save">
                        </div>
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

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#DATE_OF_ISSUED').datetimepicker(dateoptions);
</script>

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

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#DATE_OF_PRO').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#DATE_OF_PUB').datetimepicker(dateoptions);
</script>

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


