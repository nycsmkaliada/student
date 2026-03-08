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
			font-size: 10px;
		}
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="contioner-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="head">
				WELCOME <?php if (isset($_SESSION['username'])){
					echo $_SESSION['username'];
				} ?>
				<a href="logout.php" style="float: right; color: white; text-decoration: none;">Logout</a>
			</div>
			
			<div class="row">
				<div class="col-sm-3" style="margin-top: 20px;">
					<form action="add_ques1c.php" method="post">
						<center><table class="table table-success table-borderless">
							<tr class="table-warning" align="center"><td colspan="2"><h2>1st Sem Question Add Table</h2></td></tr>
							<tr><td>Question</td><td><input class="form-control" type="text" name="ques"></td></tr>
							<tr><td>Option 1</td><td><input class="form-control" type="text" name="opt1"></td></tr>
							<tr><td>Option 2</td><td><input class="form-control" type="text" name="opt2"></td></tr>
							<tr><td>Option 3</td><td><input class="form-control" type="text" name="opt3"></td></tr>
							<tr><td>Option 4</td><td><input class="form-control" type="text" name="opt4"></td></tr>
							<tr><td>Answer</td><td><input class="form-control" type="text" name="ans"></td></tr>
							<tr><td colspan="2"></td></tr>
							<tr align="center"><td colspan="2"><input class="btn btn-success form-control" type="submit" name="submit" value="Submit"></td></tr>

						</table></center>
					</form>
				</div>
				<div class="col-sm-9" style="margin-top: 20px;">
					<table class="table table-borderless">
						<tr class="table table-danger"><th>Sl. No</th><th>Question</th><th>Option 1</th><th>Option 2</th><th>Option 3</th><th>Option 4</th></tr>
						<?php 
						$quer = "SELECT * FROM add_ques1 order by id desc";
						$run = mysqli_query($conn,$quer);
						while ($rows = mysqli_fetch_assoc($run)) {

							echo "<tr class = 'table table-warning'><td>";
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
							echo "</td></tr>";
							?>

							<?php 	} ?>
					</table>
				</div>
			</div>
			<a href="logout.php" style="float: right; color: white; text-decoration: none;">Logout</a>
		</div>
	</div>
</div>	
</body>
</html>