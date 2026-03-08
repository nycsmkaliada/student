<?php
include_once('connfig.php');
include_once('header.php');
if(isset($_SESSION['username'])){
	$user = $_SESSION['username'];
}else
{
	header('location:login.php');
}
$user = $_SESSION['username'];
$quea = "SELECT * FROM user ";
$run = mysqli_query($conn,$quea);
$rows = mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<style type="text/css">
	.head{
			margin-top: 10px;
			background-color: blue;
			color:white;
			font-size: 40px;
			text-align: center;
		}
		</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
	<div class="head">
				WELCOME <?php if (isset($_SESSION['username'])){
					echo $_SESSION['username'];
				} ?>
			</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-5">
			<form action="" method="post">
				<div class="card">
					<div class="card-header center">
						<img src="<?php echo 'upload/'.$rows['file'] ?>" height="500px;" width="500px;" style="border-radius: 50%; border:2px solid green;">
					</div>
					<div class="card-body">
						<table class="table table-borderless">
				<tr><td colspan="2"></td></tr>
				<tr><td>Name</td><td><?php echo $rows['username']; ?></td></tr>
				<tr><td>Father's Name</td><td><?php echo $rows['f_name']; ?></td></tr>
				<tr><td>Mother's Name</td><td><?php echo $rows['m_name']; ?></td></tr>
				<tr><td>Date of Birth</td><td><?php echo $rows['dob']; ?></td></tr>
				<tr><td>Mobile Number</td><td><?php echo $rows['mob']; ?></td></tr>
				<tr><td>Status</td><td><?php echo $rows['status']; ?></td></tr>
				<tr><td colspan="2"><a class="btn btn-success btn-lg btn-block form-control" href="edit_user.php?user=$user">Edit Profile</a></td></tr>

			</table>
					</div>
				</div>
			
		</div>
		<div class="col-sm-2">
			<div class="card">
				<div class="card-header">
					Examination 
				</div>
				<div class="card-body">
					Name  <?php echo $rows['status']; ?>
				</div>
			</div>
		</div>
		<div class="col-sm-5">
			<div class="card">
				<div class="card-header">
					<table class="table table-borderless">
				<tr>
				<td>Name</td><td>Father's Name</td><td>View</td>
			</tr>
			</table>
				</div>
				<div class="card-body"></div>
			</div>
			
			
		</div>
	</div>
</div>

</body>
</html>