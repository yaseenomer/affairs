<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/4/2018
 * Time: 1:06 PM
 */

$this->load->view('app/layout/parts/top');main_header(array());canvas_header('العنوان') ?>

    <div class="row" id="schol">
       <h1> </h1>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">
                <li class=""><a href="#home" data-toggle="tab" style="border-right: 5px solid  #875A7B; color: #875A7B; font-size: 16px; font-weight: bold">
                        <i class="fa fa-check-square-o fa-2x" style="color:#1abc9c "> </i> <i class="fa fa-user-o"> </i>البيانات الشخصية
                    </a>
                </li>

                <li class=""><a href="#profile" data-toggle="tab"  style="border-right: 5px solid  #875A7B; color: #875A7B; font-size: 16px; font-weight: bold">
                        <i class="fa fa-check-square-o fa-2x" style="color:#1abc9c "> </i> <i class="fa fa-graduation-cap"></i>
                        البيانات الاكاديمية
                    </a>
                </li>

                <li class="active "><a href="#messages" data-toggle="tab">
                        <i class="fa fa-list "></i>
                        بيانات الابتعاث
                    </a>
                </li>



            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">
            <div class="tab-content">
                <div class="tab-pane fade " id="home">
                    <div class="row">
                        <table class="table table-bordered table-advance">
                            <thead>
                            <tr>
                                <th>الكلية</th>
                                <th>القسم</th>
                                <th>إسم الاستاذ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $find->LOC_NAME ?></td>
                                <td><?php echo $find->DEP_NAME ?></td>
                                <td><?php echo iconv('windows-1256', 'utf-8', $find->EMP_NAME)?> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <table class="table table-advance table-bordered">
                                    <thead>
                                    <tr>
                                        <th>المؤهل المختار </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo iconv('windows-1256', 'utf-8',$find->CURRENT_DEG_ARAB_NAME) ?>

                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                </div>

                <div class="tab-pane fade active in" id="messages">


                            <?php echo form_open(base_url("affirs/Scholarship/insert3"))?>
                            <div class="form-group col-md-6">
                                <label>نوع الإبتعاث  </label>
                                <input class="form-control" disabled value="<?php echo $program->PROG_ARAB_NAME?>" >

                            </div>

                            <div class="form-group col-md-6">
                                <label> الجامعة المراد الدراسة فيها </label>
                                <input type="text" value="جامعة السودان للعلوم والتكنلوجيا " class="form-control" disabled>
                                <input type="hidden" value="4" name="UNIVERSITY_TARGET">
                            </div>


                            <div class="form-group col-md-6">
                                <label> التخصص المراد الإلتحاق به </label>
                                <select name="SP_ID" class="form-control"
                                        style="width:100%"
                                        id="special">
                                    <?php foreach ($specials as $special) { ?>
                                        <option value="<?php echo $special->SP_ID?>"><?php echo $special->SP_NAME?></option>
                                    <?php } ?>

                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>الدرجة العلمية المراد الحصول عليها </label>
                                <select name="NEXT_DEG" class="form-control"
                                        style="width:100%"
                                        id="coll_id">
                                    <?php foreach ($degrees as $degree) { ?>
                                        <option value="<?= $degree->DEG_ID ?>"><?= $degree->DEG_ARAB_NAME ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="submit" class="btn btn-success tools" value="حفظ "  <?php tip('للحفظ والتوقف عند تلك النقطة') ?> >

                                <input type="submit" class="btn btn-success" value="حفظ وإستمرار  " <?php tip("hghghghhhghgh",'left') ?>>
                            </div>

                        </form>


                        </div>

                </div>

            </div>
        </div>

    </div>

<?php  canvas_footer(); $this->load->view('app/layout/parts/footer'); ?>

<script>
    $(document).ready(function () {




    });

</script>
