<?php
include_once('connfig.php');
include_once('header.php');
$rand = rand(000000,999999);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bill</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header  bg-warning text-white"><h2><center>Bill Generate</center></h2></div>
					<div class="card-body">
						<form action="create_bill_code.php" method="post">
						<table class="table table-borderless">
							<tr><td>Serial No.</td><td><input class="form-control" type="text" name="serial" value="<?php echo $rand;?>" readonly="readonly"></td></tr>
							<tr><td>Name</td><td><input class="form-control" type="text" name="name" required = 'required'></td></tr>
							<tr><td>Father's Name</td><td><input  class="form-control" type="text" name="f_name" required = 'required'></td></tr>
							<tr><td>Date</td><td><input  class="form-control" type="date" name="date" required = 'required'></td></tr>
							<tr><td>Course</td><td><input  class="form-control" type="text" name="course" required = 'required'></td></tr>
							<tr><td>Registration Id</td><td><input  class="form-control" type="text" name="password" required = 'required'></td></tr>
							<tr><td>Addmission Fees</td><td><input class="form-control" id ="add" type="number" name="addmission_fees"></td></tr>
							<tr><td>Registration Fees</td><td><input  class="form-control" id ="reg" type="number" name="registration_fees"></td></tr>
							<tr><td>Tuition Fees</td><td><input  class="form-control" id="tui" type="number" name="tuituion_fees"></td></tr>
							<tr><td>Late Fees</td><td><input  class="form-control" id="late" type="number" name="late_fees"></td></tr>

							<tr><td>Maintenence Fees</td><td><input  class="form-control" id="man" type="number" name="maintain_fees"></td></tr>
							<tr><td>Examination Fees</td><td><input  class="form-control" id="exam" type="number" name="exam_fees"></td></tr>
							<tr><td>Other Fees</td><td><input  class="form-control" id="other" type="number" name="other_fees"></td></tr>
							<tr><td>Total</td><td><input class="form-control" id="total" type="number" name="total" disabled></td></tr>
							
							<tr align="center"><td colspan="2"><input  class="form-control btn btn-success" type="submit" name="submit" value="Create Bill"></td></tr>
						</table>
					</form>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="card">
					<div class="card-header  bg-warning text-white"><h2><center>Show Bill</center></h2></div>
					<div class="card-body">
						<table class="table table-borderless">
							<tr>
							<th>SL.NO</th>
							<th>NAME</th>
							<th>FATHER'S NAME</th>
							<th>REGISTRATION NUMBER</th>
							<th>SERIAL NO</th>
							<th>VIEW</th>
							<th>EDIT</th>
							<th>DELETE</th>
							</tr>
							<?php
							$i = 1;
							$query = "SELECT * FROM user ORDER BY id DESC";
							$run = mysqli_query($conn,$query);
							while ($rows = mysqli_fetch_array($run)) {
								
							echo "<tr><td>";
							echo $i++;
							echo "</td><td>";
							echo  $rows['username'];
							echo "</td><td>" .$rows['f_name']."</td>";
							echo "<td>";
							echo  $rows['password'];
							echo "</td>";
							echo "</td><td>" .$rows['serial']."</td>";
							echo "<td><a class='btn btn-warning form-control' href='bill_gen.php?viewid=$rows[id]'>View </a></td>";
							echo "<td><a class='btn btn-success form-control' href='edit_bill_gen.php?viewid=$rows[id]'>Edit </a></td>";
							echo "<td><a class='btn btn-danger form-control' href='bill.php?deleteid=$rows[id]'>Delete </a></td></tr>";
							?>
							<?php }
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	

</body>
<script type="text/javascript">
	$(document).ready(function() {
   $("#add,#reg,#tui,#late,#man,#exam,#other").keyup(function(){

   var total =0;
   	var add = Number($("#add").val());
   	var reg = Number($("#reg").val());
   	var tui = Number($("#tui").val());
   	var late = Number($("#late").val());
   	var man = Number($("#man").val());
   	var exam = Number($("#exam").val());
   	var other = Number($("#other").val());
   	var total = add + reg + tui + late + man + exam + other; 
  
   	$("#total").val(total);
   });
});
</script>
</html>