<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">

                <li class="active"><a href="#exp" data-toggle="tab"><i class="fa fa-graduation-cap"></i>   University / Teaching / Supervisory Experience</a></li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">

            <div class="tab-content">

    <!------------------------------------------------------->
                <div class="tab-pane fade active in" id="exp">
                <form name="form4" action="<?= base_url('upgrades/APP_UNIVERSITIES_EXP/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                     <br>
                    <div class="row">
                    <label> نوع الخبرة  </label>
                       <input type="radio" name="UNI_EXP_TYPE" value="1" /> تدريس
                       
                       <input type="radio" name="UNI_EXP_TYPE" value="2" />اشراف داخلي
                       
                       <input type="radio" name="UNI_EXP_TYPE" value="3" />اشراف خارجي

                    </div>
                        <br>  <br>
                    <div class="row">
                         <div class=" form-group col-md-4">
                            <label> Type of Experience </label>
                            <select name="UNI_EXP_SUB_TYPE"class="form-control">

                                <option value=""></option>
                                <option value="1">Ph.D</option>
                                <option value="2">Master</option>
                                <option value="3">High Diploma</option>
                                <option value="5">Bachelor </option>
                                <option value="0">  Diploma</option>

                            </select>

                        </div>

                        <div class="form-group col-md-4">
                            <label > Start Date  </label>
                            <input  type="text" class="form-control" name="START_DATE" id="START_DATE" value="<?php echo set_value('START_DATE'); ?>">
                            <?php echo form_error('START_DATE','<span class='.'error'.'>','</span>') ?>
                        </div>

                        <div class="form-group col-md-4">
                            <label > End date </label>
                            <input  type="text" class="form-control" name="END_DATE" id="END_DATE" value="<?php echo set_value('END_DATE'); ?>">
                            <?php echo form_error('END_DATE','<span class='.'error'.'>','</span>') ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class=" form-group col-md-6">
                            <label>  University </label>
                            <select name="UNV_ID"class="form-control">
                                <option>اختار من القائمة </option>
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
                        <div class="form-group col-md-6">
                            <label>College </label>
                            <input type="text" class="form-control" name="UNIV_EXP_COLLEGE">
                        </div>

                    </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label>Department  </label>
                            <input type="text" class="form-control" name="UNIV_EXP_DEPART">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Specialization  </label>
                            <input type="text" class="form-control" name="UNIV_EXP_SPECIAL">
                        </div></div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>The Courses he Studied  </label>
                            <textarea class="form-control" name="EXP_COURCES"></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Number of Projects Supervised </label>
                            <input type="text" class="form-control" name="PROJECTS_NUMBERS">
                        </div>
                    </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label>Notes  </label>
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
