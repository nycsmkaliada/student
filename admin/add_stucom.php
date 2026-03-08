<?php
include_once('connfig.php');
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$reg = $_POST['reg'];
	$f_name = $_POST['f_name'];
	$status = $_POST['status'];
	$query = "INSERT INTO `user`(`username`, `password`, `f_name`, `status`) VALUES ('$name','$reg','$f_name','$status')";
	$run = mysqli_query($conn,$query);
	if($run){
		echo "Student inserted Successfully";
		header('location:add_stu.php');
	}else{
		echo "Please Inserted data";
	}
}
?>