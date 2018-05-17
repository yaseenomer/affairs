<div class="col-md-6 col-md-offset-3 o_database_list">
    <div class="text-center">
        <img src="<?php echo base_url(); ?>assets/img/sudanun2.png">
    </div>

    <?php echo form_open(base_url().'auth/auth/postSignIn'); ?>

        <div class="form-group field-login">
            <label for="login" class="control-label">اسم المستخدم  </label>
            <input name="login" id="login" class="form-control" required="required" autofocus="autofocus" type="text">
        </div>

        <div class="form-group field-password">
            <label for="password" class="control-label">كلمة المرور </label>
            <input name="password" id="password" class="form-control" required="required" autocomplete="current-password" maxlength="4096" type="password">
        </div>
        <button type="submit" class="btn btn-primary">دخـــول</button>
    </form>


    <div class="text-center">

       <a href="<?php echo base_url(); ?>logincont/register">انشاء  حســــاب</a>

    </div>
</div>

