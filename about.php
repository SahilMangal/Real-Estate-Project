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
		
		<div style="float: left; border: 2px solid #B3E5FC; padding: 10px; border-radius: 10px; box-shadow: 0px 0px 10px 1px #B3E5FC; width: 30%">
			<img src="Images/c1.jpg" style="width: 100%; border-radius: 10px;">
		</div>

		<div style="float: left; padding-left: 40px; width: 70%">
			<h1 style="text-shadow: 0px 0px 1px #333333">Welcome note</h1><br>
			<p style="text-align: justify; font-size: 16px;">
				Welcome to our website. Welcome Real Estate is a locally owned real estate company. we are dedicated to providing personal service and helping our clients have a satisfying and successful real estate transaction.
				<br><br>
				We have over 50 Years of experience of finding homes that will best meet your needs and dreams, whether it be horse country, country club community, historic homes or a mansion on a hilltop.
				<br><br>
				If you're thinking of selling your home or land, we will assure you that it will receive world wide exposure and "home town" service.
			</p>
		</div>
		


	</div>

	<!--Footer start here-->
	<?php include("pageFooter.php"); ?>
	<!--Footer end here-->



</body>
</html>