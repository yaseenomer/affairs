<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/4/2018
 * Time: 1:06 PM
 */

$this->load->view('app/layout/parts/top');main_header(array());canvas_header('العنوان') ?>

    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#home" data-toggle="tab" style="border-right: 5px solid  #875A7B; color: #875A7B; font-size: 16px; font-weight: bold">
                        <i class="fa fa-check-square-o fa-2x" > </i> <i class="fa fa-user-o"> </i>البيانات الشخصية
                    </a>
                </li>

                <li class=""><a href="#profile" data-toggle="tab">
                        <i class="fa fa-graduation-cap"></i>
                        البيانات الاكاديمية
                    </a>
                </li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="home">
                    <div class="row">
                        <table class="table table-bordered table-advance">
                            <thead>
                            <tr>
                                <th>الكلية</th>
                                <th>القسم</th>
                                <th>إسم الاستاذ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $find->LOC_NAME ?></td>
                                <td><?php echo $find->DEP_NAME ?></td>
                                <td><?php echo iconv('windows-1256', 'utf-8', $find->EMP_NAME)?> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <?php echo form_open('affirs/Scholarship/insert2'); ?>
                                <table class="table table-advance table-bordered">
                                    <thead>
                                    <tr>
                                        <th>المؤهلات</th>
                                        <th>تاريخ منح المؤهل</th>
                                        <th> الجامعة التي منح منها</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($qualifis as $qualifi) { ?>

                                        <tr>
                                            <td>
                                                <input type="radio" name="CURRENT_DEG"
                                                       value="<?= $qualifi->QUAL_NO ?>"> <?= iconv('windows-1256', 'utf-8', $qualifi->QUAL_NAME) ?>
                                                <br>
                                            </td>
                                            <td>
                                                <?php echo date('Y-m-d', strtotime($qualifi->ISSUE_DATE)) ?>
                                                <input name="DEG_DATE"
                                                       type="hidden"
                                                       value="<?php echo date('d-M-y', strtotime($qualifi->ISSUE_DATE)) ?>"
                                                      >
                                            </td>
                                            <td>
                                                <?php echo iconv('windows-1256', 'utf-8', $qualifi->NOTE) ?>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php echo form_close() ?>
                                    </tbody>
                                </table>
                                <input type="submit" class="btn btn-success" value="حفظ ">
                                <input type="submit" class="btn btn-success" value="حفظ وإستمرار  ">
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                </div>

            </div>
        </div>
    </div>

<?php  canvas_footer(); $this->load->view('app/layout/parts/footer'); ?>