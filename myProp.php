<?php
	include("connectivity.php");
?>

<?php
	if (!isset($_SESSION)) {
		session_start();
	}
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

		<?php
			$id = $_SESSION["user"];
	        $sql = "select * from properties where User_email = '$id'";
			$result = mysqli_query($connectivity, $sql);
			if (mysqli_fetch_assoc($result)) {
		?>

		<table class="table" width="100%">
			<thead>
				<tr>
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
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$id = $_SESSION["user"];
	              	$sql = "select * from properties where User_email = '$id'";
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
		        	<td>
		        		<button class="btn btn-primary">Edit</button>
		        		<button class="btn btn-danger">Delete</button>
		        	</td>
		        </tr>
		        <?php } ?>
			</tbody>
		</table>

		<?php } else { ?>

			<h1 style="text-shadow: 1px 1px 1px rgba(0,0,0,0.3);" align="center">
				You have zero properties
			</h1>

		<?php } ?>

	</div>

	<?php include("pageFooter.php");?>
</body>
</html>
