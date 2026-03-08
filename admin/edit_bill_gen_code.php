<?php
include_once('connfig.php');
if(isset($_POST['submit'])){
    $id = $_POST['id'];
	$serial = $_POST['serial'];
	$name = $_POST['name'];
	$f_name = $_POST['f_name'];
	$date = $_POST['date'];
	$course = $_POST['course'];
	$pass = $_POST['password'];
	$add = $_POST['addmission_fees'];
	$reg = $_POST['registration_fees'];
	$tui = $_POST['tuituion_fees'];
	$lat = $_POST['late_fees'];
	$exa = $_POST['exam_fees'];
	$man = $_POST['maintain_fees'];
	$oth = $_POST['other_fees'];
	$total = (int)$add+(int)$reg+(int)$tui+(int)$lat+(int)$exa+(int)$oth;
	$tot = $total;
	
	
	$query = "UPDATE `user` SET username='$name',password='$pass',f_name='$f_name',serial='$serial',date='$date',course='$course',admission_fees='$add',Registration_fees='$reg',Tuituion_fees='$tui',Late_fees='$lat',Exam_fees='$exa',Maintain_fees='$man',other_fees='$oth',total='$tot' WHERE id = '$id'";
	$fire = mysqli_query($conn,$query);
	if($fire){
		echo "Successfully Inserted data";
		header('location:create_bill.php');
	}else{
		echo "Not Inserted";
	}
}

?>