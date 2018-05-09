<?php $this->load->view('app/layout/parts/top'); ?>
<div class="page-content-wrapper">
    <div class="page-content">
	<div class="page-header">
	<div class="header-title">
        <span class="h-main"> الشئون العلمية </span> /
        <span class="h-sub"> المرشحين لدورة <?= $Location->PROG_ARAB_NAME ?> / المقامة في  <?= $Location->LOC_NAME ?></span>
    </div>
    </div>
	<div class="row">
	<div class="col-md-10 col-md-offset-1">
	<div class="portlet light bordered" id="vue-5">
	<div class="portlet-title">
        <div class="actions">
        <?php // if (for_admin_accounting()){  ?>
            <a href="<?=base_url()?>reports/Courses_candicate_report/pdf" class="btn green btn-sm">طباعة التقرير</a>
        <?php  //} ?>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" action="<?=base_url()?>" method="post">
            <div class="form-body">
            <div class="row">
                <div class="col-md-12">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" >
                        <thead>
                            <tr>
                                <th>
                                    الاسم
                                </th>
                                <th>
                                الكلية 
                                </th>
								<th>
								رقم الهاتف 								
								</th>
                            </tr>
                        </thead>
						<tbody>
						<?php foreach ($generals as $general) { ?>
						<tr>
                            <td><?= $general->EMP_NAME ?></td>
                            <td><?= $general->LOC_NAME ?> </td>
                            <td><?= $general->REL_PHONE ?> </td>
						</tr>
						<?php  } ?>
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
<?php $this->load->view('app/layout/parts/footer'); ?>
        <script>
        $(document).ready(function () {
        $('#example').DataTable();
        });
        </script>