<?php  
		$this->fileLayout = "LayoutTrangTrong.php";	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="admin/css/bootstrap.css"> -->
</head>
<body>
<style type="text/css">
	.container{
		height: 300px;
		width: 500px;
		margin-left: 400px;
	}
	.row{
		display: flex;
	}
</style>

<table style=" border: 1px solid;" >
	<div class="container" style="margin-top:100px;">
	<fieldset style="width: 500px; height: 300px; border-color: #337ab7; " >
		<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center; height: 30px; width: 500px;padding-top: 10px; color: white; background-color: #337ab7; border-color: #337ab7" >Login</div>
				<div class="panel-body" style="border-color: #337ab7; margin-left: 50px; margin-top: 50px;" >
					<form method="post" action="index.php?controller=account&action=loginpost">
					<div class="row" style="margin-top:20px; margin-bottom: 20px">
						<div class="col-md-2" style="margin-right: 50px;">Email</div>
						<div class="col-md-9"><input type="email" name="email" required class="form-control"></div>
					</div>
					<div class="row" style="margin-top:5px; margin-bottom: 20px">
						<div class="col-md-2" style="margin-right: 20px;">Password</div>
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
						<div class="col-md-9" >
							<input style="margin-right: 200px;font-size: 16px; height: 30px; width: 100px; color: white; background-color: #d9534f; border-color: #d43f3a; margin-top: 10px;" type="submit" value="Đăng Nhập" class="btn btn-danger">
						 	<button style="right: 0px; color: white; font-size: 16px; height: 30px; width: 100px; margin-top: 10px; background-color: #d9534f; border-color: #d43f3a;" type="submit"  class="btn btn-danger"><a href="index.php?controller=account&action=register" style="color: white;">Dang ky</a></button>
						 	

						 </div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</fieldset>
	</div>
</table>
</body>
</html>