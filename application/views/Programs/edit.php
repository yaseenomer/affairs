<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/4/2018
 * Time: 1:06 PM
 */

$this->load->view('app/layout/parts/top'); ?>

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-header">
            <div class="header-title">
                <span class="h-main">  تعديل    <?=$program->PROG_ARAB_NAME?>     </span>
                <span class="h-sub">
                </span>
            </div>
            <div class="header-action">
            </div>
        </div>
        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">

                        </div>

                    </div>
                    <div class="portlet-body">



                            <div class="row">

                                <div class="col-md-10 col-md-offset-1">
                                    <form action="<?= base_url('affirs/programs/update') ?>" method="post">


                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <input type="hidden" name="id" value="<?= $program->PROG_ID ?>">
                                                <div class="form-group">
                                                    <label>الكلية </label>
                                                    <select name="LOC_NO"  class="form-control browser-default" id="collage">
                                                        <option value="<?= $program->LOC_NO ?>"><?= $program->LOC_NAME ?></option>
                                                        <?php  foreach ($collages as $collage ) { ?>
                                                            <option value="<?= $collage->LOC_NO ?>"><?= $collage->LOC_NAME ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row end -->
                                        <div class="row">
                                            <div class="col-md-8  col-md-offset-2">
                                                <div class="form-group">
                                                    <label for="item">القسم </label>

                                                    <select name="DEP_ID"  class="form-control" id="dep">
                                                        <option value="<?= $program->DEP_ID ?>"><?= $program->DEP_NAME ?></option>

                                                    </select>


                                                </div>
                                            </div>
                                        </div>
                                        <!-- row end -->
                                        <div class="row">
                                            <div class="col-md-8  col-md-offset-2">
                                                <div class="form-group">
                                                    <label ">نوع التدريب </label>
                                                    <select name="PROG_TYP_ID" class="form-control" style="width:100%">
                                                        <option value="<?= $program->PROG_TYP_ID ?>"><?= $program->PROG_TYP_NAME ?></option>
                                                        <?php foreach ($programs as $prog) { ?>

                                                            <option value=" <?= $prog->PROG_TYP_ID ?>"> <?= $prog->PROG_TYP_NAME ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row end -->

                                        <div class="row">
                                            <div class="col-md-8  col-md-offset-2">

                                                <?php $approve=$notapprove =''; if($program->PROG_STATUS == 1 )  { $approve = 'checked'; }else{$notapprove = 'checked' ;}?>


                                                <div class="form-group">
                                                    <label>الحالة </label>


                                                    <div class="radio">
                                                        <label>
                                                            <input name="PROG_STATUS" id="optionsRadios1" value="1"
                                                                   type="radio" <?= $approve ?> > مجاز
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input name="PROG_STATUS" id="optionsRadios2" value="0"
                                                                   type="radio" <?= $notapprove ?> > غير
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
                                                    <label > اسم البرنامج باللغة العربية </label>
                                                    <input name="PROG_ARAB_NAME" type="text" class="form-control" value="<?= $program->PROG_ARAB_NAME ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row end -->
                                        <div class="row">
                                            <div class="col-md-8  col-md-offset-2">
                                                <div class="form-group">
                                                    <label > اسم البرنامج باللغة الانجليزية </label>
                                                    <input name="PROG_ENG_NAME" type="text" class="form-control" value="<?= $program->PROG_ENG_NAME ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row end -->
                                        <div class="row">
                                            <div class="col-md-8  col-md-offset-2">
                                                <div class="form-group">
                                                    <label for="item">نبذة عن البرنامج </label>
                                                        <input type="text" name="PROG_INTRODUCTION" value="<?= $program->PROG_INTRODUCTION ?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row end -->
                                        <div class="row">
                                            <div class="col-md-8  col-md-offset-2">
                                                <div class="form-group">
                                                    <label for="item">موجز البرنامج </label>
                                                        <input type="text" name="PROG_SUMMARY" value="<?= $program->PROG_SUMMARY?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- row end -->
                                        <div class="row">
                                            <div class="col-md-8  col-md-offset-2">
                                                <div class="form-group">
                                                    <label >اهداف البرنامج </label>

                                                        <input type="text" name="PROG_OBJECTIVES" value="<?= $program->PROG_OBJECTIVES?>" class="form-control">

                                                </div>
                                            </div>
                                        </div>

                                        <!-- row end -->
                                        <div class="row">
                                            <div class="col-md-8  col-md-offset-2">
                                                <div class="form-group">
                                                    <label for="item"> نسبة ساعات النظري </label>
                                                    <input name="THEORY_HOURS" type="text" class="form-control" value="<?= $program->THEORY_HOURS?>">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row end -->
                                        <div class="row">
                                            <div class="col-md-8  col-md-offset-2">
                                                <div class="form-group">
                                                    <label for="item"> نسبة ساعات العملي </label>
                                                    <input name="PRACTICAL_HOURS" type="text" class="form-control" value="<?= $program->PRACTICAL_HOURE?>">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row end -->
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <input type="submit"  class="btn btn-success" value="حفظ  التعديل ">
                                            </div>
                                        </div>

                                    </form>

                                </div>



                            </div>


                    </div>
                </div>



            </div>
        </div>

        <?php $this->load->view('app/layout/parts/footer'); ?>

        <script>
            $(document).ready(function () {
                $('#collage').change(function () {
                    $("#collage option:selected").each(function () {
                        var a = $(this).val();
                        console.log(a);

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
            });
        </script>












