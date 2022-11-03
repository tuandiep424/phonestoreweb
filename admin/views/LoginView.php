<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/admin/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:100px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading" >Login</div>
				<div class="panel-body">
					<form method="post" action="index.php?controller=login&action=login">
					<div class="row" style="margin-top:20px; margin-bottom: 20px">
						<div class="col-md-2">Email</div>
						<div class="col-md-9"><input type="email" name="email" required class="form-control"></div>
					</div>
					<div class="row" style="margin-top:5px; margin-bottom: 20px">
						<div class="col-md-2">Password</div>
						<div class="col-md-9"><input type="password" name="password" required class="form-control"></div>
					</div>

					<div class="checkbox">
						<div class="col-md-2"></div>
						<label>
							<input style="margin-bottom: 30px" name="remember" type="checkbox" value="Remember Me">Remember Me
						</label>
					</div>
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2"></div>
						<div class="col-md-9">
							<input style="margin-right: 200px;
							margin-top: 10px;" type="submit" value="Đăng Nhập" class="btn btn-danger">
						 	<input style="right: 0px; margin-top: 10px;" type="reset" value="Đăng ký" class="btn btn-danger">
						 </div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>