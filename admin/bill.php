<?php
include_once('connfig.php');
$id=$_GET['deleteid'];
$qu = "DELETE FROM `user` WHERE id = '$id'";
$run = mysqli_query($conn,$qu);
if($run){
    header('location:create_bill.php');
}