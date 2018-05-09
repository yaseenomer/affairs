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
                <span class="h-main">   المرشحين      </span>
                <span class="h-sub">
                </span>
            </div>
            <div class="header-action">
            </div>
        </div>
        <div class="row" id="cand">

            <div class="col-md-10 col-md-offset-1">

                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">

                        </div>

                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-2 col-md-offset-10">
                                <a href="<?php echo base_url('affirs/Candidates/create') ?>"
                                   class="btn btn-success pull-right"> إضافة مرشح  </a><br><br>

                            </div>
                            <div class="col-md-12">
                                <?php if (isset($delete)) { ?>
                                    <div class="alert alert-success">
                                        <?php echo $delete ?>
                                    </div>
                                <?php } ?>
                                <?php if (isset($insert)) { ?>
                                    <div class="alert alert-success">
                                        <?php echo $insert ?>
                                    </div>
                                <?php } ?>

                                <?php if (isset($update)) { ?>
                                    <div class="alert alert-success">
                                        <?php echo $update ?>
                                    </div>
                                <?php } ?>
                            </div>


                            <table id="cands" class="table table-striped table-bordered" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>
                                        رقم الدورة
                                    </th>
                                    <th>
                                        اسم الدورة
                                    </th>
                                    <th>
                                         اسم الموظف
                                    </th>
                                    <th>

                                         هاتف  الموظف
                                    </th>
                                    <th>
                                         بريد  الموظف
                                    </th>
                                    <th>
                                          سعر الكورس للفرد
                                    </th>
                                    <th>
                                        الحالة
                                    </th>

                                    <th>
                                        عمليات
                                    </th>

                                </tr>
                                </thead>
                                <tbody class="bank">
                                <?php foreach ($cands as $cand) { ?>
                                    <tr>
                                        <td><?= $cand->COUR_ID ?></td>
                                        <td> <?= $cand->PROG_ARAB_NAME ?></td>
                                        <td> <?= $cand->EMP_NAME ?></td>
                                        <td> <?= $cand->REL_PHONE ?></td>
                                        <td> <?= $cand->E_MAIL ?></td>
                                        <td> <?= $cand->COUR_FEES ?></td>
                                        <td>
                                            <template v-if="<?=$cand->CAND_TYP?> == 0"> مرشح </template>
                                            <template v-if="<?=$cand->CAND_TYP?> == 1"> مقبول  </template>
                                        </td>

                                        <td>
                                            <a href="<?php echo base_url('affirs/Candidates/edit/') . $cand->COUR_ID ?>"
                                               class="fa fa-edit text-primary" style="float: right"></a>

                                            <a href="<?php echo base_url('affirs/Candidates/delete/') . $cand->COUR_ID ?>"
                                               class="fa fa-trash-o text-danger pull-right" style="float: right"></a>


                                        </td>

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php $this->load->view('app/layout/parts/footer'); ?>


        <script>
            $(document).ready(function () {
                $('#cands').DataTable();
            });

            var Cand = new Vue({
                el:'#cand'
            });

        </script>










