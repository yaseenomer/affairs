<?php $this->load->view('app/layout/parts/top'); ?>
<div class="page-content-wrapper">
    <div class="page-content">
        <div id="tow-vue">
            <div class="page-header">
			<div class="header-title">
               <span class="h-main"> الشئون العلمية </span>  /
               <span class="h-sub"> معلومات عن الدورة </span>
			</div>
            </div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="portlet light bordered" id="one-vue">
            <div class="portlet-title"></div>
                <div class="portlet-body form">
                    <div class="form-body">
                        <div class="row">
                            <form class="form-horizontal">
                                <div class="form-body">
<div class="col-md-offset-1">
    <div class="col-md-10">
    <div class="table-responsive">
        <table class="table" >
              <?php
            if(!empty($CourInstAll))
            {
                foreach($CourInstAll as $row)
                {
                    ?>
                    <tr>
                        <td><i class="fa fa-circle-o font-red"></i><strong> اسم الاستاذ </strong></td>
                        <td><?php echo $row->INS_ARAB_NAME; ?></td> 
                    </tr>
                    <tr>
                        <td><i class="fa fa-circle-o font-green"></i><strong>  اسم البرنامج باللغة العربية </strong></td>
                        <td><?php echo $row->PROG_ARAB_NAME; ?></td> 
                    </tr>
					<tr>
                        <td><i class="fa fa-circle-o font-yellow"></i><strong> اسم البرنامج بالغة الانجليزية </strong></td>
                        <td><?php echo $row->PROG_ENG_NAME; ?></td> 
                    </tr>
					<tr>
                        <td><i class="fa fa-circle-o font-blue"></i><strong> ملخص البرنامج </strong></td>
                        <td><?php echo $row->PROG_SUMMARY; ?></td> 
                    </tr>
					<tr>
                        <td><i class="fa fa-circle-o font-black"></i><strong> تاريخ بداية البرنامج </strong></td>
                        <td><?php echo $row->COUR_START_DATE; ?></td> 
                    </tr>
					<tr>
                        <td><i class="fa fa-circle-o font-yellow-lemon"></i><strong> تاريخ نهاية البرنامج </strong></td>
                        <td><?php echo $row->COUR_END_DATE; ?></td> 
                    </tr>
					<tr>
                        <td><i class="fa fa-circle-o font-purple"></i><strong> زمن بداية البرنامح </strong></td>
                        <td><?php echo $row->START_TIME; ?></td> 
                    </tr>
					<tr>
                        <td><i class="fa fa-circle-o font-green-meadow"></i><strong> زمن نهاية البرنامج  </strong></td>
                        <td><?php echo $row->END_TIME; ?></td> 
                    </tr>
                                        
                    <?php
                }
            }
            else
            {
                ?>
                <tr>
                    <td colspan="5"> لا توجد معلومات </td>
                </tr>
                <?php
            }
            ?>
			<tbody>
			</tbody>
        </table>
		<div>
		 <a href="<?=base_url();?>Course_instruct_con " class="btn btn-default"> رجوع </a>
		</div>
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