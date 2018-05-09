<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub"> المرشحين للدورات التدريبية </span>
           </div>
	</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="portlet light bordered" id="vue-5">
<div class="portlet-body form">
    <form role="form" action="<?=base_url()?>Candidates2" method="post">
        <div class="form-body">
            <div class="row">
			<?php if (isset($Adddep)) { ?>
                <div class="alert alert-success">
                <?php echo $Adddep ?>
                </div>
                <?php } ?>
				<?php if (isset($editdep)) { ?>
                <div class="alert alert-success">
                <?php echo $editdep ?>
                </div>
                <?php } ?>
				<?php if (isset($deletdep)) { ?>
                <div class="alert alert-success">
                <?php echo $deletdep ?>
                </div>
                <?php } ?>
                <?php if (isset($lockcon)) { ?>
                    <div class="alert alert-success">
                        <?php echo $lockcon ?>
                    </div>
                <?php } ?>
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead align="center">
                            <tr align="center">
                                <th>#</th>
                               <!-- <th>رقم الدورة</th>-->
                                <th>اسم الدورة</th>
                                <th>تاريخ البداية </th>
                                <th>تاريخ النهاية </th>
                                <!--  <th>التاريخ </th>-->
                                <th> عرض المرشحين</th>
                                <th>  اغلاق الدورة</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $Y=0;
                        foreach ($d as $cand) {
                            $Y=$Y+1;
                            ?>
                            <tr >
                                <td><?= $Y ?></td>
                               <!-- <td><?= $cand->COUR_ID ?></td>-->
                                <td><a href="#"> <?= $cand->PROG_ARAB_NAME?></a></td>
                                <td> <?php
                                    $source= $cand->COUR_START_DATE;
                                    echo date("Y-m-d",strtotime($source));
                                    ?></td>
                                <td> <?php
                                    $source=  $cand->COUR_END_DATE ;
                                    echo date("Y-m-d",strtotime($source));
                                    ?></td>
                                <!--  <td> <?= $cand->EMP_NAME ?></td>-->
                                <td><div class="btn-group">
                                        <a href="<?=base_url()?>affirs/Candidates2/emp/<?php echo $cand->COUR_ID ?>"  class="fa fa-info-circle"></a>
                                    </div></td>
                                <td><div class="actions">
                                        <a href="<?=base_url()?>affirs/Candidates2/lock_cand/<?php echo $cand->COUR_ID ?>" class="font-green  fa fa-unlock fa-2x " ></a>
                                    </div></td>
                            </tr>

								<?php }  ?>
							</tr>
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
    