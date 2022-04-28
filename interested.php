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

		<h1 style="text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Interested clients in my properties</h1>
		<hr style="border: 1px solid #333333; box-shadow: 0px 0px 1px 0px #333333">

		<?php
			$user = $_SESSION["user"];
			$sql = "select * from buyers where prop_user = '$user'";
			$result = mysqli_query($connectivity, $sql);
			$row = mysqli_fetch_assoc($result);
		?>

	</div>

	<?php include('pageFooter.php'); ?>

</body>

</html>