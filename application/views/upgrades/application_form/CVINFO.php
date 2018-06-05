<?php
$this->load->view('app/layout/parts/top'); ?>
<div class="page-content-wrapper" dir="LTR">
    <div class="page-content">
        <div class="page-header">
            <div class="header-title">
                <span class="h-main">CURRICULUM VITAE  /   </span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="portlet light">
                    <div class="portlet-body">
                        <form action="<?= base_url('CVINFO/') ?>" method="post">
                            <input type="hidden"  name="app_id"  value="<?php echo $this->session->app_id; ?>" class="form-control">
                            <input type="hidden"  name="emp_no"  value="<?php echo $this->session->emp_no;  ?>" class="form-control">
                            <?php
                            if(!empty($Data)){
                            foreach ($Data as $info) { ?>
                            <label for="item" class="h-main">	1.	Personal Data</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="item">a.	Name	 </label>
                                       <input type="text" class="form-control"   value="<?= iconv("WINDOWS-1256","utf-8", $info->EMP_NAME) ?>" readonly>

                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="item">b.	Place of Birth & Date</label>
                                      <input type="text" class="form-control"  value="<?= $info->BIRTH_DATE .','.  iconv("windows-1256","utf-8", $info->BIRTH_PLACE )?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="item">c.	Nationality</label>
                                       <!-- <input type="text" class="form-control"   value="<?= iconv('windows-1256','utf-8',$info->NAT_NAME)?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="item">d.	Religion</label>
                                         <input type="text" class="form-control"   value="<?= iconv('windows-1256','utf-8',$info->RELIGION_NAME)?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="item">e.	Marital Status</label>
                                         <input type="text" class="form-control"   value="<?= iconv('windows-1256','utf-8',$info->MERITAL_NAME)?>" readonly>
                                    </div>
                                </div>
                            </div>
<?php }}?>
                            <!-- row end -->
                            <!-- row end -->
                            <label for="item" class="h-main">	2 . Present Address</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <!-- row end -->
                            <label for="item" class="h-main">	3.	Education</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	4.	Qualifications</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	5.	Thesis Title</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	6.	Area of Interest</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	7.	Professiona Experience</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	8.	Teaching Experience</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="item">a.	Undergraduate	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="item">b.   Postgraduate Teaching after PhD</label>
                                        <!-- <input type="text" class="form-control" name="full_name"  value="<?= iconv('windows-1256','utf-8',$info->EMP_TEC_NAME)?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	9.	Supervision of Post graduate Students</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="item">a.	Sudan Universty of Science & Technology	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="item">	b.	Other Universities</label>
                                        <!-- <input type="text" class="form-control" name="full_name"  value="<?= iconv('windows-1256','utf-8',$info->EMP_TEC_NAME)?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="item">c.	Internal and external examiner</label>
                                        <!-- <input type="text" class="form-control" name="full_name"  value="<?= iconv('windows-1256','utf-8',$info->EMP_TEC_NAME)?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	10.	Research Projects:</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	11.	Administrative Experience</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	12. Membership</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	13.	Extra Curricular Activities</label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	14.	Publications </label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	15.	Seminars, Conferences & Synopses </label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <label for="item" class="h-main">	16.	Referees (3 Persons ) </label>
                            <hr style="border:1px solid black">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="item">KLKLK	 </label>
                                        <!--  <input type="text" class="form-control" name="usr_name"  value="<?= $info->USR_NAME?>" readonly>-->
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="submit"  class="btn btn-success" value="حفظ  التعديل ">
                                </div>
                                <a href="<?= base_url().'CVINFO' ?>">
                                    <input class="btn btn-default" value="رجوع">
                                </a>
                            </div>
                            <?php echo form_close()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('app/layout/parts/footer'); ?>









