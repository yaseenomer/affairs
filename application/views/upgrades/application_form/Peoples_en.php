<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <ul class="nav nav-tabs tabs-right ">

                <li class="active"><a href="#personnals" data-toggle="tab"> People can be Consulted  <i class="fa fa-graduation-cap"></i></a></li>
            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9 pull-left">

            <div class="tab-content">

                <!------------------------------------------------------->

                <div class="tab-pane fade active in" id="personnals">
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


