<?php
	include("connectivity.php");
?>

<?php
	if( isset($_POST["submit"]) ) {
		$name = $_POST["txtName"];
		$email = $_POST["txtEmail"];
		$pwd = $_POST["txtPwd"];
		$conf = $_POST["txtConf"];
		$addres = $_POST["txtAddress"];
		$city = $_POST["txtCity"];
		$state = $_POST["txtState"];
		$target_path = "users/";
		$active = "No";
		$mobile = $_POST["txtMobile"];
		$account = $_POST["txtAccount"];
		$money = "0";
		

		if ($pwd == $conf) {

			$target_path = $target_path.basename($_FILES['image']['name']);
		    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {

		      $sql = "insert into registration(Name, Email, Password, Address, City, State, Image, Active, Mobile, Acc_no, Money) values('$name', '$email', '$pwd', '$addres', '$city', '$state', '$target_path', '$active','$mobile', '$account', '$money')";
		      mysqli_query($connectivity,$sql);
		      echo '<script type="text/javascript">alert("Register Successfully\nPlease Wait your account will be active soon");</script>';

		    } else {
		      echo "<script type='text/javascript'>alert('Something went wrong!!!');</script>";
		    }
		} else {
			echo"<script>alert('password and confirm password should be same')</script>";
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

</head>
<body>

	<?php include('pageHeader.php'); ?>

	<div class="container" style="background-color: #03A9F4; padding: 50px; border: 2px solid #333333;">
	

		<h1>Registration</h1><br>
		<div style="width: 60%; float: left;">
			<form action="#" method="post" enctype="multipart/form-data">
				<div class="form-group" style="width: 50%; float: left;">
			    	<label for="Name">Full Name:</label>
			    	<input type="text" class="form-control" id="Name" name="txtName" required>
			  	</div>
			  	<div class="form-group" style="width: 50%; float: left; padding-left: 10px;">
			    	<label for="email">Email ID:</label>
			    	<input type="email" class="form-control" id="email" name="txtEmail" required>
			  	</div>

			  	<div class="form-group" style="width: 50%; float: left;">
			    	<label for="address">Address:</label>
			    	<input type="text" class="form-control" id="address" name="txtAddress" required>
			  	</div>
			  	<div class="form-group" style="width: 25%; float: left; padding-left: 10px;">
			    	<label for="city">City</label>
			    	<input type="text" class="form-control" id="city" name="txtCity" required>
			  	</div>

			  	<div class="form-group" style="width: 25%; float: left; padding-left: 10px;">
			    	<label for="state">State</label>
			    	<input type="text" class="form-control" id="state" name="txtState" required>
			  	</div>

			  	<div class="form-group" style="width: 50%; float: left;">
			    	<label for="mobile">Mobile no.</label>
			    	<input type="text" class="form-control" id="mobile" name="txtMobile" required>
			  	</div>
			  	<div class="form-group" style="width: 50%; float: left; padding-left: 10px;">
			    	<label for="img">Profile Picture</label>
			    	<input type="file" class="form-control" id="img" name="image" required>
			  	</div>

				<div class="form-group" style="width: 50%; float: left;">
			    	<label for="Account">Account no.</label>
			    	<input type="text" class="form-control" id="Account" name="txtAccount" required>
			  	</div>

			  	<div class="form-group" style="width: 50%; float: left;">
			    	<br><br><br>
			  	</div>


			  	<div class="form-group" style="width: 50%; float: left;">
			    	<label for="pwd">Password</label>
			    	<input type="password" class="form-control" id="pwd" name="txtPwd" required>
			  	</div>
				<div class="form-group" style="width: 50%; float: left; padding-left: 10px;">
			    	<label for="confirm">Confirm Password</label>
			    	<input type="password" class="form-control" id="confirm" name="txtConf" required>
			  	</div>	  	

			  	<div style="width: 100%; float: left; padding-top: 50px;">
			  		<input type="submit" class="btn btn-primary" name="submit" value="submit" style="width: 100%" />	
			  	</div>

			</form>
		</div>

		<div style="float: right; width: 37%; border: 2px solid #333333; border-radius: 10px; padding: 10px; box-shadow: 0px 0px 50px 5px rgba(0,0,0,0.5)">
			<img src="Images/c3.jpg" style="width: 100%; border-radius: 10px; height: 450px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,1)">
		</div>
		


	</div>

	<!--Footer start here-->
	<?php include("pageFooter.php"); ?>
	<!--Footer end here-->



</body>
</html>