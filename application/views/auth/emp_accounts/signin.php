<div class="col-md-6 col-md-offset-3 o_database_list">
    <div class="text-center">
        <img src="<?php echo base_url(); ?>assets/img/sudanun2.png">
    </div>

    <?php echo form_open(base_url().'EmpAccounts/getEmp'); ?>

        <div class="form-group field-login">
            <label for="login" class="control-label"> ادخل الرقم الوظيفي   </label>
            <input name="emp_no"  class="form-control" required="required" autofocus="autofocus" type="text">
        </div>

        <button type="submit" class="btn btn-primary">تأكــــيد </button>
    </form>


    <div class="text-center">

<!--       <a href="--><?php //echo base_url(); ?><!--logincont/register">انشاء  حســــاب</a>-->

    </div>
</div>

