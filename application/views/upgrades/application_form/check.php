<?php $this->load->view('app/layout/parts/top');main_header(array('الترقيات')); canvas_header(' CV/السيرة الذاتية') ?>

    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#coll" data-toggle="tab">
                        <i class="fa fa-user-o"> </i> اختار لغة السيرة الذاتية
                    </a>
                </li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">

            <div class="tab-content">

                <div class="tab-pane fade active in" id="coll">

                    <div class="row">
                        <div class="col-md-4">

                            <a href="<?php echo base_url()?>upgrades/Application_Form/create/1">اللغة العربية</a>
                        </div>

                        <div class="col-md-4">

                            <a href="<?php echo base_url()?>upgrades/Application_Form/create_en/2">اللغة الانجليزية</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>