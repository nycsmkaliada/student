<?php
include_once('connfig.php');
include_once('header.php');
if (isset($_SESSION['username'])){
	
} else{
	header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style type="text/css">
		* {
			margin:0px;
			padding: 0px;
		}
		.head{
			margin-top: 10px;
			background-color: blue;
			color:white;
			font-size: 40px;
			text-align: center;
		}
		.menu ul{
			list-style: none;
		}
		.menu ul li{
			width: 220px;
			height: 40px;
			float: left;
			background-color: green;
			text-align: center;
			border: 2px solid white;
			line-height: 40px;
			position: relative;
			color: white;
			border-radius: 50px;
			transition: 1s;

		}
		.menu ul:hover{
			border-radius: 50px;
			transition: 1s;
		}
		.menu ul li a{
			text-decoration: none;
			color: white;
			display: block;
			transition: transform 2s;
		}
		.menu ul li a:hover{
			
			display: block;
			background-color: blue;
			transform: rotate(360deg);
			border-radius: 50px;
			transition: 2s;

		}
		.menu ul li:hover>ul{
			display: block;

		}
		.menu ul ul{
			position: absolute;
			display: none;
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
			<div class="head">
				WELCOME <?php if (isset($_SESSION['username'])){
					echo $_SESSION['username'];
				} ?>
				<a href="logout.php" style="float: right; color: white; text-decoration: none;">Logout</a>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="menu">
				<ul><li>Student Managment
					<ul>
					<li><a href="new_addmission.php">New Addmission</a></li>
					<li><a href="add_stu.php">Add  Student</a></li>
					<li><a href="user_results.php">Show Results</a></li>
					<li><a href="create_bill.php">Bill Generate</a></li></ul>
				</li>
					<li>Question Management
					<ul>
					<li><a href="add_ques1.php">Add 1st sem Question</a></li>
					<li><a href="add_ques2.php">Add 2nd Sem Quesiton</a></li>
					<li><a href="">Delete Question</a></li></ul>
				</li><li>Others Management
					<ul>
					<li><a href="">Enquiry</a></li>
					<li><a href="Show_1stsem.php">Show 1s Sem and Edit</a></li>
					<li><a href="Show_2ndsem.php">Show 2nd Sem and Edit</a></li></ul>
				</li>
					
				</ul>
			</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>

	
	