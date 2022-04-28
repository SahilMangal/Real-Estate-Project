<?php
	include("connectivity.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Real Estate</title>

	<meta  charset="utf-8">
	<link rel="shortcut icon" href="logo.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>

	<!--style-->
	<style>
		.container li a {
			color: #333333;
		}
		.prop .pro img {
			transition: all 1s;
		}
		.prop .pro img:hover {
			transform: scale(1.2);
		}
		.footer a{
			color: #B3E5FC;
			transition: all 1s;
		}
		.footer a:hover{
			color: black;
			text-decoration: none;
		}
	</style>
	<!--style end here-->

</head>
<body>

	<?php include('pageHeader.php'); ?>

	<div class="container" style="background-color: #03A9F4; padding: 50px; border: 2px solid #333333;">

		<h1>Registered Users</h1><br>
		<table width="100%" class="table">
			<thead>
				<tr>
					<th>S.no.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Mobile no.</th>
				</tr>
			</thead>
			<?php
				$c = 1;
		      	$sql = "select * from registration";
		      	$array = array();
		      	$query = mysqli_query($connectivity,$sql);
		      	while ($row = mysqli_fetch_assoc($query)) {
		        	$array[] = $row;
		      	}
		      	$myrow = $array;
		      	foreach ($myrow as $row) {
		        	//breaking point
		    ?>
		    <tbody>
		    	<tr>
		    		<td><?php echo $c;?></td>
		    		<td><?php echo $row["Name"]?></td>
		    		<td><?php echo $row["Email"]?></td>
		    		<td><?php echo $row["Email"]?>, <?php echo $row["City"]?>, <?php echo $row["State"]?>. </td>
		    		<td><?php echo $row["Mobile"]?></td>
		    	</tr>
		    </tbody>
		    <?php $c++; } ?>
		</table>


	</div>

	<?php include("pageFooter.php"); ?>

</body>