<?php
	include("connectivity.php");
?>

<?php
	if (!isset($_SESSION)) {
		session_start();
	}
?>

<?php
	if (!isset($_SESSION["user"])) {

        $message = 'Your have to login first';
        echo "<SCRIPT type='text/javascript'> 
            alert('$message');
            window.location.replace(\"index.php\");
            </SCRIPT>";
	}
?>


<?php
	if ( isset($_POST["feedback"]) ) {
		$email = $_SESSION["user"];
		$type = $_POST["txtType"];
		$comment = $_POST["txtComment"];

		$query = "insert into feedback(Email, Type, Comment) values('$email', '$type', '$comment')";
		mysqli_query($connectivity, $query);
		$message = 'Thanks for your feedback';
        echo "<SCRIPT type='text/javascript'> alert('$message');
            	window.location.replace(\"feedback.php\");
            	</SCRIPT>";
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

		<div style="float: left; width: 50%">
			<h1>Feedback</h1><br>
			<form action="#" method="post" enctype="multipart/form-data">
				<div class="form-group" style="width: 100%">
					<label for="sel1">Type:</label>
					<select class="form-control" id="sel1" name="txtType">
					    <option value="Suggesion">Suggesion</option>
					    <option value="Compliant">Compliant</option>
					    <option value="Feedback">Feedback</option>
					</select>
				</div>
				<div class="form-group" style="width: 100%">
	  				<label for="comment">Comment:</label>
	  				<textarea class="form-control" rows="5" id="comment" name="txtComment"></textarea>
				</div>
				<div style="padding-top: 30px; width: 100%">
					<input type="submit" name="feedback" class="btn btn-primary" style="width: 100%">
				</div>
			</form>
		</div>
		<div style="float: right; width: 48%; border: 3px solid #333333; box-shadow: 0px 0px 50px 1px rgba(0,0,0,0.3)">
			<img src="Images/c5.jpg" style="width: 100%; padding: 15px; height: 375px; box-shadow: 0px 0px 10px 2px #333333">
		</div>


	</div>

	<?php include("pageFooter.php"); ?>

</body>
</html>