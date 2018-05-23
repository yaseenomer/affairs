<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <ul class="nav nav-tabs tabs-right">

                <li class="active"><a href="#unv" data-toggle="tab"> University Qualifications & University Degree  <i class="fa fa-graduation-cap"></i> </a></li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9 pull-right">

            <div class="tab-content">

    <!------------------------------------------------------->
                <div class="tab-pane fade active in"  id="unv">
                <form name="form3" action="<?= base_url('upgrades/APPLICATION_UNIV_EDU/insert') ?>" method="post" enctype="multipart/form-data" role="form">
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
                            <input type="file"  name="FILE_BATH[]" class="form-control"multiple="multiple">
                        </div>

                    </div>
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="Save">
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
