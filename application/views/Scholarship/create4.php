<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/4/2018
 * Time: 1:06 PM
 */

$this->load->view('app/layout/parts/top');
main_header(array());
canvas_header('العنوان') ?>

<div class="row" id="schol">
    <?php if (isset($error)) {?>
        <div class="alert alert-danger">لم يتم رفع الملف </div>
    <?php  } ?>
    <h1></h1>
    <div class="col-md-3 col-sm-3 col-xs-3">
        <ul class="nav nav-tabs tabs-left">
            <li class=""><a href="#home" data-toggle="tab"
                            style="border-right: 5px solid  #875A7B; color: #875A7B; font-size: 16px; font-weight: bold">
                    <i class="fa fa-check-square-o fa-2x" style="color:#1abc9c "> </i> <i class="fa fa-user-o"> </i>البيانات
                    الشخصية
                </a>
            </li>

            <li class=""><a href="#profile" data-toggle="tab"
                            style="border-right: 5px solid  #875A7B; color: #875A7B; font-size: 16px; font-weight: bold">
                    <i class="fa fa-check-square-o fa-2x" style="color:#1abc9c "> </i> <i
                            class="fa fa-graduation-cap"></i>
                    البيانات الاكاديمية
                </a>
            </li>

            <li class=""><a href="#messages" data-toggle="tab"
                            style="border-right: 5px solid  #875A7B; color: #875A7B; font-size: 16px; font-weight: bold">
                    <i class="fa fa-check-square-o fa-2x" style="color:#1abc9c "> </i> <i class="fa fa-list "></i>
                    بيانات الابتعاث
                </a>
            </li>
            <li class="active"><a href="#attachment" data-toggle="tab">
                    <i class="fa fa-folder-open-o "></i>
                    المرفقات

                </a>
            </li>


        </ul>
    </div>
    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="tab-content">
            <div class="tab-pane fade " id="home">
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
                            <td><?php echo iconv('windows-1256', 'utf-8', $find->EMP_NAME) ?> </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="profile">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group">
                            <table class="table table-advance table-bordered">
                                <thead>
                                <tr>
                                    <th>المؤهل المختار</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <?php echo iconv('windows-1256', 'utf-8', $find->CURRENT_DEG_ARAB_NAME) ?>

                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>

            <div class="tab-pane fade" id="messages">
                <div class="row">
                    <div class="col-md-12 ">
                        <table class="table table-advance table-bordered">
                            <thead>
                            <tr>
                                <th>الجامعة المراد الدراسة فيها</th>
                                <th>التخصص المراد الإلتحاق به</th>
                                <th>الدرجة العلمية المراد الحصول عليها</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td><?php echo $find->UNIVERSITY_TARGET_AR ?></td>
                                <td><?php echo $find->SP_NAME ?></td>
                                <td><?php echo $find->NEXT_DEG_ARAB_NAME ?></td>


                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade active in" id="attachment">
                <div class="row">
                    <?php echo form_open_multipart(base_url('affirs/Scholarship/insert4'))?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="attachs[]"
                                       class="form-control"
                                       multiple="multiple">
                            </div>
                        </div>
                    </div>
                    <template v-for="att in atts">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" name="attachs[]"
                                           class="form-control"
                                           multiple="multiple">
                                </div>
                            </div>
                        </div>
                    </template>
                    <div class="row">
                        <div class="col-md-1">
                            <a @click.prevent="addAtach()"><i
                                        class="fa fa-plus-square-o font-green fa-2x"></i>
                            </a>
                        </div>
                        <div class="col-md-1" v-if="atts != '' ">
                            <a @click.prevent="minAtach()"><i
                                        class="fa fa-minus-square-o  font-red fa-2x"></i></a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success" value="حفظ وإغلاق  " name="close">
                            <input type="submit" class="btn btn-success" value="حفظ واستمرار " name="resume">

                        </div>

                    </div>
                    <?php echo form_close()?>


                </div>
            </div>

        </div>
    </div>

</div>

<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>

<script>

    var Schol = new Vue({
        el: '#schol',
        data: {
            atts: [],
            at: 0,
            country_id: 0,
            country_name: ''
        },
        methods: {
            addAtach: function () {
                return this.atts++;
            },
            minAtach: function () {
                return this.atts--;
            },
            addAttachOfSisterCountries: function () {
                return this.at = 1;
            },
            removeAttachOfSisterCountries: function () {
                return this.at = 0;
            }

        }
    });
</script>
