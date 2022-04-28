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

		<h1>All Properties in my website</h1><br>
		<table class="table" width="100%">
			<thead>
				<tr>
					<th>S.no.</th>
					<th>Title</th>
					<th>Price</th>
					<th>State</th>
					<th>City</th>
					<th>Address</th>
					<th>Description</th>
					<th>No. of stories</th>
					<th>No. of Bedroom</th>
					<th>No. of Washroom</th>
					<th>No. of Basement</th>
					<th>No. of kitchen</th>
					<th>Area</th>
					<th>Type</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$c = 1;
					$id = $_SESSION["user"];
	              	$sql = "select * from properties";
	              	$array = array();
	              	$query = mysqli_query($connectivity,$sql);
	              	while ($row = mysqli_fetch_assoc($query)) {
	                	$array[] = $row;
	              	}
	              	$myrow = $array;
	              	foreach ($myrow as $row) {
	                	//breaking point
		        ?>
		        <tr>
		        	<td><?php echo $c;?></td>
		        	<td><?php echo $row["Title"]?></td>
		        	<td>$ <?php echo $row["Price"]?></td>
		        	<td><?php echo $row["State"]?></td>
		        	<td><?php echo $row["City"]?></td>
		        	<td><?php echo $row["Address"]?></td>
		        	<td><?php echo $row["Description"]?></td>
		        	<td><?php echo $row["Stories"]?></td>
		        	<td><?php echo $row["Bedroom"]?></td>
		        	<td><?php echo $row["Washroom"]?></td>
		        	<td><?php echo $row["Basement"]?></td>
		        	<td><?php echo $row["Kitchen"]?></td>
		        	<td><?php echo $row["Area"]?></td>
		        	<td><?php echo $row["Type"]?></td>
		        	
		        </tr>
		        <?php $c++; } ?>
			</tbody>
		</table>


	</div>

	<?php include("pageFooter.php"); ?>

</body>