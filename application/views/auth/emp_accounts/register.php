<div class="col-md-6 col-md-offset-3 o_database_list">
    <div class="text-center">
        <img src="<?php echo base_url(); ?>assets/img/sudanun2.png">
    </div>

    <?php echo form_open(base_url() . 'auth/EmpAccounts/save'); ?>

    <div class="form-group field-login">
        <label for="login" class="control-label"> البريد الإلكتروني </label>
        <input name="email" class="form-control" required="required" autofocus="autofocus" type="email">
    </div>

    <div class="form-group field-login">
        <label for="login" class="control-label"> كلمة المرور  </label>
        <input name="password" class="form-control" required="required" autofocus="autofocus" type="password">
    </div>

    <button type="submit" class="btn btn-primary">إنشاء حـــساب </button>
    </form>


    <div class="text-center">

        <!--       <a href="--><?php //echo base_url(); ?><!--logincont/register">انشاء  حســــاب</a>-->

    </div>
</div>

