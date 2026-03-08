<?php
include_once('connfig.php');
include_once('header.php');
$a = 1;
if (isset($_SESSION['username'])){
	
} else{
	header('location:login.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM add_ques2 WHERE id = $id";
$run = mysqli_query($conn,$sql);
$rows = mysqli_fetch_assoc($run);

?>
<?php
if(isset($_POST['edit'])){
	$ques = $_POST['ques'];
	$opt1 = $_POST['opt1'];
	$opt2 = $_POST['opt2'];
	$opt3 = $_POST['opt3'];
	$opt4 = $_POST['opt4'];
	$ans = $_POST['ans'];
	$update = "UPDATE add_ques2 SET ques='$ques',opt1='$opt1',opt2='$opt2',opt3='$opt3',opt4='$opt4',ans='$ans' WHERE id='$id'";
	$srun = mysqli_query($conn,$update);
	if($srun){
		header('location:Show_2ndsem.php');
	} else{
		echo "Not updated";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Question</title>
	<style type="text/css">
		tr td{
			font-size: 30px;
		}
		.head{
			margin-top: 10px;
			background-color: blue;
			color:white;
			font-size: 40px;
			text-align: center;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="contioner-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="head">
				WELCOME <?php if (isset($_SESSION['username'])){
					echo $_SESSION['username'];
				} ?>
				<a href="logout.php" style="float: right; color: white; text-decoration: none;">Logout</a>
			</div>
			<div class="row">
				<div class="col-sm-12" >
					<form action="" method="post">
						<center><table class="table table-success table-borderless" >
							<tr class="table-warning" align="center"><td colspan="2"><h2>2nd Sem Question Edit Table</h2></td></tr>
							<tr><td>Question</td><td><input type="hidden" name="id"value="<?php echo $rows['id']; ?>"><input class="form-control" type="text" name="ques" value="<?php echo $rows['ques']; ?>"></td></tr>
							<tr><td>Option 1</td><td><input class="form-control" type="text" name="opt1" value="<?php echo $rows['opt1']; ?>"></td></tr>
							<tr><td>Option 2</td><td><input class="form-control" type="text" name="opt2" value="<?php echo $rows['opt2']; ?>"></td></tr>
							<tr><td>Option 3</td><td><input class="form-control" type="text" name="opt3" value="<?php echo $rows['opt3']; ?>"></td></tr>
							<tr><td>Option 4</td><td><input class="form-control" type="text" name="opt4" value="<?php echo $rows['opt4']; ?>"></td></tr>
							<tr><td>Answer</td><td><input class="form-control" type="text" name="ans" value="<?php echo $rows['ans']; ?>"></td></tr>
							<tr><td colspan="2"></td></tr>
							<tr align="center"><td colspan="2"><input class="btn btn-success form-control" type="submit" name="edit" value="Submit"></td></tr>

						</table></center>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>	
</body>
</html>