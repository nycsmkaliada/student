<?php
include_once('connfig.php');
include_once('header.php');
error_reporting(0);
$Right = 0;
$Wrong = 0;
$No_Answer = 0;
if(isset($_SESSION['username'])){
	
}else
{
	header('location:login.php');
}

$question = "SELECT * FROM `add_ques1`";
$query = mysqli_query($conn,$question);
while ($rows = mysqli_fetch_array($query)) {
	if(isset($_POST['submit'])){
		if($rows['ans'] == $_POST[$rows['id']]){
			
			$Right++;
			
		} elseif ($_POST[$rows['id']] == "No_Attempt") {
			
			$No_Answer++;
			
		}else{
			
			 $Wrong++;
					}

}
}
if($Right * 4 > 44){
	$pass = $Right * 4;
} else{
	$Fail = $Right * 4;
}

$sem = "semester 1";
$name = $_SESSION['username'];
$final = "INSERT INTO `result`(`user`, `rightis`, `worng`, `no_ans`,`sem`) VALUES ('$name','$Right','$Wrong','$No_Answer','$sem')";
$mysqli = mysqli_query($conn,$final);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<style type="text/css">
		.card-header{
			font-size: 30px;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
				<div class="card mt-3 shadow">
				<div class="card-header bg-primary text-white" style="color: white;"><h2><center>Hello <?php echo $_SESSION['username']; ?> Your 1st Semester Result <br><?php if($Right * 4 > 44){
            	$pass = $Right * 4;
            	echo "Congratulation ! You Have Passed : &nbsp;" .$pass. "%&nbsp; Marks";
        } else{
                $Fail = $Right * 4;
                echo "Not So Good Better Luck next time <br>You have not a suficiant Score :&nbsp; " .$Fail. "%&nbsp; Marks";
            } ?></center></h2></div>
				
					</div>
				
				</div>

			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="card shadow my-3">
						<div class="card-header text-center">
							Your correct answer is <?php echo $Right ?><br>
							Your Wrong Answer is <?php echo $Wrong; ?>
						</div>
					</div>
							
						</div>						
				<div class="col-sm-6">
					<div class="card shadow my-3">
						<div class="card-header text-center">
						    Total Marks of 100<br>
						  Total Question of 25
						</div>
					</div>
					</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card shadow my-3">
						<div class="card-header text-center">
					Your Missing Answer is <?php echo $No_Answer; ?><br>
					<div class="bg-success text-white">Your Marks is : <?php echo $Right * 4 ; ?></div>
				</div>
			</div>
				</div>
			</div>
				</div>
				
		<a href="logout.php" style="float: right; color: white; text-decoration: none;">Logout</a>
		</div>
	</div>
</div>
</body>
</html>