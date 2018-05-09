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
                                    <form action="<?= base_url() ?>CommitteesController/AddCommittees" class="form-horizontal"  method="post">
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
                        <td style="width:120px"><strong> رقم اللحنة</strong>  </td>
                        <td><?php echo $row->COMM_ID; ?></td> 
                    </tr>
                    <tr>
                        <td style="width:120px"><strong> اسم اللجنة</strong></td>
                        <td><?php echo $row->COMM_TITLE; ?></td> 
                    </tr>
                        <tr>
                        <td style="width:120px"><strong> نوع اللجنة </strong></td>
                        <td><?php $t= $row->COMM_TYPE;
                        if($t==1)echo("لجنة ابتعاث ");
                        elseif ($t==2)echo" لجنة ترقيات صغرى";
                        else echo " لجنة ترقيات كبرى";
                        
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
