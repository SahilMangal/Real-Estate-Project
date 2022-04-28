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

		


		<div style="float: left; width: 50%; font-size: 20px;">
			<h1>Contact us</h1><br>
			<span class="fa fa-phone"> </span> +545 182 542<br>
			<span class="fa fa-phone"> </span> +544 183 543<br>
			<span class="fa fa-envelope"> </span> info@realestate.com<br>
			<span class="fa fa-map"> </span> Toronto - City in Canada
		</div>
		<div style="float: left; width: 50%">
			<h1>Location Guide</h1><br>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d369481.4634970744!2d-79.60104210039482!3d43.65703212190681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C+ON%2C+Canada!5e0!3m2!1sen!2sin!4v1521979391963" width="100%" height="320" frameborder="0" style="border:0; border: 2px solid #333333; box-shadow: 0px 0px 5px 1px #333333" allowfullscreen></iframe>
		</div>


	</div>

	<?php include("pageFooter.php");?>
</body>
</html>