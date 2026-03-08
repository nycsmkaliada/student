<?php
include_once('connfig.php');
include_once('header.php');
$a =  1;

?>
<!DOCTYPE html>
<html>
<head>
	<title>1st Sem question</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	var t = 20 * 60;
	function timeout(){
		var date = new Date();
		var m = Math.floor(t/60);
		var s = (t%60);
		if(t<=0){
			clearInterval(tm);
			document.getElementById("form").submit();
		}
		else{
			if(m<10)
			{
				m = "0"+m;
			}
			if(s<10){
				s="0"+s;
			}
			document.getElementById("time").innerHTML = "Time:" +m+":"+s;
		}
		t--;
		var tm = setTimeout(function(){timeout()},1000);
	}
</script>
<style type="text/css">
	body{
		background-color: lightblue;
	}
.head{
			margin-top: 10px;
			background-color: blue;
			color:white;
			font-size: 40px;
			text-align: center;
		}
	.title_div{
		padding: 10px;
		background-color: white;
		box-shadow: 5px 5px 5px 2px; 
		margin-top: 10px;
		font-size: 30px;
		color: blue;
		font-family: Times new roman;
		
	}
	
	.submit{
		margin-top: 40px;
		margin-bottom: 150px;
		border-radius: 50px;
		transition: transform 2s;
		
	}
	.submit:hover{
		box-shadow: 10px 10px 10px 5px green;
		transform: scale(1.15);
		transition: 2s;
	}
	.card{
		margin:15px;
		font-size: 25px;
		box-shadow: 5px 5px 5px 2px black;
	}
	.card:hover{
		box-shadow: 5px 5px 5px 2px green;
	}
		.card input[value]:hover{
		box-shadow:  5px 5px 5px green;
	}
	
</style>
</head>
<body><span id="time" style="margin-left: -20px; padding: 10px; background-color: blue; color: white; position: fixed;font-size: 25px; font-family: algerian; "> </span>
	<body onload="timeout()">
<div class="container-fluid">
	<div class="head">
				WELCOME <?php if (isset($_SESSION['username'])){
					echo $_SESSION['username'];
				} ?>
				<a href="logout.php" style="float: right; color: white; text-decoration: none;padding-right: 10px;">Logout</a>
			
			</div>
			
		<div class="col-sm-10 offset-1">
			
				<?php
				$question = "SELECT * FROM `add_ques2`order by rand() limit 25";
				$query = mysqli_query($conn,$question);
				while ($rows = mysqli_fetch_assoc($query)) {
				
				?>
				<form id="form" action="result.php" method="post">
				<div class="card">
				<div class="card-header bg-success text-white"><?php echo $a++; echo ". &nbsp; &nbsp;"; echo $rows['ques'];  ?></div>
				<div class="card-body">
				<div class="child"><input class="form-check-input" type="radio" name="<?php echo $rows['id']; ?>" value="0"> <?php echo $rows['opt1']; ?></div>
				<div class="child"><input class="form-check-input" type="radio" name="<?php echo $rows['id']; ?>" value="1"> <?php echo $rows['opt2']; ?></div>
				<div class="child"><input class="form-check-input" type="radio" name="<?php echo $rows['id']; ?>" value="2"> <?php echo $rows['opt3']; ?></div>
				<div class="child"><input class="form-check-input" type="radio" name="<?php echo $rows['id']; ?>" value="3"> <?php echo $rows['opt4']; ?></div>
		
				<input type="radio" checked="checked" name="<?php echo $rows['id']; ?>" value="No_Attempt" style = "display: none;">
			</div></div>
			<?php } ?>
			<div class="submit"><input class="btn btn-success btn-lg btn-block form-control" type="submit" name="submit" value="Submit"></div>
		</form>
			</div>
	</div>
</div>
</body>
</html>