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
		$message = 'You have to login first';
        echo "<SCRIPT type='text/javascript'> 
            alert('$message');
            window.location.replace(\"index.php\");
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

		<?php
			$e = $_SESSION["user"];
			$id = $_GET["id"];
			$sql = "select * from properties where prop_id = '$id'";
			$result = mysqli_query($connectivity, $sql);
			$row = mysqli_fetch_assoc($result);
		?>

		<h1 style="text-shadow: 0px 0px 1px #333333"><?php echo $row["Title"]; ?></h1>
		<hr style="border: 1px solid #333333; box-shadow: 0px 0px 1px 0px #333333"><br>

		<div style="width: 40%; float: left;">
			<div style="background-color: #B3E5FC; padding: 10px; border: 1px dashed #333333; border-radius: 15px;">
				<img src="<?php echo $row["Image"]?>" style="width: 100%; height: 350px; border-radius: 10px">
			</div><br>

			<?php
				if ($_GET["Title"] == 'Houses') {
			?>
			<div style="background-color: #B3E5FC; padding: 10px 30px; border: 1px dashed #333333; border-radius: 15px; padding-bottom: 62px;">

				<span style="font-size: 20px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">
					No. of items
				</span><br><br>

				<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">
					No. of Stories: <?php echo $row["Stories"];?>
				</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">
					No. of Bedrooms: <?php echo $row["Bedroom"]; ?>
				</span><br><br>
				<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">
					No. of Washrooms: <?php echo $row["Washroom"]; ?>
				</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">
					No. of Basements: <?php echo $row["Basement"]; ?>
				</span><br><br>
				<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">
					No. of Kitchens: <?php echo $row["Kitchen"]; ?>
				</span>
			</div>
			<?php } ?>

		</div>

		<div style="float: left; width: 50%; background-color: #B3E5FC; padding: 10px; border: 1px dashed #333333; border-radius: 15px; margin-left: 10px; padding-bottom: 70px;">

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Title</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["Title"]; ?></span><br><br>

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">State</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["State"]; ?></span><br><br>

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">City</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["City"]; ?></span><br><br>

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Address</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["Address"]; ?></span><br><br>

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Description</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["Description"]; ?></span><br><br>

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Area</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"><?php echo $row["Area"]; ?></span><br><br>

			<span style="font-size: 15px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Price</span><br>
			<span style="font-size: 25px; padding-left: 10px; text-shadow: 1px 1px 1px rgba(0,0,0,0.3)"> $ <?php echo $row['Price']; ?></span><br><br>

		</div>

		<div style="float: left; width: 91%; margin-top: 10px; background-color: #B3E5FC; padding: 10px; border: 1px dashed #333333; border-radius: 15px;">
			
			<h3 style="text-shadow: 1px 1px 1px rgba(0,0,0,0.3)">Seller Informarion</h3>
			<br>

			<?php
				$name = $row["User_email"];

				$sql = "select * from registration where Email = '$name'";
				$result = mysqli_query($connectivity, $sql);
				$row2 = mysqli_fetch_assoc($result);
			?>

			<span style="text-shadow: 1px 1px 1px rgba(0,0,0,0.3); font-size: 17px; padding-left: 15px;">
				Name: <?php echo $row2["Name"]; ?>
			</span><br>

			<span style="text-shadow: 1px 1px 1px rgba(0,0,0,0.3); font-size: 17px; padding-left: 15px;">
				Email ID: <?php echo $row2["Email"]; ?>
			</span><br>

			<span style="text-shadow: 1px 1px 1px rgba(0,0,0,0.3); font-size: 17px; padding-left: 15px;">
				Address: <?php echo $row2["Address"]; ?>, <?php echo $row2["City"]?>, <?php echo $row2["State"];?>.
			</span><br>

			<span style="text-shadow: 1px 1px 1px rgba(0,0,0,0.3); font-size: 17px; padding-left: 15px;">
				Mobile no: <?php echo $row2["Mobile"]; ?>
			</span><br>

			<span style="text-shadow: 1px 1px 1px rgba(0,0,0,0.3); font-size: 17px; padding-left: 15px;">
				Account no: <?php echo $row2["Acc_no"]; ?>
			</span><br>


		</div>

		<div style="float: left; width: 91%; margin-top: 10px; background-color: #B3E5FC; padding: 10px; border: 1px dashed #333333; border-radius: 15px;">

			<a href="buy.php?prop_id=<?php echo $row['prop_id'];?>&prop_user=<?php echo $row['User_email']?>&price=<?php echo $row['Price'];?>">
					<button class="btn btn-primary" style="width: 50%">Buy now</button>
				</a>
				<a href="index.php">
					<button class="btn btn-warning" style="width: 48%; padding-left: 10px;">Go back</button>
				</a>

		</div>


	</div>

	<?php include("pageFooter.php"); ?>

</body>
</html>