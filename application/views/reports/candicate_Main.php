<?php $this->load->view('app/layout/parts/top') ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-header">
                <div class="header-title">
                    <span class="h-main"> الشئون العلمية</span>  /
                    <span class="h-sub"> التقارير </span>
                </div>
            </div>
            <div>
                <div class="text-center font-red-flamingo" style="font-size: 20px;"></div>
            </div>
            <div>
                <a  href="<?=base_url("reports/Courses_candicate_report/show1") ?>" class="btn btn-success">المرشحين</a>
                <a  href="<?=base_url("reports/Courses_candicate_report/show2") ?>" class="btn btn-success">المقبولين</a>
            </div>
        </div>
    </div>
<?php $this->load->view('app/layout/parts/footer'); ?>