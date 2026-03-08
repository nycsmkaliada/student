<?php
include_once('connfig.php');

if(isset($_SESSION['username']) && isset($_SESSION['f_name']) && isset($_SESSION['password'])){
	session_unset();
	session_destroy();
	header('location:login.php');
}else
{
	header('location:login.php');
}
?>