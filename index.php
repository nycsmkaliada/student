<?php
include_once('connfig.php');
include_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
	<style type="text/css">
		*{
		margin:0px;
		padding: 0px;
		}
		.col-sm-12 {
			height: auto;
			width: auto;
		
		}
		img{
			height: 22rem;
			width: 22rem;
			align-content: center;
		}
		.card-body{
			
			overflow: scroll;
		}
		ul li{
		
			color: white;
			font-size: 1.25rem;
		}
		ul li ul{
			display: none;
		}
		ul li:hover > ul{
			display: block;
		}
		/*.nav li{*/
		/*	list-style: none;*/
		
		/*	padding: .625rem;*/
		/*	margin:.625rem;*/
		/*	transition: transform 1s;*/
		/*}*/
		/*.nav li a{*/
		/*	list-style: none;*/
		/*	text-decoration: none;*/
		/*	color: white;*/
		/*}*/
		/*.nav li:hover{*/
		/*	background-color: green;*/
		/*	border-radius: 3rem;*/
		/*	transform: rotate(360deg);*/
		/*	transition: 1s;*/
		/*}*/
		
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<div class="container shadow">
	<div class="row">
		<div class="col-sm-12">
			<div class="row" style="margin: .625rem;">
				<div class="col-sm-12">
				<!--	<ul class="nav">-->
				<!--		<li><a href="">Home</a></li>-->
				<!--		<li><a href="login.php">Admin</a></li>-->
				<!--		<li><a href="login.php">Student</a></li>-->
				<!--		<li><a href="">Contact Us</a></li>-->
				<!--		<li><a href="">Admission Form</a></li>-->
				<!--		<li><a href="online_apply.php">Online Admission</a></li>-->
				<!--	</ul>-->
				<!--</div>-->
				
			</div>
			</div>
	<div class="row" style="margin-top: 1rem;">
	    <div class="col-sm-12">
	        <div class = "row">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header bg-success text-white"><center>Computer Courses</center></div>
					<div class="card-body">
						<ul>
						<li class="Basic">3 Months Course (Basic)
						<ul>
						<li>Course:	Basic In Computer Application (BICA)</li>
						Course Code:	YUVA / 98777
						Eligibility:	Kids
						Duration:	3 Months
						Semester 1:	Computer Concepts,Paint, Note Pad, Word Pad,Logo Software & Games
						 
						<li>Course:	Basic In Computer Ms Word (BCMW)</li>
						Course Code:	YUVA / 98778
						Eligibility:	8th
						Duration:	3 Months
						Semester 1:	Computer Concepts,MS Office Word,MS Office Word Project Work
						 
						<li>Course:	Basic In Computer Ms Excel (BCME)</li>
						Course Code:	YUVA / 98779
						Eligibility:	8th
						Duration:	3 Months
						Semester 1:	Computer Concepts,MS Office Excel,MS Office Excel Project Work
						 
						<li>Course:	Basic In Computer Ms Access (BCMA)</li>
						Course Code:	YUVA / 98780
						Eligibility:	8th
						Duration:	3 Months
						Semester 1:	Computer Concepts,MS Office Access,MS Office Access Project Work
						 
						<li>Course:	Basic In Computer Office Management (BCOM)</li>
						Course Code:	YUVA / 98781
						Eligibility:	8th
						Duration:	3 Months
						Semester 1:	Computer Concepts,Concepts of MS Office,Project Work
						 
						<li>Course:	Basic In Computer Internet (BCI)</li>
						Course Code:	- YUVA / 98782
						Eligibility:	8th
						Duration:	3 Months
						Semester 1:	Computer Concepts,Internet Applications,Project Work
						 
						<li>Course:	Basic In Computer Data Entry Operator (BDO)</li>
						Course Code:	- YUVA / 98783
						Eligibility:	8th
						Duration:	3 Months
						Semester 1:	Computer Concepts,Concepts of MS Office (word, excel),Typing in English & Reg Lang
						 
						<li>Course:	Basic In Computer Tally Application (BTA)</li>
						Course Code:	- YUVA / 98784
						Eligibility:	10th
						Duration:	3 Months
						Semester 1:	Computer Concepts,Accounting Concepts,TALLY
						 
						<li>Course:	Basic In Computer Typing (BCT)</li>
						Course Code:	- YUVA / 98785
						Eligibility:	8th
						Duration:	3 Months
						Semester 1:	Computer Concepts,Typing in English,Project Work
						 
						<li>Course:	Basic In Computer Pagemaker (BPM)</li>
						Course Code:	- YUVA / 98786
						Eligibility:	8th
						Duration:	3 Months
						Semester 1:	Computer Concepts,Pagemaker,Project Work
						 
						<li>Course:	Basic In Computer Corel Draw (BCW)</li>
						Course Code:	- YUVA / 98788
						Eligibility:	8th
						Duration:	3 Months
						Semester 1:	Computer Concepts,Corel Draw,Project Work
						 
						<li>Course:	Basic In Computer Auto Cad (BAC)</li>
						Course Code:	- YUVA / 98789
						Eligibility:	10th
						Duration:	3 Months
						Semester 1:	Computer Concepts,Auto Cad,Project Work
					</ul></li>
						<li class="Certificate">6 Months Course (Certificate)
						<ul>
							<li>Course:	Certificate In Computer Information Technology (CIT)</li>
							Course Code:	YUVA / 98790
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,MS Office,Internet Applications,HTML Concept
							 
							<li>Course:	Certificate In Computer Application (CCA)</li>
							Course Code:	YUVA / 98791
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,MS Office,Internet Applications,Project Work
							 
							<li>Course:	Certificate In Computer Financial Accounting (CFA)</li>
							Course Code:	YUVA / 98792
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,Accounting Concepts,TALLY,Internet Applications
							 
							<li>Course:	Certificate In Computer Financial Accounting (CFA)</li>
							Course Code:	YUVA / 98792
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,Accounting Concepts,TALLY,Internet Applications
							 
							<li>Course:	Certificate In Computer Desktop Publishing (CDTP)</li>
							Course Code:	YUVA / 98793
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,Pagemaker,Photoshop,Corel Draw,Internet Applications
							 
							<li>Course:	Certificate In Computer Office Management (COM)</li>
							Course Code:	YUVA / 98794
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,MS Office,Typing in English & Reg Lang,Internet Applications,Project Work
							 
							<li>Course:	Certificate In Computer Hardware & Networking (CHN)</li>
							Course Code:	YUVA / 98795
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,Hardware Concepts,Network Concepts,Internet Applications,Software Installation
							 
							<li>Course:	Certificate In Computer Teacher Training (CCTT)</li>
							Course Code:	YUVA / 98796
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,MS Office,HTML,Internet Applications
							 
							<li>Course:	Certificate In Computer Data Entry Operator (CDO)</li>
							Course Code:	YUVA / 98797
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,MS Office,Internet Applications,Typing in English & Reg Lang
							 
							<li>Course:	Certificate In Computer Tally Application (CITA)</li>
							Course Code:	YUVA / 98798
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,TALLY,Internet Applications
							 
							<li>Course:	Certificate In Computer Auto Cad (CAC)</li>
							Course Code:	YUVA / 98799
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,Auto Cad,Auto Cad Project Work
							 
							<li>Course:	Certificate In Computer Graphic Design (CGD)</li>
							Course Code:	YUVA / 98800
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,3D MAX,Macromedia Flash,Adavance Photoshop
							 
							<li>Course:	Certificate In Computer Multimedia (CCM)</li>
							Course Code:	YUVA / 98801
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,Advance Powerpoint,Adavance Photoshop,Macromedia Flash
							 
							<li>Course:	Certificate In Computer Web Design (CWD)</li>
							Course Code:	YUVA / 98802
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,Adavance Photoshop,Macromedia Flash,3D MAX
							 
							<li>Course:	Certificate In Computer Linux (CIL)</li>
							Course Code:	YUVA / 98803
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,Lenux Environment,Shell Kernel,Software Installation & Removal
							 
							<li>Course:	Certificate In Mobile Maintenance & Repair (CMR)</li>
							Course Code:	YUVA / 98804
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,Hardware & Software
							 
							<li>Course:	Certificate In Spoken English (CSE)</li>
							Course Code:	YUVA / 98805
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,Spoken Concept,Pronunciation Through Audio class
							 
							<li>Course:	Certificate In Spoken English (CSE)</li>
							Course Code:	YUVA / 98805
							Eligibility:	10th
							Duration:	6 Months
							Semester 1:	Computer Concepts,Spoken Concept,Pronunciation Through Audio class
						</ul>
						</li>
						<li class="Diploma">12 Months Course (Diploma)
						<ul>
							<li>Course:	Diploma In Computer Information Technology (DIT)</li>
							Course Code:	YUVA / 98806
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,MS Office,MS Office Project Work,Internet Applications
							Semester 2:	Typing in English & Reg Lang,HTML,Scratch
							 
							<li>Course:	Diploma In Computer Application (DCA)</li>
							Course Code:	YUVA / 98807
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,MS Office,MS Office Project Work,Internet Applications
							Semester 2:	HTML,Visual Basic,Programming In C,Programming In C++,Scratch
							 
							<li>Course:	Diploma In Computer Financial Accounting (DFA)</li>
							Course Code:	YUVA / 98808
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,MS Office,MS Office Project Work,Internet Applications
							Semester 2:	Accounting Concepts,TALLY,TALLY Project Work,Other Accounting Software
							 
							<li>Course:	Diploma In Computer Desktop Publishing (DDTP)</li>
							Course Code:	YUVA / 98809
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,MS Office,MS Office Project Work,Internet Applications
							Semester 2:	Pagemaker,Photoshop,Corel Draw,DTP Project Work
							 
							<li>Course:	Diploma In Computer Office Management (DCOM)</li>
							Course Code:	YUVA / 98810
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,MS Office,MS Office Project Work,Internet Applications
							Semester 2:	Accounting Concepts,TALLY,Other Accounting Software
							 
							<li>Course:	Diploma In Computer Hardware & Networking (DHN)</li>
							Course Code:	YUVA / 98811
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,Hardware Concepts,Computer Hardware
							Semester 2:	Network Concepts,Computer Network,Network Device
							 
							<li>Course:	Diploma In Computer Teacher Training (DCTT)</li>
							Course Code:	YUVA / 98812
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,MS Office,MS Office Project Work,Internet Applications
							Semester 2:	Typing in English & Reg Lang,HTML,TALLY,DTP Concepts
							 
							<li>Course:	Diploma In Computer Data Entry Operator (DDO)</li>
							Course Code:	YUVA / 98813
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,MS Office,MS Office Project Work,Internet Applications
							Semester 2:	Typing in English & Reg Lang,HTML,TALLY,DTP Concepts
							 
							<li>Course:	Diploma In Computer Tally Application (DITA)</li>
							Course Code:	YUVA / 98814
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,MS Office,MS Office Project Work,Internet Applications
							Semester 2:	TALLY,TALLY Project Work
							 
							<li>Course:	Diploma In Computer Auto Cad (DAC)</li>
							Course Code:	YUVA / 98815
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,Auto CAD,3D Designing
							Semester 2:	Mechanical Drawing,Architectural Drawing,Civil Drawing
							 
							<li>Course:	Diploma In Computer Graphic Design (DGD)</li>
							Course Code:	YUVA / 98816
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,Animation Concepts,Designing Software I
							Semester 2:	Designing Software II,Multimedia Concepts,Visual Basic
							 
							<li>Course:	Diploma In Computer Multimedia (DCM)</li>
							Course Code:	YUVA / 98817
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,Designing Software I,Animation Concepts I
							Semester 2:	Designing Software II,Animation Concepts II,Editing And Effects
							 
							<li>Course:	Diploma In Computer Web Design (DWD)</li>
							Course Code:	YUVA / 98818
							Eligibility:	10th
							Duration:	12 Months
							Semester 1:	Computer Concepts,Programming Languages,Designing Software’s Macromedia Flash,HTML ,Dhtml,Xml
							Semester 2:	CSS,Java Scripts J Query,VB script
						</ul>
						</li>
						<li class="Advance">18 Months Course (Advance Diploma)</li>
						</ul>
						
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header bg-success text-white"><center>Registration Process</center></div>
					<div class="card-body">
