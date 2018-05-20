<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
    <title>جامعة السودان للعلوم والتكنولوجيا / نظام ادارة الشئون العلمية</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/css/my-login.css">

</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<!--<img src="<?php echo base_url()?>assets/login/img/logo.jpg">-->
                        <img src="<?php echo base_url()?>assets/img/sudanun2.png">

					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" action="<?php echo base_url()?>au_tech_con/postSignIn">
							 
								<div class="form-group">
									<!--<label for="email">E-Mail Address</label>-->
                                    <label for="text">User Name </label>

									<input  type="text" class="form-control" name="login" id="login"  dir="rtl" required autofocus placeholder="ادخل اسم المستخدم">
								</div>

								<div class="form-group">
									<label for="password">Password
										
									</label>
                                    <input name="password" id="password" class="form-control"  dir="rtl"required="required" autocomplete="current-password" maxlength="4096" type="password"placeholder="ادخل كلمة المرور">
								</div>

							<!--	<div class="form-group">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>-->

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								
							<center>	<div class="margin-top20 text-center">
                                  <a href="<?php echo base_url(); ?>Emp_no/forgot" class="float-right">
											فقدت كلمة المرور</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <a href="<?php echo base_url(); ?>Emp_no/empno">انشاء حساب جديد</a>
								</div></center>
							</form>
						</div>
					</div>
					<div class="footer">
                         جامعة السودان للعلوم و التكنولوجيا /مركز الحاسوب / قسم البرمجيات / 2018
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>