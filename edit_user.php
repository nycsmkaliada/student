<?php
include_once('connfig.php');
include_once('header.php');
$id = $_GET['id'];

if(isset($_SESSION['username']) || $_SESSION['f_name'] || $_SESSION['password']){
	
}else
{
	header('location:login.php');
}
$user = $_SESSION['username'];
$f_name = $_SESSION['f_name'];
$password = $_SESSION['password'];
$query = "SELECT * FROM user WHERE username = '$user' and f_name = '$f_name' and password = '$password'";
$run = mysqli_query($conn,$query);
$rows = mysqli_fetch_assoc($run);

if(isset($_POST['submit'])){
	$username =$_POST['name'];
	$f_name =$_POST['f_name'];
	$m_name =$_POST['m_name'];
	$dob =$_POST['dob'];
	$mob =$_POST['mob'];

	$photo_name= $_FILES['file']['name'];
	 $photo_size= $_FILES['file']['size'];
	 $tmp_name= $_FILES['file']['tmp_name'];
	 $photo_type= $_FILES['file']['type'];
	$old_photo =$_POST['photo_old'];
	if($photo_name!="")
	{
		$update_photo = $_FILES['file']['name'];
	}
	else
	{
		$update_photo = $old_photo;
	}

	$qu ="UPDATE `user` SET `username`='$username',`f_name`='$f_name',`m_name`='$m_name',`dob`='$dob',`mob`='$mob',`file`='$update_photo'WHERE username = '$username' and f_name = '$f_name'";
	$ru = mysqli_query($conn,$qu);
	if($run){
		if($_FILES['file']['name'] !=""){
			move_uploaded_file($tmp_name, "upload/".$update_photo);
			unlink("upload/".$old_photo);
			header('location:user.php');
			echo "Successfully Updated";
		}
			
		} else {
			echo "Not Inserted Data";
		}
			}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title><style type="text/css">
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
					} else{
					header('location:login.php');
				} ?>
				<div style="float:right; margin-right:20px;"><a style="text-decoration:none; color:white;" href="logout.php">Logout</a></div>
			</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<form action="" method="post" enctype="multipart/form-data">
			<table class="table table-borderless">
				
				<tr><td>Name</td><td><input class="form-control" type="text" name="name" value="<?php echo $rows['username'];?>"></td></tr>
				<tr><td>Father's Name</td><td><input class="form-control" type="text" name="f_name" value="<?php echo $rows['f_name'];?>"></td></tr>
				<tr><td>Mother's Name</td><td><input class="form-control" type="text" name="m_name" value="<?php echo $rows['m_name'];?>"></td></tr>
				<tr><td>Date of Birth</td><td><input class="form-control" type="date" name="dob" value="<?php echo $rows['date'];?>"></td></tr>
				<tr><td>Mobile Number</td><td><input class="form-control" type="number" name="mob" value="<?php echo $rows['mob'];?>"></td></tr>
				<tr><td>Photo</td><td><input class="form-control" type="file" name="file"><input type="hidden" name="photo_old" value="<?php echo $rows['file'] ?>"></td></tr>
				<tr><td colspan="2"><input class="form-control btn btn-success" type="submit" name="submit" value="Save Profile"></td></tr>
				

			</table>
		</form>
		</div>
			</div>
		</div>
	</div>

</body>
</html>