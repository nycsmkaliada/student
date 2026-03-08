<?php 
include_once('connfig.php');
include_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style type="text/css">
		tr td{
			font-size: 30px;
		}
		.card{
			margin-top: 20px;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-6">
					<div class="card" style="box-shadow: 5px 5px 5px 2px;">
						<div class="card-header bg-success text-white"><center><h2>Admin Login</h2></center></div>
						<div class="card-body">
							<form action="admin_login.php" method="post">
								<table class="table table-borderless">
									<tr><td>Username</td><td><input class="form-control" type="password" name="username" placeholder="Enter Username"></td></tr>
									<tr><td>Password</td><td><input class="form-control" type="password" name="password" placeholder="Enter
										Carrect Password"></td></tr>
										<tr align="center"><td colspan="2"><input class="btn btn-success form-control" type="submit" name="Admin_login" value="Login"></td></tr>
								</table>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card" style="box-shadow: 5px 5px 5px 2px;">
						<div class="card-header bg-success text-white"><center><h2>Student Login</h2></center></div>
						<div class="card-body">
							<form action="admin_login.php" method="post">
								<table class="table table-borderless">
									<tr><td>Name</td><td><input class="form-control" type="text" name="username" placeholder="Enter Your Name"></td></tr>
									<tr><td>Father's Name</td><td><input class="form-control" type="text" name="f_name" placeholder="Enter Your Father's Name"></td></tr>
									<tr><td>Registration Number</td><td><input class="form-control" type="text" name="password" placeholder="Enter Your Registration Number"></td></tr>
									<tr align="center"><td colspan="2"><input class="btn btn-success form-control" type="submit" name="user_login" value="Login"></td></tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>