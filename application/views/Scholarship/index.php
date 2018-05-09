<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/4/2018
 * Time: 1:06 PM
 */

$this->load->view('app/layout/parts/top'); ?>

<?php function chart($detail = null)
{
    if ($detail != null) {
        $rsum = strtotime(date('Y-m-d')) - strtotime($detail->START_DATE);
        $long = strtotime($detail->END_DATE) - strtotime($detail->START_DATE);
        $x = floor( $rsum/$long * 100);
        if($x > 100) {
            echo '  مدة البعثة منتهية  ';
        }elseif ($x < 0){
            echo 'مدة البعثة لم تبدأ';
        }else{
            echo $x.' %' ;
        }


    }


} ?>


<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-header">
            <div class="header-title">
                <span class="h-main">   المبتعثين    </span>
                <span class="h-sub">
                </span>
            </div>
            <div class="header-action">
            </div>
        </div>
        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">

                        </div>
                        <div class="actions">


                            <a  href="<?=base_url('affirs/Scholarship/course')?>"   class="btn green">إضافة مبتعث   </a>


                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">

                            <?php if (isset($insert)) { ?>
                                <div class="alert alert-success">
                                    <?php echo $insert ?>
                                </div>
                            <?php } ?>

                            <?php if (isset($update)) { ?>
                                <div class="alert alert-success">
                                    <?php echo $update ?>
                                </div>
                            <?php } ?>
                            <?php if (isset($delete)) { ?>
                                <div class="alert alert-success">
                                    <?php echo $delete ?>
                                </div>
                            <?php } ?>

                            <table id="group" class="table table-striped table-bordered table-advance" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>
                                        اسم المبتعث
                                    </th>
                                    <th>
                                        نوع الإبتعاث
                                    </th>
                                    <th>
                                      حالة البعثة
                                    </th>

                                </tr>
                                </thead>
                                <tbody >
                                <?php $x = 1; foreach ($alls as $all) { ?>
                                    <tr>
                                        <td><?php echo $x++?></td>

                                        <td>
                                            <a  href="<?=base_url("affirs/scholarship/show/$all->SCHOLAR_ID") ?>">
                                              <?= iconv('windows-1256','utf-8',$all->EMP_NAME)?>
                                            </a>
                                        </td>
                                        <td> <?= $all->PROG_ARAB_NAME ?></td>
                                        <td>
                                            <?php
                                            $this->load->model('affirs/M_Scholarship', 'schol');
                                            $detail = $this->schol->get_details($all->SCHOLAR_ID);

                                            ?>
                                            <span class="text-center" style="font-size: 17px;font-weight: bold;color: #875A7B"><?php chart($detail) ?></span>
                                        </td>


                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>





            </div>
        </div>

        <?php $this->load->view('app/layout/parts/footer'); ?>


        <script>
            $(document).ready(function () {
                $('#group').DataTable();
            });

        </script>










