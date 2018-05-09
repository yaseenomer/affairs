<?php $this->load->view('app/layout/parts/top');
main_header(array('بيانات المبتعث  '));
canvas_header(iconv('windows-1256', 'utf-8', $all->EMP_NAME), array("<span class='easy-pie-chart' data-percent='73'></span>")) ?>

<div id="schol">


    <?php flashs($success, $error) ?>


    <?php function chart($detail = null)
    {
        if ($detail != null) {
            $rsum = strtotime(date('Y-m-d')) - strtotime($detail->START_DATE);
            $long = strtotime($detail->END_DATE) - strtotime($detail->START_DATE);
            $x = floor($rsum / $long * 100);
            if ($x > 100) {
                echo 100;
            } elseif ($x < 0) {
                echo 0;
            } else {
                echo $x;
            }


        }


    } ?>

    <div class="row">
        <div class="col-md-12">
            <div class="h_main text-center">
                <span class="easy-pie-chart" data-percent="<?php chart($detail) ?>"><span
                            class="cart-span" <?php tip('النسبة المئوية حالة تقدم البعثة      ') ?>><?php chart($detail) ?>
                        % </span></span>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#main" data-toggle="tab"> <i
                                class="fa fa-th green"></i>البيانات الاساسية </a>
                </li>

                <li class=""><a href="#profile" data-toggle="tab"> <i
                                class="fa fa-graduation-cap green"></i> البيانات
                        الاكاديمية</a>
                </li>
                <li class=""><a href="#messages" data-toggle="tab"> <i
                                class="fa fa-list green"></i>
                        بيانات الابتعاث</a>
                <li class=""><a href="#attachment" data-toggle="tab"> <i
                                class="fa fa-folder-open-o green"></i> المرفقات </a>
                </li>
                <li class=""><a href="#status" data-toggle="tab"> <i
                                class="fa fa-check-square-o green"></i>
                        حالة الطلب
                    </a>
                </li>
                <?php if (headOfTheDepartment() || admin() || deanOfTheCollege()) { ?>
                    <li class=""><a href="#dep" data-toggle="tab"> <i
                                    class="fa fa-user-o green"></i> رئيس
                            القسم </a>
                    </li>
                <?php } ?>
                <?php if (deanOfTheCollege() || admin()) { ?>

                    <li class=""><a href="#coll" data-toggle="tab"> <i
                                    class="fa fa-user green"></i> عميد
                            الكلية </a>
                    </li>
                <?php } ?>

                <?php if (secretaryOfAffairs() || admin()) { ?>

                    <li class=""><a href="#affairs" data-toggle="tab"> <i
                                    class="fa fa-user-plus green"></i>الشئون العلمية </a>
                    </li>
                <?php } ?>

                <?php if (committees() || admin()) { ?>

                    <li class=""><a href="#commit" data-toggle="tab"> <i
                                    class="fa fa-users green"></i> اللجان </a>
                    </li>
                <?php } ?>

                <?php if (admin()) { ?>

                    <li class=""><a href="#account" data-toggle="tab"> <i
                                    class="fa fa-dollar green"></i>الاجراءات
                            المالية
                            <span class="badge badge-primary">
                                                        <?php echo count($Expenall) > 0 ? count($Expenall) : '' ?>
                                                    </span>
                        </a>
                    </li>
                <?php } ?>
                <?php if (admin()) { ?>
                    <li class=""><a href="#low" data-toggle="tab"> <i
                                    class="fa fa-gavel green"></i>الاجراءات
                            القانونية </a>
                    </li>
                <?php } ?>
                <?php if (admin() || committees()) { ?>

                    <li class=""><a href="#extension" data-toggle="tab"> <i
                                    class="fa fa-external-link green"></i>
                            التمديد

                            <span id="pulsate-regular" class="badge badge-danger">
                                                        <?php echo count($extends) > 0 ? count($extends) : '' ?>
                                                    </span>
                        </a>

                    </li>
                <?php } ?>
            </ul>

        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="main">

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label class="main_color">الكلية </label>
                            <input type="text" class="form-control"
                                   value="<?= $coldep->LOC_NAME ?>"
                                   readonly>
                        </div>


                        <div class="form-group col-md-6">
                            <label class="main_color">القسم </label>
                            <input type="text" class="form-control"
                                   value="<?= $coldep->DEP_NAME ?>"
                                   readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="main_color">إسم الاستاذ </label>
                            <input type="text" class="form-control"
                                   value="<?= iconv('windows-1256', 'utf-8', $all->EMP_NAME) ?>"
                                   readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="main_color">تاريخ التعيين </label>
                            <input type="text" class="form-control"
                                   value="<?= date('Y-m-d', strtotime($emp->HIRE_DATE)) ?>"
                                   readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="main_color">تاريخ الميلاد </label>
                            <input type="text" class="form-control"
                                   value="<?= date('Y-m-d', strtotime($emp->BIRTH_DATE)) ?>"
                                   readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="main_color">الحالة الإجتماعية </label>
                            <input type="text" class="form-control"
                                   value="<?= $emp->MERITAL ?>"
                                   readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="main_color">الدرجة الوظيفية </label>
                            <input type="text" class="form-control"
                                   value="<?= $emp->CURRENT_DEG ?>"
                                   readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="main_color">رقم الهاتف </label>
                            <a data-toggle="modal" href="#phone">
                                                            <span class="fa fa-external-link font-purple"
                                                                  id="num" <?php tip('لتعديل او ضافة رقم الهاتف') ?>></span>
                            </a>

                            <input id="num1" type="text" class="form-control"
                                   value="<?= $emp->REL_PHONE ?>"
                                   readonly>
                            <input type="hidden" value="<?= $emp->EMP_NO ?>" id="emp_no">

                        </div>


                        <div class="form-group col-md-6">
                            <label class="main_color">البريد الالكتروني </label>
                            <a data-toggle="modal" href="#email">
                                                            <span class="fa fa-external-link font-purple"
                                                                  id="em" <?php tip('لتعديل او ضافة البريد الالكتروني') ?>></span>
                            </a>
                            <input id="em1" type="text" class="form-control"
                                   value="<?php echo iconv('windows-1256', 'utf-8', $emp->E_MAIL) ?>"
                                   readonly>
                        </div>


                    </div>

                </div>
                <div class="tab-pane fade " id="profile">

                    <div class="row">
                        <div class="col-md-12 ">
                            <table class="table table-advance table-bordered table-checkbox">
                                <thead>
                                <tr>
                                    <th class="main_color">المؤهلات</th>
                                    <th class="main_color">تاريخ منح المؤهل</th>
                                    <th class="main_color"> الجامعة التي منح منها</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($qualifis as $qualifi) { ?>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle-o font-red"></i> <?= iconv('windows-1256', 'utf-8', $qualifi->QUAL_NAME) ?>
                                            <br>
                                        </td>
                                        <td>
                                            <input name="DEG_DATE" id="DEG_DATE" type="text"
                                                   class="form-control"
                                                   value="<?php echo date('Y-m-d', strtotime($qualifi->ISSUE_DATE)) ?>"
                                                   readonly/>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control"
                                                   name="DEG_UNIVERSITY"
                                                   value="<?= iconv('windows-1256', 'utf-8', $qualifi->NOTE) ?>"
                                                   readonly>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="messages">

                    <div class="row">
                        <table class="table table-bordered table-advance">
                            <thead>
                            <tr>
                                <th>نوع الإبتعاث</th>
                                <th>مجال التخصص</th>
                                <th>الجامعة المراد الالتحاق بها</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $all->PROG_ARAB_NAME ?></td>
                                <td><?php echo $all->DEP_NAME ?></td>
                                <td><?php echo $all->UNV_ARAB_NAME ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="attachment">
                    <div class="row">
                        <table class="table table-advance table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>الإمتداد</th>
                                <th>النوع</th>
                                <th>فتح</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $i = 1;


                            foreach ($attaches as $attache) {

                                if (!empty($attache)) {
                                    ?>
                                    <tr>


                                        <td><?php echo $i++ ?></td>


                                        <td><?= $attache->FILE_BATH ?></td>
                                        <td>

                                            <?php if (pathinfo($attache->FILE_BATH, PATHINFO_EXTENSION) == 'pdf') { ?>

                                                <i class="fa fa-file-pdf-o fa-2x font-red "></i>

                                            <?php } elseif (pathinfo($attache->FILE_BATH, PATHINFO_EXTENSION) == 'doc') { ?>
                                                <i class="fa fa-file-word-o fa-2x font-blue "></i>
                                            <?php } ?>

                                        </td>
                                        <td>
                                            <?php if ($attache->ATT_TYPE == 1) { ?>
                                                بيانات اساسية
                                            <?php } elseif ($attache->ATT_TYPE == 2) { ?>
                                                خطاب قبول من جامعة
                                            <?php } elseif ($attache->ATT_TYPE == 3) { ?>
                                                توصية تمديد بعثة من   المشرف
                                            <?php } elseif ($attache->ATT_TYPE == 4) { ?>
                                                عقد البعثة

                                            <?php } elseif ($attache->ATT_TYPE == 5) { ?>
                                                صورة من شيك
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a target="_blank"
                                               href="<?= base_url() . 'uploads/' . $all->SCHOLAR_ID . '/' . $attache->FILE_BATH ?>">
                                                <i class="fa fa-folder-open-o font-blue"></i>

                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('affirs/Scholarship/deleteAttache/' . $all->SCHOLAR_ID . '/' . $attache->FILE_BATH . '/' . $attache->ATT_SER) ?>">
                                                <i class="fa fa-trash-o font-red"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } ?>
                            </tbody>
                        </table>

                    </div>

                    <div id="attache">

                        <?php echo form_open_multipart(base_url('affirs/Scholarship/addAttache/' . $all->SCHOLAR_ID)); ?>
                        <input type="hidden" name="type" value="1">
                        <template v-for="att in atts">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="file" name="attachs[]"
                                                       class="form-control"
                                                       multiple="multiple">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <div class="row">


                            <div class="col-md-12" v-if="atts != '' ">

                                <input type="submit" value="حفظ "
                                       class="btn btn-success">

                            </div>
                        </div>

                        <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <a @click.prevent="addAtach()"><i
                                            class="fa fa-plus font-green "></i> <span
                                            class="font-green "
                                            style="font-size: 18px">إضافة مرفقات </span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" v-if="atts != '' ">
                                <a @click.prevent="minAtach()"><i
                                            class="fa fa-trash-o  font-red "></i>
                                    <span
                                            class="font-red "
                                            style="font-size: 18px">حزف  حقل   </span>
                                </a>
                            </div>
                        </div>


                        </form>


                    </div>


                </div>
                <div class="tab-pane fade " id="status">


                    <?php /**
                     * @param $detail
                     */
                    function def_date($detail)
                    {
                        $diff = abs(strtotime($detail->END_DATE) - strtotime($detail->START_DATE));


                        $years = floor($diff / (365 * 60 * 60 * 24));

                        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                        if ($years != 0) {

                            printf("%d <span class='font-blue'>سنة </span>", $years);

                        }

                        if ($months != 0) {

                            printf("%d <span class='font-blue'>شهور  </span>", $months);

                        }

                        if ($days != 0) {
                            printf("%d <span class='font-blue'>يوم  </span>", $days);
                        }
                    }


                    function rem_date($detail)
                    {
                        $diff = strtotime($detail->END_DATE) - strtotime(date('Y-m-d'));

                        $years = floor($diff / (365 * 60 * 60 * 24));

                        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));

                        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                        if ($years < 0) {

                            echo "<span class='font-red'>هذه البعثة منتهية    </span>";

                        } else {

                            if ($years > 0) {
                                printf("%d <span class='font-red'>سنة </span>", $years);
                            }

                            if ($months > 0) {
                                printf("%d <span class='font-red'>شهور  </span>", $months);

                            }

                            if ($days > 0) {
                                printf("%d <span class='font-red'>يوم  </span>", $days);
                            }


                        }
                    }

                    if ($detail == null) { ?>


                        <form action="<?php echo base_url("affirs/ScholarshipTools/add_details/") ?>"
                              method="post">

                            <input type="hidden" name="SCHOLAR_ID"
                                   value="<?php echo $all->SCHOLAR_ID ?>">

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="item"> بداية البعثة </label>
                                    <input name="START_DATE" type="date"
                                           class="form-control"/>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="item"> نهاية البعثة </label>
                                    <input name="END_DATE" type="date"
                                           class="form-control"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input name="" type="submit" class="btn btn-success"
                                               value="حفظ">
                                    </div>
                                </div>
                            </div>
                        </form>

                    <?php } else { ?>


                        <div class="row">

                            <div class="col-md-12">
                                <table class="table table-bordered table-advance">
                                    <thead>
                                    <tr>
                                        <th>تاريخ بداية البعثة</th>
                                        <th> تاريخ نهاية البعثة</th>
                                        <th> طول الفترة الزمنية للبعثة</th>
                                        <th> الزمن المتبقي من نهاية البعثة</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><?php echo date('Y-m-d', strtotime($detail->START_DATE)) ?></td>
                                        <td><?php echo date('Y-m-d', strtotime($detail->END_DATE)) ?></td>
                                        <td>
                                            <?php
                                            def_date($detail);

                                            ?>
                                        </td>
                                        <td>
                                            <?php rem_date($detail) ?>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    <?php } ?>


                </div>
                <?php if (headOfTheDepartment() || admin() || deanOfTheCollege()) { ?>
                    <div class="tab-pane fade " id="dep">


                        <?php if ($depdec != null) { ?>

                            <div class="row">
                                <form action="<?= base_url('affirs/ScolDecisions/decDepart') ?>"
                                      method="post">
                                    <input type="hidden" value="<?= $all->SCHOLAR_ID ?>"
                                           name="SCHOLAR_ID">
                                    <div class="form-group col-md-6">
                                        <label class="main_color">رئيس القسم </label>
                                        <input type="text" class="form-control"
                                               value="<?= $depdec->EMP_NO ?>" readonly>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التاريخ </label>
                                        <input type="text" class="form-control"
                                               value="<?= $depdec->DECISION_DATE ?>"
                                               readonly>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التوصية </label>
                                        <input type="text" class="form-control"
                                               value="<?= $depdec->RECOMMENDATION ?>"
                                               readonly>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">الاولوية </label>
                                        <br>


                                        <input type="radio" class="form-control"
                                               value="<?= $depdec->CANDIDACY_TYPE ?>" <?= $ch = ($depdec->CANDIDACY_TYPE == 1) ? 'checked' : '' ?> >
                                        اساسي

                                        <input type="radio" class="form-control"
                                               value="<?= $depdec->CANDIDACY_TYPE ?>" <?= $ch = ($depdec->CANDIDACY_TYPE == 2) ? 'checked' : '' ?> >
                                        إحطياطي

                                        <input type="radio" class="form-control"
                                               value="<?= $depdec->CANDIDACY_TYPE ?>" <?= $ch = ($depdec->CANDIDACY_TYPE == 0) ? 'checked' : '' ?> >
                                        رفض
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="main_color">القرار </label>
                                        <br>
                                        <input type="radio" class="form-control"
                                               value="<?= $depdec->DECISION ?>" <?= $ch = ($depdec->CANDIDACY_TYPE == 1) ? 'checked' : '' ?>>
                                        مقبول

                                        <input type="radio" class="form-control"
                                               value="<?= $depdec->DECISION ?>" <?= $ch = ($depdec->CANDIDACY_TYPE == 0) ? 'checked' : '' ?>>
                                        رفض
                                    </div>

                                </form>

                            </div>

                        <?php } else { ?>

                            <div class="row">
                                <form action="<?= base_url('affirs/ScolDecisions/decDepart') ?>"
                                      method="post">
                                    <input type="hidden" value="<?= $all->SCHOLAR_ID ?>"
                                           name="SCHOLAR_ID">
                                    <div class="form-group col-md-6">
                                        <label class="main_color">رئيس القسم </label>
                                        <input type="text" class="form-control"
                                               name="EMP_NO">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التاريخ </label>
                                        <input type="date" class="form-control"
                                               name="DECISION_DATE">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التوصية </label>
                                        <input type="text" class="form-control"
                                               name="RECOMMENDATION">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">الاولوية </label>
                                        <br>
                                        <input type="radio" class="form-control" value="1"
                                               name="CANDIDACY_TYPE"> اساسي

                                        <input type="radio" class="form-control" value="2"
                                               name="CANDIDACY_TYPE"> إحطياطي

                                        <input type="radio" class="form-control" value="0"
                                               name="CANDIDACY_TYPE"> رفض
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="main_color">القرار </label>
                                        <br>
                                        <input type="radio" class="form-control" value="1"
                                               name="DECISION"> مقبول

                                        <input type="radio" class="form-control" value="0"
                                               name="DECISION"> رفض
                                    </div>


                                    <div class="form-group col-md-6">
                                        <input type="submit" class="btn btn-success"
                                               value="حفظ ">
                                    </div>


                                </form>

                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if (deanOfTheCollege() || admin()) { ?>
                    <div class="tab-pane fade " id="coll">

                        <?php if ($colldec != null) { ?>

                            <div class="row">
                                <form action="<?= base_url('affirs/ScolDecisions/decDepart') ?>"
                                      method="post">
                                    <input type="hidden" value="<?= $all->SCHOLAR_ID ?>"
                                           name="SCHOLAR_ID">
                                    <div class="form-group col-md-6">
                                        <label class="main_color"> عميد الكلية </label>
                                        <input type="text" class="form-control"
                                               value="<?= $colldec->EMP_NO ?>" readonly>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التاريخ </label>
                                        <input type="text" class="form-control"
                                               value="<?= $colldec->DECISION_DATE ?>"
                                               readonly>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التوصية </label>
                                        <input type="text" class="form-control"
                                               value="<?= $colldec->RECOMMENDATION ?>"
                                               readonly>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">القرار </label>
                                        <br>
                                        <input type="radio" class="form-control"
                                               value="<?= $colldec->DECISION ?>" <?= $ch = ($depdec->CANDIDACY_TYPE == 1) ? 'checked' : '' ?>>
                                        مقبول

                                        <input type="radio" class="form-control"
                                               value="<?= $colldec->DECISION ?>" <?= $ch = ($depdec->CANDIDACY_TYPE == 0) ? 'checked' : '' ?>>
                                        رفض
                                    </div>

                                </form>

                            </div>

                        <?php } else { ?>

                            <div class="row">
                                <form action="<?= base_url('affirs/ScolDecisions/deanDecision') ?>"
                                      method="post">
                                    <input type="hidden" value="<?= $all->SCHOLAR_ID ?>"
                                           name="SCHOLAR_ID">
                                    <div class="form-group col-md-6">
                                        <label class="main_color"> عميد الكلية </label>
                                        <input type="text" class="form-control"
                                               name="EMP_NO">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التاريخ </label>
                                        <input type="date" class="form-control"
                                               name="DECISION_DATE">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التوصية </label>
                                        <input type="text" class="form-control"
                                               name="RECOMMENDATION">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="main_color">القرار </label>
                                        <br>
                                        <input type="radio" class="form-control" value="1"
                                               name="DECISION"> مقبول

                                        <input type="radio" class="form-control" value="0"
                                               name="DECISION"> رفض
                                    </div>


                                    <div class="form-group col-md-6">
                                        <input type="submit" class="btn btn-success"
                                               value="حفظ ">
                                    </div>


                                </form>

                            </div>

                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if (secretaryOfAffairs() || admin()) { ?>
                    <div class="tab-pane fade " id="affairs">

                        <?php if ($affairsdec != null) { ?>

                            <div class="row">
                                <form action="<?= base_url('affirs/ScolDecisions/decDepart') ?>"
                                      method="post">
                                    <input type="hidden" value="<?= $all->SCHOLAR_ID ?>"
                                           name="SCHOLAR_ID">
                                    <div class="form-group col-md-6">
                                        <label class="main_color"> عميد الكلية </label>
                                        <input type="text" class="form-control"
                                               value="<?= $affairsdec->EMP_NO ?>" readonly>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التاريخ </label>
                                        <input type="text" class="form-control"
                                               value="<?= $affairsdec->DECISION_DATE ?>"
                                               readonly>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التوصية </label>
                                        <input type="text" class="form-control"
                                               value="<?= $affairsdec->RECOMMENDATION ?>"
                                               readonly>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">القرار </label>
                                        <br>
                                        <input type="radio" class="form-control"
                                               value="<?= $affairsdec->DECISION ?>" <?= $ch = ($affairsdec->CANDIDACY_TYPE == 1) ? 'checked' : '' ?>>
                                        مقبول

                                        <input type="radio" class="form-control"
                                               value="<?= $affairsdec->DECISION ?>" <?= $ch = ($affairsdec->CANDIDACY_TYPE == 0) ? 'checked' : '' ?>>
                                        رفض
                                    </div>

                                </form>

                            </div>

                        <?php } else { ?>

                            <div class="row">
                                <form action="<?= base_url('affirs/ScolDecisions/affairsDecision') ?>"
                                      method="post">
                                    <div class="form-group col-md-6">

                                        <input type="hidden" value="<?= $all->SCHOLAR_ID ?>"
                                               name="SCHOLAR_ID">
                                        <label class="main_color"> عميد الشئون
                                            العلمية </label>
                                        <input type="text" class="form-control"
                                               name="EMP_NO">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التاريخ </label>
                                        <input type="date" class="form-control"
                                               name="DECISION_DATE">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التوصية </label>
                                        <input type="text" class="form-control"
                                               name="RECOMMENDATION">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="main_color">القرار </label>
                                        <br>
                                        <input type="radio" class="form-control" value="1"
                                               name="DECISION"> مقبول

                                        <input type="radio" class="form-control" value="9"
                                               name="DECISION"> رفض
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="submit" class="btn btn-success"
                                               value="حفظ ">
                                    </div>

                                </form>

                            </div>

                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if (committees() || admin()) { ?>
                    <div class="tab-pane fade " id="commit">
                        <?php if ($meeting != null) { ?>

                            <div class="row">

                                <input type="hidden" value="<?= $all->SCHOLAR_ID ?>"
                                       name="SCHOLAR_ID">
                                <div class="form-group col-md-6">
                                    <label class="main_color"> إسم اللجنة </label>
                                    <input type="text" class="form-control"
                                           value="<?= $meeting->EMP_NO ?>" readonly>
                                </div>


                                <div class="form-group col-md-6">
                                    <label class="main_color">تاريخ إنعقاد اللجنة </label>
                                    <input type="text" class="form-control"
                                           value="<?= $meeting->DECISION_DATE ?>" readonly>
                                </div>


                                <div class="form-group col-md-6">
                                    <label class="main_color">التوصية </label>
                                    <input type="text" class="form-control"
                                           value="<?= $meeting->RECOMMENDATION ?>" readonly>
                                </div>


                                <div class="form-group col-md-6">
                                    <label class="main_color">قرار اللجنة </label>
                                    <br>
                                    <input type="radio" class="form-control"
                                           value="<?= $meeting->DECISION ?>" <?= $ch = ($depdec->CANDIDACY_TYPE == 1) ? 'checked' : '' ?>>
                                    مقبول

                                    <input type="radio" class="form-control"
                                           value="<?= $meeting->DECISION ?>" <?= $ch = ($depdec->CANDIDACY_TYPE == 0) ? 'checked' : '' ?>>
                                    رفض
                                </div>

                                <div class="form-group col-md-6">
                                    <button class="btn btn-success"> حفظ</button>
                                    <br>

                                </div>


                            </div>

                        <?php } else { ?>

                            <div class="row">
                                <form action="<?= base_url('affirs/ScolDecisions/meeting') ?>"
                                      method="post">
                                    <input type="hidden" value="<?= $all->SCHOLAR_ID ?>"
                                           name="SCHOLAR_ID">
                                    <div class="form-group col-md-6">
                                        <label class="main_color"> إسم اللجنة </label>
                                        <input type="text" class="form-control"
                                               name="EMP_NO">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">تاريخ إنعقاد
                                            اللجنة </label>
                                        <input type="date" class="form-control"
                                               name="DECISION_DATE">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">التوصية </label>
                                        <input type="text" class="form-control"
                                               name="RECOMMENDATION">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="main_color">قرار اللجنة </label>
                                        <br>
                                        <input type="radio" class="form-control" value="1"
                                               name="DECISION"> مقبول

                                        <input type="radio" class="form-control" value="0"
                                               name="DECISION"> رفض
                                    </div>


                                    <div class="form-group col-md-6">
                                        <input type="submit" class="btn btn-success"
                                               value="حفظ ">
                                    </div>


                                </form>

                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class="tab-pane fade " id="account">
                    <div class="row">
                        <?php if ($Expenall != null) { ?>
                            <div class="secondary-color"> عرض مصروفات المبتعث</div>
                            <hr>
                            <table class="table table-advance table-bordered" cellspacing="0">
                                <thead align="center">
                                <tr align="center">
                                    <th> #</th>
                                    <th> اسم المصروف / نوع المصروف</th>
                                    <th> نوع السداد</th>
                                    <th> تاريخ الصرف</th>
                                    <th> العملة</th>
                                    <th> المبلغ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $x = 1;  foreach ($Expenall as $all) { ?>
                                    <tr>
                                        <td><?php echo $x++; ?></td>
                                        <td><?= $all->EXPENS_NAME ?></td>
                                        <td><?php if ($all->EXPENS_TYPE == 1) {
                                                echo " من داخل الجامعة ";
                                            } else {
                                                echo "من وزارة التعليم العالي ";
                                            } ?></td>
                                        <td><?php echo date('Y-m-d',strtotime($all->EXPENS_DATE)) ?></td>
                                        <td><?= $all->CURRENCY_NAME ?></td>
                                        <td><?= $all->AMOUNT ?></td>

                                    </tr>
                                <?php } ?>
                                  <tr style="background-color: #dddddd">
                                      <td>  المجموع  </td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td> <?php echo $bound?> جنية سوداني  </td>
                                      <td> <?php echo $dolar?> دولار امريكي  </td>
                                  </tr>
                                </tbody>
                            </table>
                        <?php } ?>

                        <hr>
                        <template v-if="addexpense == 0">
                            <div class="secondary-color" @click="aaddExpense"
                                 style="cursor: pointer"> + إضافة مصروف
                            </div>
                        </template>

                        <template v-if="addexpense == 1">
                            <div class="secondary-color" @click="noAddExpense"
                                 style="cursor: pointer"><i class="fa fa-reply "></i> تراجع
                            </div>
                        </template>


                        <template v-if="addexpense == 1">
                            <?php echo form_open_multipart(base_url() . 'affirs/ScholarshipExpenses/expensesItems') ?>
                            <div class="form-body">
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label class="main_color"> اسم المبتعث </label>
                                        <input type="text" class="form-control"
                                               value="<?= iconv('windows-1256', 'utf-8', $all->EMP_NAME) ?>"
                                               readonly>
                                        <input type="hidden" name="scholar_id"
                                               value="<?= $all->SCHOLAR_ID ?>">
                                    </div>


                                    <div class="col-md-6">
                                        <label class="main_color"> اختر نوع
                                            المصروف </label>
                                        <select class="form-control" name="expense_id"
                                                style="width: 100%">
                                            <?php foreach ($Expenses as $expen) { ?>
                                                <option value="<?= $expen->EXPENS_ID ?>"><?= $expen->EXPENS_NAME ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="main_color"> اختر نوع السداد
                                            المناسب
                                            : </label>
                                        <br>
                                        <div class="inline">
                                            <input type="radio" name="expence_typ"
                                                   id="item"
                                                   value="1">
                                            <label for="item">سداد من داخل
                                                الجامعة </label>
                                        </div>
                                        <div class="inline">
                                            <input type="radio" name="expence_typ"
                                                   id="item2" value="2">
                                            <label for="item2">سداد من وزارة التعليم
                                                العالي</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="main_color"> تاريخ الصرف </label>
                                        <input name="expense_date" type="date"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="main_color"> العملة </label>
                                        <select class="form-control" name="currency_id"
                                                style="width: 100%">
                                            <?php foreach ($Currencies as $currency) { ?>
                                                <option value="<?= $currency->CURRENCY_ID ?>"><?= $currency->CURRENCY_NAME ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="main_color"> الملبغ </label>
                                        <input type="text" class="form-control"
                                               name="amounte">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="main_color"> صورة من الشيك </label>
                                        <input type="file" name="attachs[]" class="form-control">
                                        <input type="hidden" name="type" value="5">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input name="" type="submit"
                                                   class="btn btn-success" value="حفظ">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </template>
                    </div>
                </div>
                <div class="tab-pane fade " id="low">

                    <?php if ($this->schol->getAttachereType($all->SCHOLAR_ID, 4) == null) { ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="line-gray ">
                                    <div class="line-text">
                                        ارفق عقد البعثة
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <?php echo form_open_multipart(base_url('affirs/Scholarship/addAttache/' . $all->SCHOLAR_ID)); ?>
                        <div class="row">
                            <input type="hidden" name="type" value="4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" name="attachs[]"
                                           class="form-control"
                                           multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="حفظ "
                                           class="btn btn-success"></div>
                        </div>


                            </form>





                    <?php } else { ?>

                        <div class="row">
                            <table class="table  table-advance  table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاسم</th>
                                    <th>الإمتداد</th>
                                    <th>النوع</th>
                                    <th>فتح</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $i = 1;


                                foreach ($this->schol->getAttachereType($all->SCHOLAR_ID, 4) as $attache) {?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>

                                        <td><?= $attache->FILE_BATH ?></td>
                                        <td>

                                            <?php if (pathinfo($attache->FILE_BATH, PATHINFO_EXTENSION) == 'pdf') { ?>

                                                <i class="fa fa-file-pdf-o fa-2x font-red "></i>

                                            <?php } elseif (pathinfo($attache->FILE_BATH, PATHINFO_EXTENSION) == 'doc') { ?>
                                                <i class="fa fa-file-word-o fa-2x font-blue "></i>
                                            <?php } ?>

                                        </td>
                                        <td>
                                            عقد البعثة
                                        </td>
                                        <td>
                                            <a target="_blank"
                                               href="<?= base_url() . 'uploads/' . $all->SCHOLAR_ID . '/' . $attache->FILE_BATH ?>">
                                                <i class="fa fa-folder-open-o font-blue"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('affirs/Scholarship/deleteAttache/' . $all->SCHOLAR_ID . '/' . $attache->FILE_BATH . '/' . $attache->ATT_SER) ?>">
                                                <i class="fa fa-trash-o font-red"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>

                        </div>



                    <?php } ?>







                </div>
                <div class="tab-pane fade " id="extension">
                    <?php if (count($extends) > 0) { ?>

                        <div class="col-md-12">
                            <div class="secondary-color">عرض طلبات التمديد</div>
                            <hr>
                            <table class="table table-bordered table-advance"
                                   cellspacing="0">
                                <thead align="center">
                                <tr align="center">
                                    <th> رقم الاستمارة</th>
                                    <th> اسم المبتعث</th>
                                    <th> اسباب التمديد</th>
                                    <th> مدة التمديد</th>
                                    <th> فترة بداية التمديد</th>
                                    <th> فترة نهاية التمديد</th>
                                    <th> مرفق صورة التوصية</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($extends as $al) { ?>
                                    <tr>
                                        <td><?= $al->SCHOLAR_ID ?></td>

                                        <td><?= iconv('windows-1256', 'utf-8', $all->EMP_NAME) ?></td>
                                        <td><?= $al->EXT_REASON ?></td>
                                        <td><?= $al->EXT_DURRATION ?></td>
                                        <td><?= $al->START_DATE ?></td>
                                        <td><?= $al->END_DATE ?></td>
                                        <td>
                                            <?php if ($attachext != null) { ?>

                                                <a target="_blank"
                                                   href="<?= base_url() . 'uploads/' . $all->SCHOLAR_ID . '/' . $attachext[0]->FILE_BATH ?>"
                                                   class="btn btn-default"
                                                   role="button"><i
                                                            class="fa fa-folder-open-o"></i>
                                                    فتح
                                                </a>

                                            <?php } else {
                                                echo "لم يتم رفع المرفق او تم حزفه ";
                                            } ?>

                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    <?php } else{ ?>

                        <div class="row">
                            <?php echo form_open_multipart(base_url('affirs/ScholarshipTools/insertExtend'))?>


                            <div class="form-group col-md-6">
                                <label for="item"> اسم المبتعث </label>
                                <input type="text" class="form-control"
                                       value="<?= iconv('windows-1256', 'utf-8', $all->EMP_NAME) ?>"
                                       readonly>

                                <input type="hidden" name="scholar_id"  value="<?= $all->SCHOLAR_ID ?>">
                            </div>
                            <!-- row end -->
                            <div class="form-group col-md-6">
                                <label for="item"> فترة التمديد بالشهور </label>
                                <input name="EXT_DURRATION" type="text" class="form-control"/>
                            </div>
                            <!-- row end -->
                            <div class="form-group col-md-6">
                                <label for="item"> تاريخ بداية فترة التمديد </label>
                                <input name="START_DATE" type="date" class="form-control">
                            </div>
                            <!-- row end -->
                            <div class="form-group col-md-6">
                                <label for="item"> تاريخ نهاية فترة التمديد</label>
                                <input name="END_DATE" id="END_DATE" type="date" class="form-control">
                            </div>
                            <!-- row end -->
                            <div class="form-group col-md-6">
                                <label for="item"> اسباب التمديد </label>
                                <textarea name="EXT_REASON" class="form-control"></textarea>
                            </div>
                            <!-- row end -->
                            <div class="form-group col-md-6">
                                <label for="item"> التوصية </label>
                                <textarea name="RECOMMENDATION" class="form-control"></textarea>
                            </div>
                            <!-- row end -->
                            <div class="form-group col-md-6">
                                <label for="item"> ارفع صورة من التوصية </label>
                                <input type="file" name="attachs[]"
                                       class="form-control"
                                       multiple="multiple">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="item"> اسم المشرف </label>
                                <input name="super_name" type="text"
                                       class="form-control"/>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="submit"
                                               class="btn btn-success"
                                               value="حفظ">
                                    </div>
                                </div>
                            </div>

                            <?php echo form_close()?>

                        </div>
                    <?php } ?>
                </div>


            </div>

        </div>

        <?php canvas_footer();
        $this->load->view('app/layout/parts/footer'); ?>

        <script>
            var schol = new Vue({
                el: '#schol',
                data: {
                    atts: [],
                    addexpense: 0
                },
                methods: {
                    addAtach: function () {
                        return this.atts++;
                    },
                    minAtach: function () {
                        return this.atts--;
                    },
                    aaddExpense: function () {
                        this.addexpense = 1;

                    },
                    noAddExpense: function () {
                        this.addexpense = 0;
                    }
                }
            });

            $(function () {
                $('.easy-pie-chart').easyPieChart({
                    barColor: '#875A7B',
                    // The color of the track for the bar, false to disable rendering.
                    trackColor: '#ccc',
                    // The color of the scale lines, false to disable rendering.
                    scaleColor: '#ff0000',
                    // Defines how the ending of the bar line looks like. Possible values are: butt, round and square.
                    lineCap: 'round',
                    // Width of the bar line in px.
                    lineWidth: 4,
                    // Size of the pie chart in px. It will always be a square.
                    size: 80,
                    // Time in milliseconds for a eased animation of the bar growing, or false to deactivate.
                    animate: 1000,
                    // Callback function that is called at the start of any animation (only if animate is not false).
                    onStart: $.noop,
                    // Callback function that is called at the end of any animation (only if animate is not false).
                    onStop: $.noop
                });
            });

        </script>
