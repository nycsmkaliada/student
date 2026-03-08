<?php
include_once('connfig.php');
include_once('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>New Apply</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
  </script>
<style type="text/css">
	body{
		background-color: #f2f2f2;
	}
	.card{
		margin:40px 5px;
		font-size: 20px;
		box-shadow: 10px 10px 10px 4px;
	}

</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header bg-success text-white">
						<center><h2>Apply for New Addmission</h2></center>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
							<form action="" method="post">
							Name<input class="form-control" type="text" name="name" placeholder="Enter your Name"required>
							Aadhaar Number<input  class="form-control" type="number" name="aadhar" placeholder="Enter Aadhaar Number"required>
							Mother's Name<input  class="form-control" type="text" name="m_name" placeholder="Enter Mother's Name"required>
							Email Id <input  class="form-control" type="text" name="email" placeholder="Enter Your valid Email id">
							Date of Birth<input  class="form-control" type="date" name="dob" required>
						</div>
						<div class="col-sm-6">
							Father's Name<input  class="form-control" type="text" name="f_name" placeholder="Enter your Father's Name"required>
							Mobile Number<input  class="form-control" type="number" name="mob" placeholder="Enter your mobile number"required><br>
							Gander:  Male <input  type="radio" name="gander" value="Male"> Female <input type="radio" name="gander" value="Female"><br><br>
							Highest Qualification <input  class="form-control" type="text" name="high" placeholder="Enter the Highest Qualification" required>
							Category<select class="form-control" name="cat"><option value="select">---Select--</option><option value="gen">Gen</option><option value="st">ST</option><option value="sc">SC</option><option value="obca">OBC - A </option><option value="obcb">OBC - B</option></select>
						</div>
						<div>Address <textarea class="form-control" name="address" placeholder="Enter Full Address" required></textarea></div>
						<br><br>
						<div class="form-control btn btn-success disabled" style="font-size: 30px;"><?php if(isset($_POST['submit'])){
									$name = $_POST['name'];
									$f_name = $_POST['f_name'];
									$aadhar = $_POST['aadhar'];
									$mob = $_POST['mob'];
									$m_name = $_POST['m_name'];
									$gander = $_POST['gander'];
									$email = $_POST['email'];
									$high = $_POST['high'];
									$dob = $_POST['dob'];
									$cat = $_POST['cat'];
									$address = $_POST['address'];
									$query =  "INSERT INTO `new_add`(`name`, `f_name`, `aadhar`, `mob`, `m_name`, `gander`, `email`, `high`, `dob`, `cat`, `address`) VALUES ('$name','$f_name','$aadhar','$mob','$m_name','$gander','$email','$high','$dob','$cat','$address')";
									$fire = mysqli_query($conn,$query);
								if($fire){
									echo "Successfully Enrolled Please Contact 8116205505 ";
																
								} else {
											echo "Please Contact Branch";					
								}
							}?></div>
						<div>
						<center><input class="btn btn-success" type="submit" name="submit" value="Submit"></center></div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
						
							
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php

?>
</body>
</html>