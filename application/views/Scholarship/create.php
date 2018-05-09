<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-header">
            <div class="header-title">
                <span class="h-main">الشئون العلمية</span>
                <span class="h-sub"> استمارة الابتعاث</span>
            </div>
        </div>
        <div class="row" id="schol">
            <div class="col-md-10 col-md-offset-1">
                <div class="portlet light bordered">
                    <div class="portlet-body form">
                        <form action="<?= base_url('affirs/scholarship/insert') ?>" method="post"
                              enctype="multipart/form-data" role="form">
                            <div class="form-body">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">

                                            <ul class="nav nav-tabs tabs-left">
                                                <li class="active"><a href="#home" data-toggle="tab">
                                                        <i class="fa fa-user-o"> </i>البيانات الشخصية
                                                    </a>
                                                </li>
                                                <li class=""><a href="#profile" data-toggle="tab">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        البيانات الاكاديمية
                                                    </a>
                                                </li>
                                                <li class=""><a href="#messages" data-toggle="tab">
                                                        <i class="fa fa-list "></i>
                                                        بيانات الابتعاث
                                                    </a>
                                                </li>
                                                <li class=""><a href="#attachment" data-toggle="tab">
                                                        <i class="fa fa-folder-open-o "></i>
                                                        المرفقات

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active in" id="home">
                                                    <div class="row">
                                                        <input type="hidden" value="<?= $program->PROG_ID ?>"
                                                               name="PROG_ID">

                                                        <div class="form-group col-md-6">
                                                            <label>الكلية</label>
                                                            <input type="text" class="form-control"
                                                                   value="<?= $coldeps->LOC_NAME ?>" readonly>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>القسم</label>
                                                            <input type="text" class="form-control"
                                                                   value="<?= $coldeps->DEP_NAME ?>" readonly>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>إسم الاستاذ</label>
                                                            <input type="text" class="form-control"
                                                                   value="<?php echo iconv('windows-1256', 'utf-8', $emp->EMP_NAME) ?>"
                                                                   readonly>
                                                            <input type="hidden" value="<?= $emp->EMP_NO ?>"
                                                                   name="EMP_NO">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label> تاريخ التعيين </label>
                                                            <input type="text" class="form-control"
                                                                   value="<?= date('Y-m-d', strtotime($emp->HIRE_DATE)) ?>"
                                                                   readonly>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>رقم الهاتف </label>
                                                            <input type="text" class="form-control"
                                                                   value="<?= $emp->REL_PHONE ?>" name="phone">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label> البريد الالكتروني </label>
                                                            <input type="text" class="form-control"
                                                                   value="<?php echo iconv('windows-1256', 'utf-8', $emp->E_MAIL) ?>"
                                                                   name="email">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="profile">
                                                    <div class="row">
                                                        <div class="col-md-12 ">
                                                            <div class="form-group">
                                                                <label for="item">المؤهل الحالي </label><br>
                                                                <table class="table">
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
                                                                                <input name="DEG_DATE" id="DEG_DATE"
                                                                                       type="text"
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
                                                                            <td><i class="fa fa-external-link"></i></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- row end -->
                                                </div>

                                                <div class="tab-pane fade" id="messages">

                                                    <?php if ($program->PROG_TYP_ID == 1 || $program->PROG_TYP_ID == 5 || $program->PROG_TYP_ID == 2) { ?>
                                                        <div class="row">



                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <label for="basic-url">الدولة </label>
                                                                    <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <a data-toggle="modal" href="#country">
                                                                                    <i class="fa fa-external-link font-purple"></i>
                                                                                </a>
                                                                            </span>
                                                                        <select name="" class="form-control" style="width:100%" id="count">
                                                                            <?php foreach ($countries as $country) { ?>
                                                                                <option value="<?php echo $country->COUNTRY_NO ?>"><?php echo iconv('windows-1256', 'utf-8', $country->COUNTRY_NAME) ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <label for="basic-url">اسم الجامعة المراد الإلتحاق
                                                                        بها </label>
                                                                    <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <a data-toggle="modal" href="#basic">
                                                                                    <i class="fa fa-external-link font-purple"></i>
                                                                                </a>
                                                                            </span>
                                                                        <select name="UNIVERSITY_TARGET" class="form-control" style="width:100%" id="unv"></select>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label> نوع الابتعاث </label>
                                                                    <input type="text" class="form-control"
                                                                           value="<?php echo $program->PROG_ARAB_NAME ?>"
                                                                           readonly>
                                                                    <input type="hidden" name="PROG_ID"
                                                                           value="<?php echo $program->PROG_ID ?>">
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label>الدرجة العلمية المراد الحصول عليها </label>
                                                                    <select name="NEXT_DEG" class="form-control"
                                                                            style="width:100%"
                                                                            id="coll_id">
                                                                        <?php foreach ($nexts as $next) { ?>
                                                                            <option value="<?= $next->DEG_ID ?>"><?= $next->DEG_ARAB_NAME ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>


                                                            </div>

                                                            <div class="row">

                                                                <div class="form-group col-md-6">
                                                                    <label> التخصص </label>
                                                                    <input type="text" class="form-control"
                                                                           name="SP_ID">
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label> العنوان خارج السودان </label>
                                                                    <input type="text" class="form-control"
                                                                           name="OUTSIDE_ADDRESS">
                                                                </div>


                                                            </div>

                                                            <?php if ($program->PROG_TYP_ID != 2) { ?>

                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label> خطاب القبول من الجامعة المعنية </label>
                                                                        <input type="file" class="form-control"
                                                                               name="attachs[]">

                                                                    </div>
                                                                </div>
                                                            <?php } ?>


                                                            <?php if ($program->PROG_TYP_ID == 2) { ?>

                                                                <template v-if="at == 0">
                                                                    <a @click.prevent="addAttachOfSisterCountries()"> <i
                                                                                class="fa fa-file-pdf-o font-red"> </i>
                                                                        لرفع
                                                                        خطاب قبول من الجامعة اضغط هنا</a>
                                                                </template>

                                                            <?php } ?>

                                                            <template v-if="at != 0">
                                                                <div class="form-group col-md-6">
                                                                    <label> خطاب القبول من الجامعة المعنية </label> <a
                                                                            @click.prevent="removeAttachOfSisterCountries()">
                                                                        <i
                                                                                class="fa fa-trash-o font-red"></i> </a>
                                                                    <input type="file" class="form-control"
                                                                           name="attachs[]">

                                                                </div>
                                                            </template>


                                                        </div>
                                                    <?php } elseif ($program->PROG_TYP_ID == 4) { ?>

                                                        <div class="row">

                                                            <div class="form-group col-md-6">
                                                                <label> نوع الابتعاث </label>
                                                                <input type="text" class="form-control"
                                                                       value="<?php echo $program->PROG_ARAB_NAME ?>"
                                                                       readonly>
                                                                <input type="hidden" name="PROG_ID"
                                                                       value="<?php echo $program->PROG_ID ?>">
                                                            </div>


                                                            <div class="col-md-6">
                                                                <label for="basic-url">اسم الجامعة المراد الإلتحاق
                                                                    بها </label>
                                                                <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <a data-toggle="modal" href="#basic">
                                                                <i class="fa fa-external-link font-purple"></i>
                                                            </a>
                                                        </span>
                                                                    <select name="" class="form-control"
                                                                            style="width:100%"
                                                                            id="coll_id">
                                                                        <?php foreach ($universities as $university) { ?>
                                                                            <option value="<?= $university->UNV_ID ?>"><?= $university->UNV_ARAB_NAME ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="row">

                                                            <div class="form-group col-md-6">
                                                                <label>الدرجة العلمية المراد الحصول عليها </label>
                                                                <select name="NEXT_DEG" class="form-control"
                                                                        style="width:100%"
                                                                        id="coll_id">
                                                                    <?php foreach ($nexts as $next) { ?>
                                                                        <option value="<?= $next->DEG_ID ?>"><?= $next->DEG_ARAB_NAME ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label> التخصص </label>
                                                                <input type="text" class="form-control" name="SP_ID">
                                                            </div>


                                                        </div>


                                                    <?php } else { ?>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label> الكلية </label>
                                                                <select name="" class="form-control" style="width:100%"
                                                                        id="coll_id">
                                                                    <?php foreach ($collages as $collage) { ?>
                                                                        <option value="<?= $collage->LOC_NO ?>"><?= $collage->LOC_NAME ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label> القسم المرادالدراسة فيه</label>
                                                                <select name="" class="form-control" style="width:100%"
                                                                        id="depart">
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label> التخصص المراد الإلتحاق به </label>
                                                                <select name="SP_ID" class="form-control"
                                                                        style="width:100%"
                                                                        id="special">

                                                                </select>
                                                            </div>


                                                            <div class="form-group col-md-6">
                                                                <label> الجامعة المراد الدراسة فيها </label>
                                                                <select name="UNIVERSITY_TARGET" class="form-control"
                                                                        style="width:100%">
                                                                    <?php foreach ($universities as $university) { ?>
                                                                        <option value="<?= $university->UNV_ID ?>"><?= $university->UNV_ARAB_NAME ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>


                                                            <div class="form-group col-md-6">
                                                                <label>الدرجة العلمية المراد الحصول عليها </label>
                                                                <select name="NEXT_DEG" class="form-control"
                                                                        style="width:100%"
                                                                        id="coll_id">
                                                                    <?php foreach ($nexts as $next) { ?>
                                                                        <option value="<?= $next->DEG_ID ?>"><?= $next->DEG_ARAB_NAME ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    <?php } ?>

                                                </div>

                                                <div class="tab-pane fade" id="attachment">

                                                    <div class="row">

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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input name="" type="submit" class="btn btn-success" value="حفظ">
                                            <input name="" type="reset" class="btn btn-default" value="رجوع">
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->
                            </div>
                        </form>
                    </div>
                </div>


                <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <div class="modal-title main_color"> إضافة جامعة</div>
                            </div>
                            <div class="modal-body">

                                <form action="<?php echo base_url('affirs/Scholarshiptools/UniversitiesSetItems') ?>"
                                      method="post">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="item"> الدولة </label>
                                            <input type="text" class="form-control" :value="country_name">
                                        </div>
                                    </div>

                                    <input name="COUNTRY_NO" type="hidden" class="form-control" :value="country_id">


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="item">اسم الجامعة عربي</label>
                                            <input name="UNV_ARAB_NAME" type="text" class="form-control" id="lev2">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="item">اسم الجامعة انجليزي</label>
                                            <input name="UNV_ENG_NAME" type="text" class="form-control">
                                        </div>
                                    </div>


                                    <button type="button" class="btn default" data-dismiss="modal"><span
                                                class="md-click-circle md-click-animate"
                                                style="height: 65px; width: 65px; top: -14.5px; left: 12.3438px;"></span>إغلاق
                                    </button>

                                    <input name="" type="submit" class="btn btn-success" value="حفظ">


                                </form>


                            </div>

                        </div>

                    </div>

                </div>


                <div class="modal fade" id="country" tabindex="-1" role="basic" aria-hidden="true"
                     style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <div class="modal-title main_color"> إضافة دولة</div>
                            </div>
                            <div class="modal-body">

                                <form action="<?php echo base_url('affirs/Scholarshiptools/addCountry') ?>"
                                      method="post">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="item">اسم الدولة </label>
                                            <input name="COUNTRY_NAME" type="text" class="form-control">
                                        </div>
                                    </div>


                                    <button type="button" class="btn default" data-dismiss="modal"><span
                                                class="md-click-circle md-click-animate"
                                                style="height: 65px; width: 65px; top: -14.5px; left: 12.3438px;"></span>إغلاق
                                    </button>

                                    <input name="" type="submit" class="btn btn-success" value="حفظ">


                                </form>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>


</div>
</div>
<?php $this->load->view('app/layout/parts/footer'); ?>
<script>
    $(document).ready(function () {
        $('#coll_id').change(function () {
            $("#coll_id option:selected").each(function () {
                var a = $(this).val();
                $.ajax({
                    url: '<?=base_url()?>affirs/Scholarship/getDepart/',
                    cache: false,
                    method: "POST",
                    data: {coll_id: a},
                    success: function (r) {
                        $('#depart').html(r);

                    }
                });
            });
        });


        $('#depart').change(function () {
            $("#depart option:selected").each(function () {
                var dep = $(this).val();
                var col = $('#coll_id').val();
                $.ajax({
                    url: '<?=base_url()?>affirs/Scholarship/getSpecial/',
                    cache: false,
                    method: "POST",
                    data: {dep_id: dep, col_id: col},
                    success: function (r) {
                        $('#special').html(r);

                    }
                });
            });
        });


        $('#count').change(function () {
            $("#count option:selected").each(function () {
                var count = $(this).val();
                var count_name = $(this).text();
                Schol.country_id = count;
                Schol.country_name = count_name;


                $.ajax({
                    url: '<?=base_url()?>affirs/Scholarshiptools/getUnvWhereCountry',
                    cache: false,
                    method: "POST",
                    data: {count: count},
                    success: function (r) {


                        $('#unv').html(r);

                    }
                });
            });
        });


    });


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