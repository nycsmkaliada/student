<?php
include_once('connfig.php');
if(isset($_SESSION['username'])){

}else{
	header('location:login.php');
}
$id = $_GET['id'];
$del = "DELETE FROM add_ques1 WHERE id='$id'";
$run = mysqli_query($conn,$del);
if($run){
	echo "Question Deleted Successfully";
	header('location:Show_1stsem.php');

} else{
	echo "Not Deleted";
}
?>