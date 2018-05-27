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

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9 class="pull-left"">

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
                <div class="tab-pane fade " id="prosearch">
                     <?php echo form_open_multipart(base_url('upgrades/APP_PROJECTS/insert'));  ?>

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
