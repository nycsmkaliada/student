<?php
include_once('connfig.php');
if(isset($_POST['submit'])){
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
	
	
	$query = "INSERT INTO `user`(`serial`,`username`, `f_name`,`date`, `course`,`password`, `admission_fees`, `Registration_fees`, `Tuituion_fees`, `Late_fees`, `Exam_fees`, `Maintain_fees`, `other_fees`, `total`) VALUES ('$serial','$name','$f_name','$date','$course','$pass','$add','$reg','$tui','$lat','$exa','$man','$oth','$tot')";
	$fire = mysqli_query($conn,$query);
	if($fire){
		echo "Successfully Inserted data";
		header('location:create_bill.php');
	}else{
		echo "Not Inserted";
	}
}

?>