<?php $this->load->view('app/layout/parts/top'); ?>


<div class="page-content-wrapper">
    <div class="page-content">
        <div id="tow-vue">
            <div class="page-header">
                <span class="h-main">الشئون العلمية</span>  /
                <span class="h-sub"> الدورات التي رشح لها من قبل </span>

            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="portlet light bordered" id="one-vue">
                        <div class="portlet-title"></div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <form action="<?= base_url() ?>Candidates2" class="form-horizontal"  method="post">
                                        <div class="form-body">
<div class="col-md-offset-1">
    <div class="col-md-10">
    <div class="table-responsive">
        <table class="table table-striped">
            <colgroup>
                <col class="col-md-offset-1">
                <col class="col-md-offset-1">
            </colgroup>
            <tr>
                <td>#</td>
                <td style="width:320px"><strong> اسم الموظف </strong>  </td>
                <td style="width:320px"><strong> اسم الدورة</strong></td>
                <td style="width:220px"><strong> الهاتف </strong></td>
                <td style="width:320px"><strong> البريد الالكتروني </strong></td>
                <td style="width:300px" ><strong> الحالة(مرشح/ مقبول) </strong></td>

            </tr>
              <?php
              $y=0;
            if(!empty($emps))
            {

                foreach($emps as $row)
                {
                    $y= $y+1;
                    ?>

                    <tr>
                        <td><?php echo $y; ?></td>
                        <td><?php echo iconv("windows-1256" , "utf-8",$row->EMP_NAME) ?></td>
                        <td><?php echo $row->PROG_ARAB_NAME; ?></td>
                        <td><?php echo $row->REL_PHONE; ?></td>
                        <td><?php echo $row->E_MAIL; ?></td>
                        <td><?php $s= $row->CAND_TYP;
                        if ($s==0)echo"مرشح";
                        elseif($s==1)
                            echo "مقبول";
                        else
                            echo "مرفوض";
                        ?></td>
                    </tr>
                    <?php
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
