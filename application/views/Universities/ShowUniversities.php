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
                                    <form action="<?= base_url() ?>UniversitiesController/AddUniversities" class="form-horizontal"  method="post">
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
                        <td style="width:120px"><strong> رقم الدولة</strong>  </td>
                        <td><?php echo $row->COUNTRY_NO; ?></td> 
                    </tr>
                    <tr>
                        <td style="width:320px"><strong> اسم الدولة</strong></td>
                        <td><?php echo iconv("windows-1256" , "utf-8", $row->COUNTRY_NAME); ?></td>
                    </tr>
                       <tr>
                        <td style="width:320px"><strong> اسم الجامعة باللغة العربية</strong></td>
                        <td><?php echo $row->UNV_ARAB_NAME; ?></td> 
                    </tr>  
                    <tr>
                        <td style="width:320px"><strong> اسم الجامعة باللغة الانجليزية</strong></td>
                        <td><?php echo $row->UNV_ENG_NAME; ?></td> 
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
