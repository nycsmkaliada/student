<?php
include_once('connfig.php');
include_once('header.php');
$i = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Results</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<table class="table table-borderless">
					<div class="card-header">
						<center>Student Results </center>
							<tr class="table-warning"><td>Sl No.</td>
							<td>Student Name</td>
							<td>Right Question</td>
							<td>Wrong Question</td>
							<td>Not Attempt</td>
							<td>Semester</td>
							</tr>
						</div>
					<div class="card-body">

							<?php $qu = "SELECT * FROM result";
							$ru = mysqli_query($conn,$qu);
							while ($rows = mysqli_fetch_assoc($ru)) {
							?>
							<tr class="table-success"><td><?php echo $i++; ?></td>
							<td><?php echo $rows['user']; ?></td>
							<td><?php echo $rows['rightis']; ?></td>
							<td><?php echo $rows['worng']; ?></td>
							<td><?php echo $rows['no_ans']; ?></td>
							<td><?php echo $rows['sem']; ?></td></tr>
						<?php } ?>
							
						</div>
						</table>
					</div>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>