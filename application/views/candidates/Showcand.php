<?php $this->load->view('app/layout/parts/top'); ?>


<div class="page-content-wrapper">
    <div class="page-content">
        <div id="tow-vue">
            <div class="page-header">
                <span class="h-main">الشئون العلمية</span>  /
                <span class="h-sub"> المرشحين للدورات التدريبية </span>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="portlet light bordered" id="one-vue">
                        <div class="portlet-title"></div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <form action="<?= base_url() ?>Candidates2/emp" class="form-horizontal"  method="post">
                                        <div class="form-body">
<div class="col-md-offset-1">
    <div class="col-md-10">
    <div class="table-responsive">

        <table class="table " >

            <thead align="center">
            <tr align="center">
                <th> رقم   </th>
                <th >اسم الكلية </th>
                <th>تحكم </th>
            </tr>
            </thead>
            <tbody>
            <?php

            if(!empty($emp)) {
                $y = 0;
                foreach ($emp as $key => $value ) {
            ?>
            <tr style="background-color: rgba(0,0,0,0.2);font-size: larger ; font-weight: bold ;  ">
                <td></td>
                <td align="center" style="width: 1900px"><?= $value; ?></td>
                <td></td>
            </tr>
            <?php
                  $bl = $this->cand->getcandempWhere($key,$cid);
                    foreach ($bl as $row1) { ?>
                        <tr>
                            <td><?php echo $y + 1; ?></td>

                            <td><?php echo iconv("windows-1256", "utf-8", $row1->EMP_NAME) ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?= base_url() ?>affirs/Candidates2/showemp/<?php echo $row1->EMP_NO ?>/<?php echo $row1->COUR_ID ?>"
                                       class="btn btn-success fa fa-info-circle "></a>
                                </div>
                            </td>
                            <td>

                                <!------------------------------------>
                              <!--  <template v-if="<?=$row1->CAND_TYP  == 0 || $row1->CAND_TYP == 3 || $row1->CAND_TYP == 2 ?>">
                                    <a href="<?php echo base_url('affirs/Candidates2/cands/').$row1->EMP_NO ?>/<?php echo $row1->COUR_ID?>" class="btn btn-primary">  <i class="fa fa-check "></i> القبول للترشيح </a>
                                </template>
                                <template v-else="<?=$row1->CAND_TYP == 1 ?>">
                                    <a href="<?php echo base_url('affirs/Candidates2/nocands/').$row1->EMP_NO ?>/<?php echo $row1->COUR_ID?>" class="btn btn-warning">  <i class="fa fa-remove "></i> رفض الترشيح  </a>
                                </template>
                                -->
                                <!------------------------------------->
                                <?php
                                if(($row1->CAND_TYP  == 0 || $row1->CAND_TYP == 3 || $row1->CAND_TYP == 2 )&& ($row1->COUR_ID)){?>
                                <div class="portlet-title">
                                    <div class="actions">
                                        <a href="<?= base_url() ?>affirs/Candidates2/cands/<?php echo $row1->EMP_NO ?>/<?php echo $row1->COUR_ID ?>"
                                           class="btn btn-primary">
                                            القبول للترشيح</a>
                                    </div>
                                </div>
                                <?php } elseif(($row1->CAND_TYP == 1)&& ($row1->COUR_ID)) ?>
                            </td>
                            <td>
                                <?php { ?>
                                <div class="portlet-title">
                                    <div class="actions">
                                        <a href="<?= base_url() ?>affirs/Candidates2/nocands/<?php echo $row1->EMP_NO ?>/<?php echo $row1->COUR_ID ?>"
                                           class="btn btn-danger">
                                             رفض الترشيح</a>
                                    </div>
                                </div>
                                <?php }?>
                            </td>

                        </tr>
                    <?php
                        $y = $y+1;
                    }
               }
           }

            else
            {
                ?>
            <tr>
                <td colspan="5">لا توجد معلومات </td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>


    </div>
</div>
</div>
</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('app/layout/parts/footer'); ?>
