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
						<img src="<?php echo base_url()?>assets/img/sudanun2.png">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST">
							 
								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name" required autofocus placeholder="ادخل الاسم">
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" required placeholder="البريد الالكتروني">
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye placeholder="كلمة المرور">
								</div>


								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="margin-top20 text-center">
									Already have an account? <a href="<?php echo base_url(); ?>Emp_no/Teacher">Login</a>
								</div>
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