<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <ul class="nav nav-tabs tabs-right">

                <li class="active"><a href="#publication" data-toggle="tab"> Publications,Conferences & Research  <i class="fa fa-graduation-cap"></i></a></li>
                <li class=""><a href="#pubmember" data-toggle="tab"> Participants in The Publication  <i class="fa fa-graduation-cap"></i></a></li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9 pull-left">

            <div class="tab-content">

              <!------------------------------------------------------->
                <div class="tab-pane fade active in" id="publication">
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
