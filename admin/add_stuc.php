<?php
include_once('connfig.php');
if (isset($_SESSION['username'])){
	
} else{
	header('location:login.php');
}

$id = $_GET['id'];
$a = 1;
$nam = "SELECT * FROM user WHERE id = $id";
$run = mysqli_query($conn,$nam);
$rows = mysqli_fetch_assoc($run);
?>
<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$reg = $_POST['reg'];
	$f_name = $_POST['f_name'];
	$status = $_POST['status'];
	$Tuituion_fees = $_POST['Tuituion_fees'];
	$admission_fees = $_POST['admission_fees'];
	$Exam_fees = $_POST['Exam_fees'];
	$query = "UPDATE `user` SET `username`='$name',`password`='$reg',`f_name`='$f_name',`status`='$status', `Tuituion_fees`='$Tuituion_fees', `admission_fees`='$admission_fees', `Exam_fees`='$Exam_fees' WHERE id = '$id'";
	$run = mysqli_query($conn,$query);
	if($run){
		echo "Student inserted Successfully";
		header('location:add_stu.php');
	}else{
		echo "Please Inserted data";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style type="text/css">
		tr td{
			font-size: 30px;
		}
		.head{
			margin-top: 10px;
			background-color: blue;
			color:white;
			font-size: 40px;
			text-align: center;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="head">
				WELCOME <?php if (isset($_SESSION['username'])){
					echo $_SESSION['username'];
				} ?>
				<a href="logout.php" style="float: right; color: white; text-decoration: none;">Logout</a>
			</div>
			<div class="row">
				<div class="col-sm-6" col-offset-sm-3>
					<form action="" method="post">
						<center><table class="table table-success table-borderless" >
							<tr class="table-warning" align="center"><td colspan="2"><h2>Add Student</h2></td></tr>
							<tr><td>Name</td><td><input type="hidden" name="id" value="<?php echo $rows['id'] ?>"><input class="form-control" type="text" name="name" value="<?php echo $rows['username'] ?>"></td></tr>
							<tr><td>Registration Number</td><td><input class="form-control" type="text" name="reg" value="<?php echo $rows['password'] ?>" ></td></tr>
							<tr><td>Father's Name</td><td><input class="form-control" type="text" name="f_name" value="<?php echo $rows['f_name'] ?>"></td></tr>
							<tr><td>Status</td><td>None<input type="hidden" name="status" value="<?php echo $rows['status'] ?>"> <input type="radio" name="status" value="0">1st sem <input type="radio" name="status" value="1"> 2nd sem <input type="radio" name="status" value="2">Exam Clear <input type="radio" name="status" value="3"></td></tr>
							<tr><td>Admission Fees</td><td><input class="form-control" type="text" name="admission_fees" value="<?php echo $rows['admission_fees'] ?>" ></td></tr>
							<tr><td>Tuition Fees</td><td><input class="form-control" type="text" name="Tuituion_fees" value="<?php echo $rows['Tuituion_fees'] ?>" ></td></tr>
							<tr><td>Exam Fees</td><td><input class="form-control" type="text" name="Exam_fees" value="<?php echo $rows['Exam_fees'] ?>" ></td></tr>
							<tr><td colspan="2"></td></tr>
							<tr align="center"><td colspan="2"><input class="btn btn-success form-control" type="submit" name="submit" value="Submit"></td></tr>

						</table></center>
					</form>
				</div>