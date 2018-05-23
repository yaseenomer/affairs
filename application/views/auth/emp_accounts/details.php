<div class="col-md-6 col-md-offset-3 o_database_list">
    <div class="row">
        <div class="col-md-12">

            <div class="text-center">
                <img src="<?php echo base_url(); ?>assets/img/sudanun2.png">
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p class="text-center main_color"> بيانات الموظف  </p>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-advance">
                <thead>
                <tr>
                    <th>الرقم الوظيفي</th>
                    <th>الاسم</th>
                    <th>الكلية</th>
                    <th>القسم</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $emp->EMP_NO?></td>
                    <td><?php echo  iconv('windows-1256', 'utf-8', $emp->EMP_NAME)?></td>
                    <td><?php echo $emp->LOC_NAME?></td>
                    <td><?php echo $emp->DEP_NAME?></td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <?php form_open(base_url('EmpAccounts/save')) ?>

        <input type="hidden" value="<?php echo $emp->EMP_NO?>" name="EMP_NO">
        <input type="hidden" value="<?php echo  iconv('windows-1256', 'utf-8', $emp->EMP_NAME)?>" name="">
        <input type="hidden" value="<?php echo $emp->LOC_NAME?>">
        <input type="hidden" value="<?php echo $emp->DEP_NAME?>">
        <input type="hidden" value="<?php echo $emp->DEP_NAME?>">

        <div class="col-md-12">
            <button type="submit" class="btn btn-success"> إنشاء حساب  </button>

            <a  href="<?php echo base_url('EmpAccounts')?>" type="submit" class="btn btn-primary">  رجوع   </a>
        </div>
        <?php echo form_close()?>
    </div>



</div>

