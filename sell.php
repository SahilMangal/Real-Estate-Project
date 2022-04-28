<?php
	include("connectivity.php");
?>

<?php
	if (!isset($_SESSION)) {
		session_start();
	}
?>

<?php
	if (isset($_POST['Addpro'])) {
		$t = $_POST["txtTitle"];
		$p = $_POST["txtPrice"];
		$s = $_POST["txtState"];
		$c = $_POST["txtCity"];
		$a = $_POST["txtAddress"];
		$d = $_POST["txtDescription"];
		$st = $_POST["txtStories"];
		$be = $_POST["txtBedrooms"];
		$wa = $_POST["txtWashrooms"];
		$ba = $_POST["txtBasements"];
		$ki = $_POST["txtKitchen"];
		$ar = $_POST["txtArea"];
		$target_path = "Property/";
		$us = $_SESSION["user"];
		$ty = $_POST["txtType"];

		$target_path = $target_path.basename($_FILES['image']['name']);
	    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {

	      $sql = "insert into properties(Title, Price, State, City, Address, Description, Stories, Bedroom, Washroom, Basement, Kitchen, Area, Image, User_email, Type) values('$t', '$p', '$s', '$c', '$a', '$d', '$st', '$be','$wa', '$ba', '$ki','$ar', '$target_path', '$us', '$ty')";
	      mysqli_query($connectivity,$sql);
	      echo '<script type="text/javascript">alert("Property added to selling items");</script>';

	    } else {
	      echo "<script type='text/javascript'>alert('Something went wrong!!!');</script>";
	    }
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

	<script type="text/javascript">
		function fun_type() {
			var selectT = $('#selectType').val();
			if (selectT == 'residential') {
				$('#type').show();
				$('#type2').hide();
				$('#type3').hide();
			} else if (selectT == 'commercial') {
				$('#type').hide();
				$('#type2').show();
				$('#type3').hide();
			} else {
				$('#type').hide();
				$('#type2').hide();
				$('#type3').hide();
			}
		}

		function fun_type2() {
			var selectT2 = $('#selectType2').val();
			if (selectT2 == 'Houses') {
				$('#type3').show();
			} else {
				$('#type3').hide();
			}
		}
	</script>

</head>
<body>

	<?php include('pageHeader.php'); ?>

	<div class="container" style="background-color: #03A9F4; padding: 50px; border: 2px solid #333333;">

		<h1>Add Property</h1><br>

		<div style="width: 60%; float: left;">
			<form action="#" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Property type</label>
					<select class="form-control" id="selectType" name="selectType" onchange="fun_type()">
						<option>Select Type...</option>
						<option value="residential">Residential</option>
						<option value="commercial">Commercial</option>
					</select>
				</div>

				<div class="form-group" style="display: none;" id="type">
					<label>Select Type</label>
					<select class="form-control" name="txtTitle" id="selectType2" onchange="fun_type2()">

						<option disabled selected value>Select category</option>
						<option value="Houses">Houses</option>
						<option value="Condos">Condos</option>
						<option value="ResidentialLands">Residential Lands</option>
					</select>
				</div>


				<div class="form-group" style="display: none;" id="type2">
					<label>Select Type</label>
					<select class="form-control" name="txtTitle">
						<option disabled selected value>Select Category</option>
						<option value="Space">Space</option>
						<option value="Buildings">Buildings</option>
						<option value="CommercialLands">Commercial Lands</option>
					</select>
				</div>

				<div class="form-group" style="display: none;" id="type3">
					
					<label style="width: 100%">No. of items</label>
					<input type="text" class="form-control" name="txtStories" placeholder="No. of Stories" style="width: 50%; float: left;">

					<input type="text" class="form-control" name="txtBedrooms" placeholder="No. of Bedroom" style="width: 48%; float: left; margin-left: 10px;">

					<input type="text" class="form-control" name="txtWashrooms" placeholder="No. of Washrooms" style="width: 50%; float: left; margin-top: 10px;">

					<input type="text" class="form-control" name="txtBasements" placeholder="No. of Basements" style="width: 48%; float: left; margin-left: 10px; margin-top: 10px;">

					<input type="text" class="form-control" name="txtKitchen" placeholder="No. of Kitchens" style="width: 100%; float: left; margin-top: 10px;">
				</div>

				<div class="form-group">
					<label>Price</label>
					<input type="text" class="form-control" name="txtPrice" required>
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" class="form-control" name="txtAddress" required>
				</div>
				<div class="form-group">
					<label>City</label>
					<input type="text" name="txtCity" class="form-control">
				</div>
				<div class="form-group">
					<label>State</label>
					<input type="txt" class="form-control" name="txtState" required>
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea class="form-control" name="txtDescription" required></textarea>
				</div>
				<div class="form-group" style="width: 100%;">
					<label>Area</label>
					<input type="text" class="form-control" name="txtArea" required>
				</div>
				<div class="form-group">
					<label>Select Property Image</label>
					<input type="file" class="form-control" name="image" required>
				</div>
				<div class="form-group">
					<label>Selling / Rent</label>
					<select class="form-control" name="txtType" required>
						<option value="Selling">Selling</option>
						<option value="Rent">Rent</option>
					</select>
				</div>

				<div style="width: 100%; padding-top: 30px;">
					<input type="submit" class="btn btn-primary" style="width: 100%;" name="Addpro" value="Sell now">
				</div>


			</form>
		</div>

	</div>


	<?php include("pageFooter.php"); ?>



</body>
</html>