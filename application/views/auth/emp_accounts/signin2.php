<html>
<head><title>جامعة السودان للعلوم و التكنولوجيا</title></head>
<div class="col-md-6 col-md-offset-3 o_database_list">
    <div class="text-center">
        <img src="<?php echo base_url(); ?>assets/img/sudanun2.png">
    </div>

    <?php echo form_open(base_url().'EmpAccounts/postSignIn'); ?>
    <center><h1> نظام ادارة الشئون العلمية</h1></center>
    <center><h2>    تسجيل دخول الاساتذة </h2></center>
    <div class="form-group field-login">
        <label for="login" class="control-label">اسم المستخدم  </label>
        <input name="username" id="login" class="form-control" required="required" autofocus="autofocus" type="text"  placeholder="إسم المستخدم" autocomplete="off">
    </div>

    <div class="form-group field-password">
        <label for="password" class="control-label">كلمة المرور </label>
        <input name="password" id="password" class="form-control" required="required" autocomplete="current-password" maxlength="4096" type="password"  placeholder="كلمةالمرور ">
    </div>
    <br>
    <br>
    <div>
        <button type="submit" class="btn btn-primary">دخـــول </button>
        <a href="<?php echo base_url(); ?>EmpAccounts/emp" class="btn btn-default"> إنشاء حساب    </a>
        <a href="<?php echo base_url(); ?>" class="btn btn-success">  رجوع لصفحة دخول المستخدمين     </a>
    </div>




</div>
<!--</br></br> </br></br></br></br>
    <center>
      <div>جميع الحقوق محفوظة لجامعة السودان للعلوم و التكنولوجيا- مركز الحاسوب - قسم البرمجيات - الشئون العلمية -  2018 </div>
    <center>-->
</html>
