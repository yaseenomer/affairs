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
                                    <form action="<?= base_url() ?>Program_typesController/AddProgram_types" class="form-horizontal"  method="post">
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
                        <td style="width:120px"><strong> الرقم </strong>  </td>
                        <td><?php echo $row->PROG_TYP_ID; ?></td> 
                    </tr>
                    <tr>
                        <td style="width:120px"><strong>  النوع</strong></td>
                        <td><?php echo $row->PROG_TYP_NAME; ?></td> 
                    </tr>
                    <tr>
                        <td style="width:120px"><strong>  التصنيف</strong></td>
                        <td><?php $t= $row->PROG_TYP;
                        if($t==1)echo("تدريب");
                        else echo" ابتعاث";
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