<p><h4>Registration / Admission Procedure:</h4>

<p align = "justify">For Registration, you have to fill the application / registration form provided by the Authorized Training Institution of National Yuva Computer Saksharata Mission. Students can collect prospectus from any of the authorized Institution and register in any of our National Yuva Computer Saksharata Mission Training Institution. National Yuva Computer Saksharata Mission provides Computer, Vocational & Technical courses. The student has to mention the name of courses and its code while filling the application/registration form. Once the student is registered at the head office only up gradation in the course shall be entertained and not otherwise.</p>

<h4>Required Documents For Admission:</h4>

Photo copy of all the required documents (duly self Attested) are to be submitted with the application/registration form:-
<ul><li>Two Colour Passport size photographs.</li>
<li>Aadhar Card.</li>
<li>Admit card of M.P / equivalent Examination</li>
<li>Mark sheet of Last Examination Passed.</li>
<li>Cast Certificate for ST/SC/ OBC Students.</li>
<li>Certificate of disability if any</li>
<li>Student Can Download Identity Card:</li></ul>

<p align = "justify">After Successful Submission of Registration / Admission form and details of documents, Students will get Registration ID by registered mobile number (Username & Password) for reference. After completion of admission Students can download Identity Card from website using Username & Password.</p>

<h4>Examination:</h4>

