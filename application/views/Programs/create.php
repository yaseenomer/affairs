<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-header">
            <div class="header-title">
                <span class="h-main">الشئون العلمية</span> /
                <span class="h-sub">البرامج</span>
            </div>

        </div>
        <div class="row" id="program">



            <div class="col-md-10 col-md-offset-1">
                <div class="portlet light bordered">
                    <div class="portlet-body form">
                        <form action="<?= base_url('affirs/programs/insert') ?>" method="post" role="form">
                            <div class="form-body">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item">الكلية </label>
                                            <select name="LOC_NO" id="collage" class="form-control browser-default" >
                                                <option v-for="collage in collages" :value="collage.LOC_NO" >
                                                    {{ collage.LOC_NAME }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-8  col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item">القسم </label>

                                            <select name="DEP_ID" id="dep" class="form-control">


                                            </select>


                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-8  col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item">نوع التدريب </label>
                                            <select name="PROG_TYP_ID" class="form-control" style="width:100%">
                                                <option>اختار من القائمة</option>
                                                <?php foreach ($programs as $program) { ?>

                                                    <option value=" <?= $program->PROG_TYP_ID ?>"> <?= $program->PROG_TYP_NAME ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->

                                <div class="row">
                                    <div class="col-md-8  col-md-offset-2">

                                        <div class="form-group">
                                            <label>الحالة </label>
                                            <div class="radio">
                                                <label>
                                                    <input name="PROG_STATUS" id="optionsRadios1" value="1"
                                                           type="radio"> مجاز
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="PROG_STATUS" id="optionsRadios2" value="2"
                                                           type="radio"> غير
                                                    مجاز
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-8  col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item"> اسم البرنامج باللغة العربية </label>
                                            <input name="PROG_ARAB_NAME" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-8  col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item"> اسم البرنامج باللغة الانجليزية </label>
                                            <input name="PROG_ENG_NAME" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-8  col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item">نبذة عن البرنامج </label>
                                            <textarea name="PROG_INTRODUCTION" type="text"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-8  col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item">موجز البرنامج </label>
                                            <textarea name="PROG_SUMMARY" type="text" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-8  col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item">اهداف البرنامج </label>
                                            <textarea name="PROG_OBJECTIVES" type="text"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-8  col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item"> نسبة ساعات النظري </label>
                                            <input name="THEORY_HOURS" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->
                                <div class="row">
                                    <div class="col-md-8  col-md-offset-2">
                                        <div class="form-group">
                                            <label for="item"> نسبة ساعات العملي </label>
                                            <input name="PRACTICAL_HOURS" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- row end -->



                                <!-- row end -->

                                <div class="row">

                                </div>
                                <div class="row">
                                    <div class="col-md-8  col-md-offset-2">
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
            </div>
        </div>

    </div>

    <?php $this->load->view('app/layout/parts/footer'); ?>


    <script>

        var Programs = new Vue({
            el: '#program',
            data: {
                collages: [],
            }
        });


        $(document).ready(function () {
            $('#collage').change(function () {
                $("#collage option:selected").each(function () {
                    var a = $(this).val();

                    $.ajax({
                        url: '<?=base_url()?>affirs/programs/getDepart',
                        cache: true,
                        method: "POST",
                        data: {collage: a},
                        success: function (r) {
                            $('#dep').html(r)
                        }
                    });
                });
            });

            axios.get('<?=base_url()?>affirs/programs/coll')
                .then(function (response) {
                    Programs.collages = response.data;
                })

        });

    </script>






