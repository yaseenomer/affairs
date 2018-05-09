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
                                    <form action="<?= base_url() ?>Committees_meetingController/AddCommittees_meeting" class="form-horizontal"  method="post">
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
                        <td style="width:120px"><strong> رقم اللجنة</strong>  </td>
                        <td><?php echo $row->COMM_ID; ?></td> 
                    </tr>
                    <tr>
                        <td style="width:120px"><strong> رقم اجتماع اللجنة </strong>  </td>
                        <td><?php echo $row->MEET_ID; ?></td> 
                    </tr>
                    <tr>
                        <td style="width:120px"><strong> تاريخ  الاجتماع </strong></td>
                        <td><?php echo $row->MEET_DATE; ?></td> 
                    </tr>
                         </tr>
                    <tr>
                        <td style="width:120px"><strong> نوع القرار   </strong></td>
                        <td><?php echo $row->MEET_TYP; ?></td> 
                    </tr>
                    </tr>
                    <tr>
                        <td style="width:120px"><strong> رقم الاستمارة \ الطلب   </strong></td>
                        <td><?php echo $row->APP_ID; ?></td> 
                    </tr>
                    </tr>
                    <tr>
                        <td style="width:120px"><strong> التوصية   </strong></td>
                        <td><?php echo $row->RECOMMENDATION; ?></td> 
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
