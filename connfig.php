<?php
session_start();
$host = "localhost";
$user = "root";
$pass =  "";
$database = "student";

$conn = mysqli_connect("$host","$user","$pass","$database");
if($conn){

}else{
	print "Conncection Problem !";
}


?>