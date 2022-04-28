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
		.pro img {
			transition: all 1s;
		}
		.pro img:hover {
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

		<h1><?php echo $_GET["type"];?></h1>
		<hr style="border: 1px solid #333333; box-shadow: 0px 0px 1px 0px #333333"><br><br>


		<?php
			$type = $_GET["type"];
          	$sql = "select * from properties Where Title = '$type'";
          	$array = array();
          	$query = mysqli_query($connectivity,$sql);
          	while ($row = mysqli_fetch_assoc($query)) {
            	$array[] = $row;
          	}
          	$myrow = $array;
          	foreach ($myrow as $row) {
            	//breaking point
        ?>

		<!--Properties items (Single Item)-->
		<div class="pro" style="margin-left: 60px; float: left; margin-bottom: 40px;">
			<div style="position: relative; box-shadow: 0px 0px 5px 1px #333333; border-top-right-radius: 20px; border-bottom-left-radius: 20px; overflow: hidden;">
				<img src="<?php echo $row['Image']; ?>" style="width: 200px; height: 200px; border-top-right-radius: 20px; border-bottom-left-radius: 20px;">
				<div style="position: absolute; top:0px; left: 0px; background-color: #333333; color: white; padding: 10px; filter: opacity(80%);">
					<?php echo $row['Area']; ?>
				</div>
				<div style="position: absolute; bottom:30px; right: 0px; background-color: #333333; color: white; padding: 10px; filter: opacity(90%); padding-right: 20px;">
					$ <?php echo $row['Price'];?>
				</div>
			</div>
			<div align="center" style="padding-top: 5px;">
				<a href="single.php?id=<?php echo $row["prop_id"];?>&Title=<?php echo $row['Title']; ?>">
					<button class="btn btn-info" style="padding: 5px 15px;">Detail</button>
				</a>
			</div>
		</div>
		<!--Properties items (Single Item end here)-->

		<?php } ?>


	</div>

	<?php include("pageFooter.php");?>

</body>
</html>