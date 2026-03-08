
<?php
include_once('connfig.php');
include_once('header.php');
$a = 1;
if (isset($_SESSION['username'])){
	
} else{
	header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Question</title>
	<style type="text/css">
		tr td{
			font-size: 20px;
		}
		tr th{
			font-size: 20px;
		}
		.head{
			margin-top: 10px;
			background-color: blue;
			color:white;
			font-size: 40px;
			text-align: center;
			box-shadow: 10px 10px 10px 5px;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="head">
				WELCOME <?php if (isset($_SESSION['username'])){
					echo $_SESSION['username'];
				} ?>
				<a href="logout.php" style="float: right; color: white; text-decoration: none; margin-right: 10px;">Logout</a>
			</div>
		</div>
			<!-- <div style="float: right; background-color: green; color: white; padding: 10px; margin: 10px 10px;"><a href="" style="text-decoration: none; display: block; color: white;">Logout</a></div> -->
			<div class="container">
			<div class="row">
				<div class="col-sm-12" style="margin-top: 20px;">
					<div class="card shadow">
						<div class="card-header bg-warning text-white">
							<table class="table table-borderless">
							<tr><td>Sl. No</td><td>Question</td><td>Option 1</td>
							<td> Option 2</td>
							<td> Option 3</td>
							<td>Option 4</td>
							<td> Answer</td>
							<td colspan='2'> Action
							</td></tr>
							</table>
							
						</div>
					<div class="card-body">
					<table class="table table-borderless">
						
						<?php 
						$quer = "SELECT * FROM add_ques1 order by id desc";
						$run = mysqli_query($conn,$quer);
						while ($rows = mysqli_fetch_assoc($run)) {

							echo "<tr><td>";
							echo $a++;
							echo "</td><td>";
							echo $rows['ques'];
							echo "</td><td>";
							echo $rows['opt1'];
							echo "</td><td>";
							echo $rows['opt2'];
							echo "</td><td>";
							echo $rows['opt3'];
							echo "</td><td>";
							echo $rows['opt4'];
						echo "</td><td>";
							echo "<a class='btn btn-warning' href='edit_1stsem.php?id=$rows[id]'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>";
							echo "</td><td>";
							echo "<a class='btn btn-danger' href='delete_1stsem.php?id=$rows[id]'><i class='fa fa-trash-o' aria-hidden='true'></i> </a>";
							echo "</td></tr>";
							?>

							<?php 	} ?>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>	
</body>
</html>