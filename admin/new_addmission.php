<?php
include_once('connfig.php');
include_once('header.php');
if (isset($_SESSION['username'])){
	
} else{
	header('location:login.php');
}
$i = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>New Addmission</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header bg-warning text-white">
						<center><h1>New Addmission</h1></center>
					</div>
					<div class="card-body">
						<table class="table table-borderless">
							<tr><td>Sl No.</td>
								<td>Name</td>
								<td>Father's Name</td>
								<td>Mother's Name</td>
								<td>Aadhaar Number</td>
								<td>Mobile</td>
								<td>Address</td>
								<td>Date of birth</td>
								<td>Gander</td>
							</tr>
							<?php
							$ram = "SELECT * FROM new_add";
							$run = mysqli_query($conn,$ram);
							while ($rows = mysqli_fetch_assoc($run)) {
								?>
							<tr><td><?php $i++; ?></td>
							<td><?php echo $rows['name']; ?></td>
							<td><?php echo $rows['f_name']; ?></td>
							<td><?php echo $rows['m_name']; ?></td>
							<td><?php echo $rows['aadhar']; ?></td>
							<td><?php echo $rows['mob']; ?></td>
							<td><?php echo $rows['address']; ?></td>
							<td><?php echo $rows['dob']; ?></td>
							<td><?php echo $rows['gander']; ?></td></tr>
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