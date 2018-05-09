<?php  $this->load->view('app/layout/parts/top');main_header(array('الترقيات'));canvas_header('الترقيات ') ?>


    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#coll" data-toggle="tab">
                        <i class="fa fa-user-o"> </i> معلومات عن الكلية
                    </a>
                </li>

                <li class=""><a href="#profile" data-toggle="tab">
                        <i class="fa fa-graduation-cap"></i>
                         معلومات عن مقدم الطلب
                    </a>
                </li>

                <li class=""><a href="#holiday" data-toggle="tab">
                        <i class="fa fa-graduation-cap"></i>
                           الإجازات
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="coll">
                    الاساسية
                </div>

                <div class="tab-pane fade" id="profile">
                     الاكاديمية
                </div>

                <div class="tab-pane fade" id="holiday">
                     الاكاديمية
                </div>
            </div>
        </div>
    </div>












<?php  canvas_footer(); $this->load->view('app/layout/parts/footer'); ?>