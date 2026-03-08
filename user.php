<?php
include_once('connfig.php');
include_once('header.php');
if(isset($_SESSION['username']) && isset($_SESSION['f_name']) && isset($_SESSION['password'])){
	$user = $_SESSION['username'];
	$f_name = $_SESSION['f_name'];
	$password = $_SESSION['password'];
}else
{
	header('location:login.php');
}
$user = $_SESSION['username'];
$f_name = $_SESSION['f_name'];
$password = $_SESSION['password'];
$quea = "SELECT * FROM user WHERE username = '$user' and f_name = '$f_name' and password = '$password'";
$run = mysqli_query($conn,$quea);
if($run){
	$rows = mysqli_fetch_assoc($run);
	$id = $rows['id'];
}

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
		<div class="col-sm-3">
			<form action="" method="post">
				<div class="card">
					<div class="card-header center">
						<img src="<?php echo 'upload/'.$rows['file'] ?>" style="border-radius: 50%; border:2px solid green; height:15rem; width:250px;">
					</div>
					<div class="card-body">
						<table class="table table-borderless">
				<tr><td colspan="2"></td></tr>
				<tr><td>Name</td><td><?php echo $rows['username']; ?></td></tr>
				<tr><td>Father's Name</td><td><?php echo $rows['f_name']; ?></td></tr>
				<tr><td>Mother's Name</td><td><?php echo $rows['m_name']; ?></td></tr>
				<tr><td>Date of Birth</td><td><?php echo $rows['dob']; ?></td></tr>
				<tr><td>Mobile Number</td><td><?php echo $rows['mob']; ?></td></tr>
				<tr><td colspan="2"><a class="btn btn-success btn-lg btn-block form-control" href="edit_user.php?id=$id">Edit Profile</a></td></tr>

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
					<?php 
					$quea = "SELECT * FROM user WHERE username = '$user' and f_name = '$f_name'";
					$run = mysqli_query($conn,$quea);
					$rows = mysqli_fetch_assoc($run);
					$_SESSION['username'];
					$_SESSION['f_name'];
					if($rows['status']==0){
						echo "No Examination of this time";
					}
						elseif ($rows['status']==1) {
						echo "<a href = 'ques_paper1.php'>1<sup>st</sup> Semester Examination</a>";
						}elseif ($rows['status']==2){
						echo "<a href = 'ques_paper2.php'>1<sup>st</sup> Semester Examination</a>";
						} else{
							echo "You are All Exam Clear";
						}
					 ?>
				</div>
			</div>
		</div>
		<div class="col-sm-7">
			<div class="card">
				<div class="card-header bg-warning text-white">
					<center><h2>Receipt</h2></center></div>
					<table class="table  table-borderless">
					<tr>
						<th>Name</th><th>Father's Name</th><th>Admission </th><th>Exam </th><th>Tuition Fees</th><th>View</th>
					</tr>
			
				<div class="card-body">
						<?php 
						$na = "SELECT * FROM user WHERE username = '$user' and f_name = '$f_name' order by id desc";
						$ru = mysqli_query($conn,$na);
						while ($rows = mysqli_fetch_assoc($ru)){
						echo "<tr><td>";
						echo $rows['username'] ;
						echo "</td><td>";
						echo $rows['f_name'];
						echo "</td><td>";
						echo $rows['admission_fees'] ;
						echo "</td><td>";
						echo $rows['Exam_fees'] ;
						echo "</td><td>";
						echo $rows['Tuituion_fees'] ;
						echo"</td><td><a href='stu_receipt.php?stuid=$rows[id]'>View</a></td></tr>"	;
				?>				
						<?php 
						}
						?>
					
					</table>
					
				</div>
			</div>
			
			
		</div>
	</div>
</div>

</body>
</html>