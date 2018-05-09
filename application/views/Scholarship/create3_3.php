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

<div class="row" id="univ">
    <h1></h1>
    <?php flashs($sucsess,$error) ?>
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

            <li class="active "><a href="#messages" data-toggle="tab">
                    <i class="fa fa-list "></i>
                    بيانات الابتعاث
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

            <div class="tab-pane fade active in" id="messages">

                <?php echo form_open_multipart(base_url("affirs/Scholarship/insert_type_1")) ?>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>نوع الإبتعاث </label>
                        <input class="form-control" disabled value="<?php echo $program->PROG_ARAB_NAME ?>">

                    </div>

                    <div class="form-group col-md-6">
                        <label> العنوان خارج السودان </label>
                        <input type="text" class="form-control"
                               name="OUTSIDE_ADDRESS">
                    </div>
                </div>

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
                        <label> التخصص المراد الإلتحاق به </label>
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <a data-toggle="modal" href="#basic">
                                            <i class="fa fa-external-link font-purple"></i>
                                        </a>
                                    </span>
                            <select name="SP_ID" class="form-control"
                                    style="width:100%"
                                    id="special">

                                <?php foreach ($specials as $special) { ?>
                                    <option value="<?php echo $special->SP_ID ?>"><?php echo $special->SP_NAME ?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label>الدرجة العلمية المراد الحصول عليها </label>
                        <select name="NEXT_DEG" class="form-control"
                                style="width:100%"
                                id="coll_id">
                            <?php foreach ($degrees as $degree) { ?>
                                <option value="<?= $degree->DEG_ID ?>"><?= $degree->DEG_ARAB_NAME ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label> خطاب القبول من الجامعة المعنية </label>
                            <input type="file" class="form-control"
                                   name="attachs[]">

                        </div>
                    </div>

                <div class="row">

                    <div class="form-group col-md-6">
                        <input type="submit" class="btn btn-success tools"
                               value="حفظ " <?php tip('للحفظ والتوقف عند تلك النقطة') ?> >

                        <input type="submit" class="btn btn-success"
                               value="حفظ وإستمرار  " <?php tip("hghghghhhghgh", 'left') ?>>
                    </div>

                </div>

                <?php echo form_close() ?>

            </div>

        </div>
    </div>





    <!--------------------------------- Start  Modal ------------------------------------------------------------>


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


    <!--------------------------------- End  Modal ------------------------------------------------------------>


</div>




<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>
<script>

    $(document).ready(function () {
        $('#count').change(function () {
            $("#count option:selected").each(function () {
                var count = $(this).val();
                var count_name = $(this).text();
                Schol.country_id = count;
                Schol.country_name = count_name;
                console.log(Schol.country_name);
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
        el: '#univ',
        data: {
            atts: [],
            at: 0,
            country_id: 0,
            country_name: '',
            ass:555
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
