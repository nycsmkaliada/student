<?php
include_once('connfig.php');
if (isset($_SESSION['username'])){
  $Username = $_SESSION['username'];
} else{
  header('location:login.php');
}
$id = $_GET['stuid'];
   $sql = "SELECT * FROM `user` where id = '$id'";
  $fire = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($fire);
?>
       <html>
         <head>
             <title></title>
    <style>
            </style>
         </head>
     </html><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <title>Form of  NYCSM</title>
 <style type="text/css">
 *{ margin:0; padding:0;}
  body{    margin-bottom:300px;  }
  .blank{    border:2px solid #3d76f2;  } 
  .full{  background-color: white; height: 100%; width: 100%;  }
  tr{ border-color: 2px solid #3d76f2;font-size: 20px; }
     .copy{float: left;height: 100%; width: 40%;  }
   .copy1{ float: left; height: 100%;  width: 40%;  }
  .table{   font-family: Monotype Corsiva;font-color: skyblue;   font-size:40px;  }
  .table { width: 100%;  font-size: 20px; }
  td{ height: 20px; width:50%; }
  .om{ height: 100%; width: 100%; float: left; font-size: 10px;  margin-left:5px; margin-right: 1px;  }
  .om1{ height: 100%; width: 49%; float: right; font-size: 30px; margin-right:5px;  }

</style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-12">

    <div class ="full">
      <div class="om">
   <div class="1st" style=" background-color: white; padding: 5px; border:2px solid blue; margin-top: 5px;">
          <center>
           <div class="woter" style="height: 400px; width: auto; opacity:20%; position: absolute; margin-top: 200px; margin-left:100px;"><img src="logo.jpg" style="height: 730px; width: 850px; margin-top: -200px;"></div>
        <font face="Monotype Corsiva" color="#0336a3"> <h1 style="font-size: 30px;"><font face="Monotype Corsiva">NATIONAL YUVA COMPUTER SAKSHARTA MISSSION</h1></font>
        <img class="img1" src="logo.jpg" style="height: 140px; width: auto;  float: left; margin-top: -45px;"><font size="3" face="Monotype Corsiva" color="#0336a3">  An ISO 9001 : 2018 Certified Organization, Unit of Yuva Foundation<img class="img2" src="logo.jpg" style="height: 140px; width: auto;  float: right; margin-top: -45px;"> <br>
<font face="Monotype Corsiva" color="#0336a3" size="3"> Registered Under Indian Trust Act. 1982, Govt. of India
        <font face="Monotype Corsiva" color="#0336a3" size="2"><center>A National Programme of Digital Literacy and Information Technology Education</center> </font>
        <font face="Monotype Corsiva" color="#0336a3" size="2"><p style="padding: 2px; margin-bottom: 5px; border: 2px solid blue; float: left;margin-left:100px; margin-bottom: 5px;">website:- www.nationalyuva.com </p><p style="float: right; padding: 2px; border: 2px solid blue; margin-right:100px;">Email:-nationalyuva@gmail.com </p></font>
          </center><br>
        </div>


      <div class="2nd" style=" background-color: white; border:2px solid blue;">
        <center>
          <p><a class="name" style="padding:0px; margin:0px;"><font face="Monotype Corsiva" color="#0336a3" size="3"><a style="float: left; margin-left:10px; font-size: 18px;"><b>Authorized Training Center Name: </b></a><a style="float: right; margin-right: 10px;  font-size: 18px;"><b> National Yuva Computer Saksharata Mission </b> </a>
            <p><b><a style="font-size: 18px; text-decoration: none;">Kaliada, Purulia, West Bengal. Phone no:- 8116205505 / 8145567544</a></b></font></p>
        </center>
      </div>

<div class="3rd"  style=" background-color: white; border:2px solid blue;">
 <center> <p style="font-size: 30px; background: green;"><b></b>Money Received</b></p></center>
  <a style="float: left; margin-left: 10px;"><h4>Sl No:-<?php echo $row['serial']; ?></h4><font face="Agency FB" color="black" style="letter-spacing: 4px;"></font></a><a style="float: right;margin-right: 10px;"><h4>Date: <?php echo $row['date']; ?></h4> </a><br>
</div>

 <div class="4th"  style=" background-color: white; border:2px solid blue;">
   
     <label style="font-size: 20px; ">Student Name :  &nbsp; <?php echo $row['username']; ?> </label><label style="font-size: 20px; float: right; ">Father's Name :  &nbsp; <?php echo $row['f_name']; ?> </label><br>
     <label style="font-size: 20px; margin-left: 10px;">Course  &nbsp; <?php echo $row['course']; ?> </label> <label style="float: right; margin-right: 10px;">ID No: <?php echo $row['password']; ?>&nbsp; </label>
   </div>



<div class="5th"  style=" background-color: white;">
  
     <table style="border:2px solid blue; padding: 0px; margin:0px;">
      
        <tr class="table-bordered"align="center">
         <th >Sl.No</th><th> Particulars </th><th align="center"> Amount</th>
       </tr><tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center"> (I)</td><td> Admission Fees </td><td align="center"> <?php echo $row['admission_fees']; ?></td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center"> (II)</td><td> Registration Fees </td><td align="center"> <?php echo $row['Registration_fees']; ?></td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center"> (III)</td><td> Tuition Fees </td><td align="center"><?php echo $row['Tuituion_fees']; ?></td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center"> (IV)</td><td> Late Fees </td><td align="center"> <?php echo $row['Late_fees']; ?>  </td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center"> (V)</td><td> Examination Fees </td><td align="center"> <?php echo $row['Exam_fees']; ?> </td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center"> (VI)</td><td> Maintenence Fees </td><td align="center"><?php echo $row['Maintain_fees']; ?> </td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center">(VI)</td><td> Others </td><td align="center"><?php echo $row['other_fees']; ?></td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td colspan="2" align="center">Total Amount</td><td align="center"><?php echo $row['total']; ?></td></tr>
       </tr class="table-bordered"  style="border:2px solid blue;">
      
      <tr><td colspan="3"><font face="Monotype Corsiva" size="5" color="red"> * Fees Will not be Refundable</font></td></tr>
      </table>
    </div>
    <div  class="6th"  style=" background-color: white; border:2px solid blue; margin-bottom: 5px;">
    <table class="table">
    <img class="img1" src="admin/sign.jpg" style="position:absolute; z-index:1; margin-left:500px; height: 90px; width: auto; float:right;">
     <p><i><u style="margin-left: 80px; margin-top: 30px;"><?php echo $row['username']; ?></u></i><i><b style="float: right; z-index:-100; margin-right: 40px;"> Signature of Centre Director</b></i></p>
    
     <p align="left" style="margin-left: 50px;"> Signature of Student<i><b style="position:relative; float: right; margin-right: 120px;">(with seal)</b></i></p>
     
    </table>
 </div>
</div>


    </div>

</div>
 
</div>
</div>
</div>
 
  </html>
  