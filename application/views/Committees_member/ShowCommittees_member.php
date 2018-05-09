<?php $this->load->view('app/layout/parts/top'); ?>


<div class="page-content-wrapper">
    <div class="page-content">
        <div id="tow-vue">
            <div class="page-header">
                
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="portlet light bordered" id="one-vue">
                        <div class="portlet-title"></div>
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <form action="<?= base_url() ?>Committees_memberController/AddCommittees_member" class="form-horizontal"  method="post">
                                        <div class="form-body">
<div class="col-md-offset-1">
    <div class="col-md-10">
    <div class="table-responsive">
        <table class="table " >
            <colgroup>
                <col class="col-md-offset-1">
                <col class="col-md-offset-1">
            </colgroup>
              <?php
            if(!empty($d))
            {
                foreach($d as $row)
                {
                    ?>
                    <tr>
                        <td style="width:120px"><strong>  اسم اللجنة</strong>  </td>
                        <td><?php echo $row->COMM_ID; ?></td> 
                    </tr>
                    <tr>
                        <td style="width:120px"><strong> اسم العضو </strong></td>
                        <td><?php echo $row->MEMBER_NAME; ?></td> 
                    </tr>
                    <tr>
                        <td style="width:120px"><strong>   رقم عضو اللجنة  </strong></td>
                        <td><?php echo $row->EMP_NO; ?></td> 
                    </tr>
                    <tr>
                        <td style="width:120px"><strong> الوظيفة في اللجنة   </strong></td>
                        <td><?php echo $row->JOB_TITLE; ?></td> 
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
