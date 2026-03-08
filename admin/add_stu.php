<?php
include_once('connfig.php');
include_once('header.php');
$a = 1;


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
<div class="contioner-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="head">
				WELCOME <?php if (isset($_SESSION['username'])){
					echo $username = $_SESSION['username'];
				} ?>
				<a href="logout.php" style="float: right; color: white; text-decoration: none;">Logout</a>
			</div>
			<div class="row">
				<div class="col-sm-4" >
					<form action="add_stucom.php" method="post" class="shadow my-3">
						<center><table class="table table-success table-borderless" >
							<tr class="table-warning" align="center"><td colspan="2"><h2>Add Student</h2></td></tr>
							<tr><td>Name</td><td><input class="form-control" type="text" name="name"></td></tr>
							<tr><td>Registration Number</td><td><input class="form-control" type="text" name="reg" ></td></tr>
							<tr><td>Father's Name</td><td><input class="form-control" type="text" name="f_name" ></td></tr>
							<tr><td>Status</td><td>None <input type="radio" name="status" value="0">1st sem <input type="radio" name="status" value="1"> 2nd sem <input type="radio" name="status" value="2">Exam Clear <input type="radio" name="status" value="3"></td></tr>
							<tr><td>Tuition Fees</td><td><input class="form-control" type="text" name="Tuition_fees" ></td></tr>
							<tr><td colspan="2"></td></tr>
							<tr align="center"><td colspan="2"><input class="btn btn-success form-control" type="submit" name="submit" value="Submit"></td></tr>

						</table></center>
					</form>
				</div>
				<div class="col-sm-8 shadow my-3">
					<table class="table table-borderless">
						<tr class="table-warning"><td>Sl.No </td><td>Name</td><td>Father's Name</td> <td>Registration Number</td><td>Status</td><td>Edit</td></tr>
						<?php
						$quess = "SELECT * FROM user order by id desc";
						$run = mysqli_query($conn,$quess);
						while($rows = mysqli_fetch_assoc($run)){
							
						echo "<tr><td>";
						echo $a++; 
						echo "</td><td>";
						echo $rows['username'];
						echo "</td><td>";
						echo $rows['f_name'];
						echo "</td><td>";
						echo $rows['password'];
						echo "</td><td>";
						echo $rows['status'];
						echo"</td><td><a href='add_stuc.php?id=$rows[id]'>Edit Student</a></td></tr>";
								?>
					<?php  } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>	
</body>
</html>