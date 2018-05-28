<div class="col-md-6 col-md-offset-3 o_database_list">
    <div class="row">
        <div class="col-md-12">
            <?php flash($error,'danger') ?>
        </div>
    </div>
    <div class="text-center">
        <img src="<?php echo base_url(); ?>assets/img/sudanun2.png">
    </div>

    <?php echo form_open(base_url() . 'EmpAccounts/save'); ?>

    <input type="text" name="EMP_NO" value="<?php echo $emp->EMP_NO?>">
    <input type="hidden" name="LOC_NO" value="<?php echo $emp->COL_NO?>">
    <input type="hidden" name="DEP_ID" value="<?php echo $emp->DEP_NO?>">

    <input type="hidden" name="ENTRY_DATE" value="<?php echo date('d-M-y')?>">
    <input type="hidden" name="UPDATE_DATE" value="<?php echo date('d-M-y')?>">
    <input type="hidden" name="USR_NO" value="1">
    <input type="hidden" name="GROUP_ID" value="1">

    <div class="form-group field-login">
        <label for="login" class="control-label">  إسم المستخدم  </label>
        <input name="USR_NAME" class="form-control" required="required" autofocus="autofocus" type="text">
    </div>

    <div class="form-group field-login">
        <label for="login" class="control-label"> البريد الإلكتروني </label>
        <input name="EMAIL" class="form-control" required="required" autofocus="autofocus" type="email">
    </div>


    <div class="form-group field-login">
        <label for="login" class="control-label"> كلمة المرور  </label>
        <input name="PASSWORD" class="form-control" required="required" autofocus="autofocus" type="password">
    </div>

    <button type="submit" class="btn btn-primary">إنشاء حـــساب </button>
    <a  href="<?php echo base_url('EmpAccounts') ?>" class="btn btn-default"> رجوع </a>
    </form>


    <div class="text-center">

        <!--       <a href="--><?php //echo base_url(); ?><!--logincont/register">انشاء  حســــاب</a>-->

    </div>
</div>