Language of Examination: Language of Examination is English or Regional Language.
Mode of Examination: Online examination / Offline examination

<h4>Result:</h4>
<p align="justify">
Result will be declared after receiving the Data from Training Institution by Head office within the 15 Days after the Examination. And will display on Notice board of Training Institution, Mark sheet / Certificate will be dispatched within 30-45 days of declaring the result of the students</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header bg-success text-white"><center>Enquiry</center></div>
					<div class="card-body">
						<form action="" method="post">
							<table class="table table-borderless">
								<tr><td>Name</td><td><input class="form-control" type="text" name="name" placeholder="Please Enter your Enquiry"></td></tr>
								<tr></tr>
								<tr><td>Mobile Number</td><td><input class="form-control" type="number" name="mobile" placeholder="Enter your Contact Number"></td></tr>
								<tr><td>Email id</td> <td><input class="form-control" type="text" name="email" placeholder="Enter your Email id"></td></tr>
								<tr><td>Enquiry</td><td><input class="form-control" type="textarea" name="enquiry" placeholder="Enter your query"></td></tr>
								<tr><td colspan="2"><input class="form-control btn btn-success" type="submit" name="submit" value="Submit"></td></tr>
							</table>
							
						</form>
					</div>
				</div>
			</div>
</div>
		</div>
		</div>
	</div>
					<!-- Carousel -->
<div class="container shadow m-2">
    <div class="row">
        <div class="col-sm-12">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>

  </div>

  <!-- The slideshow/carousel -->
 <center><div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="2.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" alt="New York">
    </div>
    <div class="carousel-item">
      <img src="4.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="5.jpg" alt="New York">
    </div>
  </div>
</center>
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
	</div>
	</div>
    
</div>

        </div>
    </div>

</body>
</html>