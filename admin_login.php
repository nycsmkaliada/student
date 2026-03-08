<?php
include_once('connfig.php');

if(isset($_POST['Admin_login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query  = "SELECT * FROM admin where username ='$username' and password = '$password'";
	$sql = mysqli_query($conn,$query);
	if ($rows = mysqli_num_rows($sql)>0){
		header('location:admin/admin.php');
		session_start();
		$_SESSION['username'] = $username;
	} else{
		echo "Not successfully";
	}

}
if(isset($_POST['user_login'])){
	$username = $_POST['username'];
	$f_name = $_POST['f_name'];
	$password = $_POST['password'];
	$query  = "SELECT * FROM user where username ='$username' and f_name = '$f_name' and password = '$password'";
	$sql = mysqli_query($conn,$query);
	if ($rows = mysqli_num_rows($sql)>0){
		session_start();
		echo $_SESSION['username'] = $username;
		echo $_SESSION['f_name']= $f_name;
		echo $_SESSION['password']=$password;
		
			header('location:user.php');
	} else{
		echo "Not successfully";
	}

} else{
	echo "dalskjdflkas";
}

?>
