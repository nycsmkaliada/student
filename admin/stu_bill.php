<?php
include_once('conn.php');
$id = $_GET['id'];
$Username = $_SESSION['Name'];

 $rand = rand(1111111,9999999);

  $sql = "SELECT * FROM `stu_name` where id = '$id'";
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
    <h1 style="background: green; color: white; padding: 5px; font-family: algerian;"><?php if(isset($_SESSION['Name'])){
  echo'Welcome &nbsp;'.$Username."";
}else{
  header('location:index.php');
} ?><a class="btn btn-outline-danger" style="float: right; color: white; z-index: 10;" href="logout.php">Logout</a></h1>
    <div class ="full">
      <div class="om">
   <div class="1st" style=" background-color: white; padding: 5px; border:2px solid blue; margin-top: 5px;">
          <center>
           <div class="woter" style="height: 400px; width: auto; opacity:10%; position: absolute; margin-top: 200px; margin-left:100px;"><img src="logo.jpg" style="height: 600px; width: auto;"></div>
        <font face="Monotype Corsiva" color="#0336a3"> <h1 style="font-size: 30px;"><font face="Monotype Corsiva">NATIONAL YUVA COMPUTER SAKSHARTA MISSSION</h1></font>
        <img class="img1" src="logo.jpg" style="height: 145px; width: auto;  float: left; margin-top: -50px;"><font size="3" face="Monotype Corsiva" color="#0336a3">  An ISO 9001 : 2018 Certified Organization, Unit of Yuva Foundation<img class="img2" src="logo.jpg" style="height: 145px; width: auto;  float: right; margin-top: -50px;"> <br>
<font face="Monotype Corsiva" color="#0336a3" size="3"> Registered Under Indian Trust Act. 1982, Govt. of India
        <font face="Monotype Corsiva" color="#0336a3" size="2"><center>A National Programme of Digital Literacy and Information Technology Education</center> </font>
        <font face="Monotype Corsiva" color="#0336a3" size="2"><p style="padding: 2px; margin-bottom: 5px; border: 1px solid blue; float: left;margin-left:100px; margin-bottom: 5px;">website:- www.nationalyuva.com </p><p style="float: right; padding: 2px; border: 1px solid blue; margin-right:100px;">Email:-nationalyuva@gmail.com </p></font>
          </center><br>
        </div>


      <div class="2nd" style=" background-color: white; border:2px solid blue;">
        <center>
          <p><a class="name" style="padding:0px; margin:0px;"><font face="Monotype Corsiva" color="#0336a3" size="3"><a style="float: left;">Authorized Training Center Name:</a><a style="float: right;"><b> National Yuva Computer Saksharata Mission </b> </a>
            <p><font face="Monotype Corsiva" color="#0336a3" size="3"> Kaliada, Purulia, West Bengal. Phone no:- 8116205505 / 8145567544</font></p>
        </center>
      </div>

<div class="3rd"  style=" background-color: white; border:2px solid blue;">
 <center> <p style="font-size: 20px; background: green;"><b></b>Money Received</b></p></center>
  <a style="float: left;"><h4>Sl No:-<?php echo $rand; ?></h6><font face="Agency FB" color="black" style="letter-spacing: 4px;"></font></a><a style="float: right;">Date: 2022-07-20 </a><br>
</div>

 <div class="4th"  style=" background-color: white; border:2px solid blue;">
   
     <label style="font-size: 20px; font-family: algerian;">Student Name  &nbsp; <?php echo $row['Name']; ?> </label><label style="font-size: 20px; float: right; font-family: algerian;">Fater's Name  &nbsp; <?php echo $row['F_name']; ?> </label><br>
     <label style="font-size: 20px;">Course  &nbsp; DCA </label> <label style="float: right;">ID No:  INDWB<?php echo rand(00000,99999); ?>&nbsp; </label>
   </div>



<div class="5th"  style=" background-color: white;">
  
     <table style="border:2px solid blue; padding: 0px; margin:0px;">
      
        <tr class="table-bordered">
         <th width="10%">Sl.No</th><th width="75%"> Particulars </th><th align="center" width = "15%"> Amount</th>
       </tr><tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center"> (I)</td><td> Admission Fees </td><td align="center"> <?php echo $row['Add_fees']; ?></td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center"> (II)</td><td> Registration Fees </td><td align="center"> </td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center"> (III)</td><td> Tuition Fees </td><td align="center"><?php echo $row['T_fees']; ?></td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center"> (IV)</td><td> Late Fees </td><td align="center">   </td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center"> (V)</td><td> Examination Fees </td><td align="center"> <?php echo $row['Exam']; ?> </td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center"> (VI)</td><td> Maintenence Fees </td><td align="center"> </td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td align="center">(VI)</td><td> Others </td><td align="center"></td>
       </tr>
       <tr class="table-bordered"  style="border:2px solid blue;">
         <td colspan="2" align="center">Total Amount</td><td align="center"><?php echo $row['Total']; ?></td></tr>
       </tr class="table-bordered"  style="border:2px solid blue;">
      
      <tr><td colspan="3"><font face="Monotype Corsiva" size="5" color="red"> *Fee Will be not Refundable</font></td></tr>
      </table>
    </div>
    <div  class="6th"  style=" background-color: white; border:2px solid blue; margin-bottom: 5px;">
    <table class="table">
    <img class="img1" src="sign.jpg" style="position:absolute; z-index:1; margin-left:500px; height: 90px; width: auto; float:right;">
     <p><i><u style="margin-left: 80px;"><?php echo $row['Name']; ?></u></i><i><b style="float: right; z-index:-100; margin-right: 40px;"> Signature of Centre Director</b></i></p>
    
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
  