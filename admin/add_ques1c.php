<?php
include_once('connfig.php');
include_once('header.php');
if(isset($_POST['submit'])){
		$ques = $_POST['ques'];
		$opt1 = $_POST['opt1'];
		$opt2 = $_POST['opt2'];
		$opt3 = $_POST['opt3'];
		$opt4 = $_POST['opt4'];
		$ans = $_POST['ans'];
		$query = "INSERT INTO `add_ques1`(ques,opt1, opt2, opt3, opt4, ans) VALUES ('$ques','$opt1','$opt2','$opt3','$opt4','$ans')";
		$run = mysqli_query($conn,$query);
		echo "Inserted Successfully";
		header('location:add_ques1.php');	
	}else{
		echo "Not Inserted";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

</body>
</html>