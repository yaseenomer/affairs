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
                            <thead>
                            <tr>
                                <th>School Grade</th>
                                <th>School Name   </th>
                                <th>Country </th>
                                <th>YEAR</th>
                                <th>TO YEAR </th>
                                <th> Rating / Percentage</th>
                                <th>Certificate</th>
                            </tr>
                            </thead>
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
                            <thead>
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
                            </thead>
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
                <!------------------------------------------------------->
                <div class="tab-pane fade " id="exp">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">
                            <thead>
                            <tr>
                                <th> Notes </th>
                                <th> The Courses he Studied </th>
                                <th> Number of Projects Supervised  </th>
                                <th> Department </th>
                                <th> Specialization </th>
                                <th> College </th>
                                <th> University </th>
                                <th> End date</th>
                                <th> Start Date </th>
                                <th>Type of Experience</th>
                                <th>Type of experience </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(!empty($EXP)){
                                foreach ($EXP as $find) { ?>
                                    <tr>

                                        <td><?php echo $find->NOTES ?></td>
                                        <td><?php  echo $find->EXP_COURCES?></td>
                                        <td><?php echo $find->PROJECTS_NUMBERS ?></td>
                                        <td><?php  echo $find->UNIV_EXP_DEPART?></td>
                                        <td><?php echo $find->UNIV_EXP_SPECIAL ?></td>
                                        <td><?php echo $find->UNIV_EXP_COLLEGE?></td>
                                        <td><?php echo $find->UNV_ID ?></td>
                                        <td><?php echo $find->END_DATE ?></td>
                                        <td><?php echo $find->START_DATE?> </td>
                                        <td><?php echo $find->UNI_EXP_SUB_TYPE?></td>
                                        <td><?php echo $find->UNI_EXP_TYPE?></td>
                                    </tr>
                                <?php } }?>
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

                            <thead>
                            <tr>
                                <th> Project File</th>
                                <th>Description</th>
                                <th> Address</th>
                                <th>Name of Principal Investigator </th>
                                <th>Date of the Project</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(!empty($PRO)){
                                foreach ($PRO as $find) { ?>
                                    <tr>
                                        <td><?php echo $find->FILE_BATH?></td>
                                        <td><?php echo $find->DESCRIPTION?></td>
                                        <td><?php echo $find->PRO_TITLE?> </td>
                                        <td><?php echo $find->RESEARCHER_NAME ?></td>
                                        <td><?php echo $find->DATE_OF_PRO?></td>
                                    </tr>
                                <?php } }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <!------------------------------------------------------->
                <!------------------------------------------------------->
                <div class="tab-pane fade " id="publication">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">
                            <thead>
                            <tr>
                                <th>Publication File</th>
                                <th>The Description </th>
                                <th>Address</th>
                                <th>Place</th>
                                <th> The language </th>
                                <th>Date</th>
                                <th> Type of PUBLICATIONS </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(!empty($PUB)){
                                foreach ($PUB as $find) { ?>
                                    <tr>
                                        <td><?php  echo $find->FILE_BATH ?></td>
                                        <td><?php  echo $find->DESCRIPTION?></td>
                                        <td><?php echo $find->TITLE ?></td>
                                        <td><?php echo $find->PLACE_OF_PUB ?></td>
                                        <td><?php echo $find->PUB_LANGUGE ?> </td>
                                        <td><?php echo $find->DATE_OF_PUB ?></td>
                                        <td><?php echo $find->PUB_TYP ?></td>
                                    </tr>
                                <?php } }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <div class="tab-pane fade" id="pubmember">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">
                            <thead>
                            <tr>
                                <th>الملف</th>
                                <th>اسم المنشور</th>
                                <th>الاسم باللغة العربية</th>
                                <th>الاسم باللغة الانجليزية</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(!empty($PEPOLE)){
                                foreach ($PEPOLE as $find) { ?>
                                    <tr>
                                        <td><?php echo $find->FILE_BATH ?></td>
                                        <td><?php echo $find->PUB_SER ?></td>
                                        <td><?php echo $find->FRT_NAME_AR ." ".$find->SND_NAME_AR. " ".$find->THR_NAME_AR." ".$find->LST_NAME_AR ?></td>
                                        <td><?php echo  $find->FRT_NAME_ENG ." ".$find->SND_NAME_ENG. " ".$find->THR_NAME_ENG." ".$find->LST_NAME_ENG ?></td>
                                    </tr>
                                <?php } }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <!------------------------------------------------------->
                <!------------------------------------------------------->
                <div class="tab-pane fade "  id="siminars">
                    <?php //echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <table class="table table-bordered table-advance">
                            <thead>
                            <tr>

                                <th>Certificate</th>
                                <th>Place of Expertise </th>
                                <th>University</th>
                                <th> End date   </th>
                                <th>Start Date </th>
                                <th> The Description</th>
                                <th>Type of Experience </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(!empty($EXPER)){
                            foreach ($EXPER as $find) { ?>
                            <tr>
                                <td><?php echo $find->FILE_BATH ?></td>
                                <td><?php echo $find->UNV_ID ?></td>
                                <td><?php echo $find->EXP_PLACE ?></td>
                                <td><?php echo $find->EXP_END_DATE?> </td>
                                <td><?php echo $find->EXP_START_DATE ?></td>
                                <td><?php echo $find->DESCRIPTION ?></td>
                                <td><?php echo $find->EXP_TYPE ?></td>
                            </tr>
                            <?php } }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------------------------------------------------------->
                <!------------------------------------------------------->
                <!------------------------------------------------------->

                <div class="tab-pane fade " id="personnals">
                        <?php echo form_open_multipart(base_url('upgrades/APP_CV_REFERENCES/insert'))?>

                        <div class="row">
                        <div class="form-group col-md-6">
                            <label class="pull-right"> The Name   </label>
                            <input type="text"class="form-control" name="EMP_NAME">
                            <input type="hidden"  name="app_id"  value="<?php echo $this->session->app_id; ?>" class="form-control">
                            <input type="hidden"  name="emp_no"  value="<?php echo $this->session->emp_no;  ?>" class="form-control">
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
                    <?php echo form_close()?>
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


