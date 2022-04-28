<?php
	include("connectivity.php");
?>

<?php
	if (!isset($_SESSION)) {
		session_start();
	}
?>

<?php
	if (isset($_POST['changePwd'])) {
		$cur = $_POST["txtCur"];
		$new = $_POST["txtNew"];

		$e = $_SESSION["user"];
		$sql = "select * from registration where Email = '$e'";
		$result = mysqli_query($connectivity, $sql);
		$row = mysqli_fetch_assoc($result);

		if ($row["Password"] == $cur) {

			$q = "UPDATE registration SET Password='".$new."' WHERE Email= '".$e. "'";
			mysqli_query($connectivity, $q);
			$message = 'Password Changed';
            echo "<SCRIPT type='text/javascript'> 
                alert('$message');
                window.location.replace(\"profile.php\");
                </SCRIPT>";

		} else {
			$message = 'Password not matched';
            echo "<SCRIPT type='text/javascript'> 
                alert('$message');
                window.location.replace(\"profile.php\");
                </SCRIPT>";
		}
	}

	if (isset($_POST['update'])) {
		$name = $_POST["txtName"];
		$email = $_POST["txtEmail"];
		$add = $_POST["txtAddress"];
		$city = $_POST["txtCity"];
		$state = $_POST["txtState"];
		$mob = $_POST["txtMobile"];

		$e = $_SESSION["user"];
		$q = "UPDATE registration SET Name='".$name."', Email='".$email."', Address='".$add."', City='".$city."', State='".$state."', Mobile='".$mob."' WHERE Email= '".$e. "'";
		mysqli_query($connectivity, $q);
		$message = 'Information Update';
        echo "<SCRIPT type='text/javascript'> 
            alert('$message');
            window.location.replace(\"profile.php\");
            </SCRIPT>";
	}

	if (isset($_POST["MoneyAdd"])) {
		$pwd = $_POST["txtPwd"];
		$mon = $_POST["txtMoney"];
		$acc = $_POST["txtA"];

		$e = $_SESSION["user"];
		$sql = "select * from registration where Email = '$e'";
		$result = mysqli_query($connectivity, $sql);
		$row = mysqli_fetch_assoc($result);

		if ($row["Password"] == $pwd && $row["Acc_no"] == $acc) {
			$total = $row["Money"] + $mon;
			$q = "UPDATE registration SET Money='".$total."' WHERE Email= '".$e. "'";
			mysqli_query($connectivity, $q);
			$message = 'Money Added';
	        echo "<SCRIPT type='text/javascript'> 
	            alert('$message');
	            window.location.replace(\"profile.php\");
	            </SCRIPT>";

		} else {
			$message = 'Incorrect Information';
        	echo "<SCRIPT type='text/javascript'> 
            	alert('$message'); window.location.replace(\"profile.php\");
            </SCRIPT>";
		}

	}

	if (isset($_POST['deleteAcc'])) {
		$pwd = $_POST["txtpa"];

		$e = $_SESSION["user"];
		$sql = "select * from registration where Email = '$e'";
		$result = mysqli_query($connectivity, $sql);
		$row = mysqli_fetch_assoc($result);

		if ($row["Password"] == $pwd) {
			$q = "Delete from registration where Email = '$e'";
			mysqli_query($connectivity, $q);
			include("logout.php");
		} else {
			$message = 'Please enter correct password';
        	echo "<SCRIPT type='text/javascript'> 
            	alert('$message'); window.location.replace(\"profile.php\");
            </SCRIPT>";
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

		<h1>My Profile</h1><br>

		<?php
			$e = $_SESSION["user"];
			$sql = "select * from registration where Email = '$e'";
			$result = mysqli_query($connectivity, $sql);
			$row = mysqli_fetch_assoc($result);
		?>

		<div style="background-color: #B3E5FC; padding: 15px; float: left; width: 50%; border: 1px dashed #333333; border-radius: 15px;">

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Full Name</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["Name"]; ?></span><br><br>

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Email ID</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["Email"]; ?></span><br><br>

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Address</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["Address"]; ?></span><br><br>

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">City</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["City"]; ?></span><br><br>

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">State</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["State"]; ?></span><br><br>

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Mobile no.</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["Mobile"]; ?></span><br><br>

		</div>

		<div style="float: left; width: 40%; background-color: #B3E5FC; border: 1px dashed #333333; border-radius: 10px; margin-left: 10px;">
			<img src="<?php echo $row['Image'];?>" style="width: 100%; height: 400px; border-radius: 10px;">
		</div>
		<div style="float: left; width: 40%; background-color: #B3E5FC; border: 1px dashed #333333; border-radius: 10px; margin-left: 10px; margin-top: 10px; padding: 20px 10px;">

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Account no.</span>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["Acc_no"]; ?></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Wallet:</span>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"> $<?php echo $row["Money"]; ?> /-</span>
		</div>

		<div style="float: left; width: 91%; background-color: #B3E5FC; border: 1px dashed #333333; border-radius: 10px; margin-top: 10px; padding: 10px;">

			<button class="btn btn-danger" style="float: right; margin-left: 10px;" data-toggle="modal" data-target="#delete">Delete Account</button>
			<button class="btn btn-info" style="float: right; margin-left: 10px;" data-toggle="modal" data-target="#myModal">Change Password</button>
			
			<button class="btn btn-primary" style="float: right; margin-left: 10px;" data-toggle="modal" data-target="#EditProfile">Edit My profile</button>

			<button class="btn btn-warning" style="float: right;" data-toggle="modal" data-target="#addMoney">Add Money in my wallet</button>

			
		</div>

		<!-- Change Passowrd -->
	  	<div class="modal fade" id="myModal" role="dialog">
	    	<div class="modal-dialog">
	    
		      	<!-- Modal content-->
		      	<div class="modal-content">
		        	<div class="modal-header">
		          		<button type="button" class="close" data-dismiss="modal">&times;</button>
		          		<h3 class="modal-title">Change Password</h3>
		        	</div>
		        	<div class="modal-body">


		          		<form action="#" method="post">
							<div class="form-group">
			    				<input type="password" class="form-control" name="txtCur" placeholder="Current Password" required>
			  				</div>

			  				<div class="form-group">
			    				<input type="password" class="form-control" name="txtNew" placeholder="New Password" required>
			  				</div>
			  				<div style="width: 100%; padding-top: 30px;">
			  					<input type="submit" class="btn btn-primary" name="changePwd" value="Change Password" style="width: 100%">
			  				</div>
			  			</form>
		        	</div>
		        	<div class="modal-footer">
		          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        	</div>
		      	</div>
	    	</div>
	  	</div>
	  	<!--change password end here-->





	  	<!-- Edit Profile start -->
	  	<div class="modal fade" id="EditProfile" role="dialog">
	    	<div class="modal-dialog">
	    
		      	<!-- Modal content-->
		      	<div class="modal-content">
		        	<div class="modal-header">
		          		<button type="button" class="close" data-dismiss="modal">&times;</button>
		          		<h3 class="modal-title">Edit Information</h3>
		        	</div>
		        	<div class="modal-body">


		          		<form action="#" method="post">
							<div class="form-group">
								<label>Full Name</label>
			    				<input type="text" class="form-control" name="txtName" value="<?php echo $row['Name'];?>" required>
			  				</div>

			  				<div class="form-group">
								<label>Email ID</label>
			    				<input type="email" class="form-control" name="txtEmail" value="<?php echo $row['Email'];?>" required>
			  				</div>

			  				<div class="form-group">
								<label>Address</label>
			    				<input type="text" class="form-control" name="txtAddress" value="<?php echo $row['Address'];?>" required>
			  				</div>

			  				<div class="form-group">
								<label>City</label>
			    				<input type="text" class="form-control" name="txtCity" value="<?php echo $row['City'];?>" required>
			  				</div>

			  				<div class="form-group">
								<label>State</label>
			    				<input type="text" class="form-control" name="txtState" value="<?php echo $row['State'];?>" required>
			  				</div>

			  				<div class="form-group">
								<label>Mobile no.</label>
			    				<input type="text" class="form-control" name="txtMobile" value="<?php echo $row['Mobile'];?>" required>
			  				</div>

			  				<div class="form-group">
								<label>Account no.</label>
			    				<input type="text" class="form-control" name="txtMobile" value="<?php echo $row['Acc_no'];?>" disabled>
			  				</div>

			  				<div style="width: 100%; padding-top: 30px;">
			  					<input type="submit" class="btn btn-primary" name="update" value="Update Information" style="width: 100%">
			  				</div>
			  			</form>
		        	</div>
		        	<div class="modal-footer">
		          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        	</div>
		      	</div>
	    	</div>
	  	</div>
	  	<!-- edit profile end here-->




	  	<!-- Add money -->
	  	<div class="modal fade" id="addMoney" role="dialog">
	    	<div class="modal-dialog">
	    
		      	<!-- Modal content-->
		      	<div class="modal-content">
		        	<div class="modal-header">
		          		<button type="button" class="close" data-dismiss="modal">&times;</button>
		          		<h3 class="modal-title">Add Money</h3>
		        	</div>
		        	<div class="modal-body">

		        		<form method="post">

		        			<div class="form-group">
		        				<label>Account no</label>
		        				<input type="text" class="form-control" name="txtA" required>
		        			</div>

		        			<div class="form-group">
		        				<label>Password</label>
		        				<input type="password" class="form-control" name="txtPwd" required>
		        			</div>

		        			<div class="form-group">
		        				<label>Enter amount</label>
		        				<input type="text" class="form-control" name="txtMoney" required>
		        			</div>

		        			<div style="width: 100%; padding-top: 30px;">
		        				<input type="submit" class="btn btn-primary" value="Add Money" name="MoneyAdd" style="width: 100%">
		        			</div>
		        		</form>

		        	</div>
		        	<div class="modal-footer">
		          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        	</div>
		      	</div>
	    	</div>
	  	</div>
	  	<!--Add money end here-->




	  	<!-- Deleted account -->
	  	<div class="modal fade" id="delete" role="dialog">
	    	<div class="modal-dialog">
	    
		      	<!-- Modal content-->
		      	<div class="modal-content">
		        	<div class="modal-header">
		          		<button type="button" class="close" data-dismiss="modal">&times;</button>
		          		<h3 class="modal-title">Delete my account</h3>
		        	</div>
		        	<div class="modal-body">

		        		<form method="post">
		        			<div class="form-group">
		        				<label>Password</label>
		        				<input type="password" class="form-control" name="txtpa" required>
		        			</div>

		        			<div style="width: 100%; padding-top: 30px;">
		        				<input type="submit" class="btn btn-danger" name="deleteAcc" value="Delete my account" style="width: 100%">
		        			</div>
		        		</form>
		          		
		        	</div>
		        	<div class="modal-footer">
		          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        	</div>
		      	</div>
	    	</div>
	  	</div>
	  	<!--deleted account end here-->
		





	</div>

	<?php include("pageFooter.php");?>

</body>
</html>