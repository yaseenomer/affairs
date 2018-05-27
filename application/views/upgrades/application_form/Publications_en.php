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

                <li class=""><a href="#prosearch" data-toggle="tab"> Research Projects <i class="fa fa-graduation-cap"></i> </a></li>

                <li class=""><a href="#publication" data-toggle="tab"> Publications,Conferences & Research  <i class="fa fa-graduation-cap"></i></a></li>
                <li class=""><a href="#pubmember" data-toggle="tab"> Participants in The Publication  <i class="fa fa-graduation-cap"></i></a></li>

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
                        <?php echo form_open_multipart(base_url('upgrades/APP_PUBLICATIONS/insert'));  ?>
                        <div class="row">
                        <label class="pull-right"> Type of PUBLICATIONS </label>
                        <input type="radio" name="PUB_TYP" value="1" /> Conference

                        <input type="radio" name="PUB_TYP" value="2" />Activity

                        <input type="radio" name="PUB_TYP" value="3" />Scientific paper

                        <input type="radio" name="PUB_TYP" value="4" />Semmenar

                        <input type="radio" name="PUB_TYP" value="5" />Published

                        <input type="radio" name="PUB_TYP" value="6" />Book

                        <input type="radio" name="PUB_TYP" value="7" />Magazine

                        <input type="radio" name="PUB_TYP" value="8" />symposium


                    </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="pull-right"> Date    </label>
                                <input  type="text" class="form-control" name="DATE_OF_PUB" id="DATE_OF_PUB"value="<?php echo set_value('DATE_OF_PUB'); ?>">
                                <?php echo form_error('DATE_OF_PUB','<span class='.'error'.'>','</span>') ?>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="pull-right">Place  </label>
                                <input type="text" class="form-control" name="PLACE_OF_PUB">
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label class="pull-right">The language  </label>
                            <input type="text" class="form-control" name="PUB_LANGUGE">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="pull-right">Address  </label>
                            <!--<textarea class="form-control" name="TITLE"></textarea>-->
                            <input type="text"class="form-control" name="TITLE">
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label></label>
                            </div>
                        <div class="form-group col-md-6">
                            <label class="pull-right">The Description  </label>
                            <textarea class="form-control" name="DESCRIPTION"></textarea>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label></label>
                            </div>
                            <div class="col-md-6">
                                <label class="pull-right">Attach the Publication File </label>
                                <input type="file"  name="attachs[]" class="form-control"multiple="multiple">
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
                <!------------------------------------------------------->

                <div class="tab-pane fade" id="pubmember">
                    <form name="form7" action="<?= base_url('upgrades/PUBLICATIONS_PARTS/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="row">

                            <div class="col-md-3">
                                <label class="pull-right">Fourth Name</label>
                                <input type="text"  name="LST_NAME_ENG" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label class="pull-right">Third Name</label>
                                <input type="text"  name="THR_NAME_ENG" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label class="pull-right">Second Name</label>
                                <input type="text"  name="SND_NAME_ENG" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label class="pull-right">First Name</label>
                                <input type="text"  name="FRT_NAME_ENG" class="form-control">
                            </div>


                        </div>
                        <br>
                        <!----- names  arabic-->
                        <div class="row">
                            <div class="col-md-3">
                                <label>الأسم الأول </label>
                                <input type="text"  name="FRT_NAME_AR" class="form-control">
                            </div>


                            <div class="col-md-3">
                                <label>الأسم الثاني </label>
                                <input type="text"  name="SND_NAME_AR" class="form-control">
                            </div>


                            <div class="col-md-3">
                                <label>الأسم الثالث </label>
                                <input type="text"  name="THR_NAME_AR" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>الأسم الرابع </label>
                                <input type="text"  name="LST_NAME_AR" class="form-control">
                            </div>

                        </div>
                        <br>
                        <!--  <div class="row">
                              <div class="col-md-4">
                                  <label>أرفق  الملف </label>
                                  <input type="file"  name="FILE_BATH" class="form-control">
                              </div>

                          </div>-->
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
    $('#DATE_OF_PUB').datetimepicker(dateoptions);
</script>
