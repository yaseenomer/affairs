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
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.jpg">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Reset Password</h4>
							<form method="POST">
							 
								<div class="form-group">
									<label for="new-password">New Password</label>
									<input id="new-password" type="password" class="form-control" name="password" required autofocus data-eye placeholder="كلمة المرور">

								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Reset Password
									</button>
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