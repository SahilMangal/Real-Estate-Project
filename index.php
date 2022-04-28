<?php
	include('connectivity.php');
?>

<?php 
	if (!isset($_SESSION)) {
		session_start();
	}
?>

<?php

	if (isset($_POST["login"])) {
		
		$email = $_POST["txtE"];
		$pwd = $_POST["txtP"];

		if($email == 'admin@gmail.com' && $pwd == 'admin'){
			$_SESSION["admin"] = "admin@gmail.com";
		}
		$query = "select * from registration where Email = '$email' and Password ='$pwd'"; 
        $implementQuery = mysqli_query($connectivity, $query);

        if (mysqli_fetch_array($implementQuery)) {
            
            $_SESSION["user"] = $email;

            $message = 'Login Successful';
            echo "<SCRIPT type='text/javascript'> 
                alert('$message');
                window.location.replace(\"index.php\");
                </SCRIPT>";
            
        } 
        else {
            $message = 'You have to register first';

            echo "<SCRIPT type='text/javascript'> 
                alert('$message');
                window.location.replace(\"reg.php\");
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
			transform: scale(1.5);
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

<div class="container-fluid" style="background-color: #B3E5FC">
	

	<!--Header Start here-->
	<div class="container" style="background-color: #03A9F4; padding: 20px; margin-top: 10px; border: 2px solid #333333; border-top-left-radius: 20px; border-top-right-radius: 20px;" align="center">

		<a href="index.php"><img src="logo.png" style="width: 400px;"></a>
		<img src="hello.gif" style="float: right; width: 100px;">

	</div>
	<!--Header End here-->


	<!--Slider Start here-->
	<div class="container" style="margin-top: 5px; background-color: #03A9F4; padding-top: 10px; padding-bottom: 10px; border: 2px solid #333333; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">

			    <div class="item active">
			    	<img src="Images/9.jpg" alt="Los Angeles" style="width:100%; height: 220px; border-radius: 10px">
			    </div>

			    <div class="item">
			    	<img src="Images/7.jpg" alt="Chicago" style="width:100%; height: 220px; border-radius: 10px;">
			    </div>
			    
			    <div class="item">
			    	<img src="Images/6.png" alt="New York" style="width:100%; height: 220px; border-radius: 10px;">
			    </div>

			    <div class="item">
			    	<img src="Images/5.jpg" alt="New York" style="width:100%; height: 220px; border-radius: 10px;">
			    </div>

			    <div class="item">
			    	<img src="Images/c5.jpg" alt="New York" style="width:100%; height: 220px; border-radius: 10px;">
			    </div>

			</div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
			
		</div>
	</div>
	<!--Slider End here-->


	<!--Navigation start here-->
	<div class="container" style="padding-top: 10px;">
			<nav class="navbar" style="background-color: #E1F5FE; border: 1px solid #333333; border-radius: 5px;">
  				<div class="container-fluid hoverLink">
    				<ul class="nav navbar-nav">
      					<li><a href="index.php">
      						<?php if (!isset($_SESSION["user"])) { ?>
      							Home
      						<?php } else { ?>
      							Dashboard
      						<?php } ?>
      					</a></li>
      					<li><a href="about.php">About</a></li>
      					<li class="dropdown">
        					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
        						Properties<span class="caret"></span>
        					</a>
        					<ul class="dropdown-menu">
        						<li>
        							<span style="padding-left: 10px; font-size: 13px; text-decoration: underline;">Residential</span>
        						</li>
        						<li><a href="properties.php?type=Houses">Houses</a></li>
        						<li><a href="properties.php?type=Condos">Condos</a></li>
        						<li><a href="properties.php?type=ResidentialLands">Land</a></li>
        						<li>
        							<span style="padding-left: 10px; font-size: 13px; text-decoration: underline;">Commercial</span>
        						</li>
        						<li><a href="properties.php?type=Space">Space</a></li>
        						<li><a href="properties.php?type=Buildings">Buildings</a></li>
        						<li><a href="properties.php?type=CommercialLands">Land</a></li>
        					</ul>
      					</li>
      					
      					<li><a href="contact.php">Contact us</a></li>
      					<?php if(!isset($_SESSION["admin"])) { ?>
  					 		<li><a href="feedback.php">Feedback</a></li>
            			<?php } ?>

      					<?php if (!isset($_SESSION["user"])) { ?>
      					<li class="dropdown">
        					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
        						Signup / Login<span class="caret"></span>
        					</a>
        					<ul class="dropdown-menu">
        						<li><a href="reg.php">Register with us</a></li>
        						<li><a href="#loginDiv">Login</a></li>
        					</ul>
      					</li>
      					<?php } else { ?>
      					<li>
      						<a href="sell.php">Sell Property</a>
      					</li>
      					<li>
      						<a href="myProp.php">My properties</a>
      					</li>
      					<li>
      						<a href="profile.php">Profile</a>
      					</li>
      					<li>
      						<a href="logout.php">Logout</a>
      					</li>
      					<?php } ?>
      					<?php if (isset($_SESSION["admin"])) { ?>
      					<li>
      						<a href="AllUsers.php">Reg. Users</a>
      					</li>
      					<li>
      						<a href="allFeedback.php">Users feedback</a>
      					</li>
      					<li>
      						<a href="AllProperty.php">All prop.</a>
      					</li>
      					<?php } ?>
      				</ul>
      					
      					
  				</div>
			</nav>
		</div>
	<!--navigation End here-->

	<!--body start here-->
	<div class="container" style="background-color: #03A9F4; padding: 10px; border: 2px solid #333333; border-top-left-radius: 20px; border-top-right-radius: 20px;">

		<!--left BODY Login Start here-->
		<div style="float: left; width: 20%">
			<?php if (!isset($_SESSION["user"])) { ?>
			<div style="width: 100%; background-color: #B3E5FC; border: 1px solid #333333; border-radius: 10px; padding: 15px; box-shadow: 0px 0px 5px 0px #333333" id="loginDiv">
				<h1 style="text-shadow: 0px 0px 1px #333333">Login Here!</h1><br>
				<form method="post">
					<div class="form-group">
						<input type="email" name="txtE" class="form-control" id="usr" placeholder="Enter email ID" required>
					</div>
					<div class="form-group">
						<input type="password" name="txtP" class="form-control" id="pwd" placeholder="Enter Password" required>
					</div><br>
					<input type="submit" name="login" value="Login" class="btn btn-primary" style="width: 100%" />
				</form>
			</div>
			<?php } else { ?>

				<div style="width: 100%; background-color: #B3E5FC; border: 1px solid #333333; border-radius: 10px; padding: 15px; box-shadow: 0px 0px 5px 0px #333333">
					<h1 style="text-shadow: 0px 0px 1px #333333">Welcome!!</h1><br>

					<?php
						$e = $_SESSION["user"];
						$sql = "select * from registration where Email = '$e'";
						$result = mysqli_query($connectivity, $sql);
						$row = mysqli_fetch_assoc($result);

						$arr = explode(' ',trim($row["Name"]));
					
						echo "<h4> <span style='background-color: #03A9F4; padding: 10px 5px; text-align: center; border-radius: 100%; font-size: 20px;'>". $row["Name"][0]. $arr[1][0] ."</span> ". $row['Name'] . "</h4><br><br>";
						
						echo "<h4> Account no: ". $row["Acc_no"] ." </h4>";
						echo "<h4 style='text-shadow: 0px 0px .5px #333333'> Wallet: $". $row["Money"] ." /-</h4>";
					?>

				</div>



			<?php } ?>
			<br>
			<div style="width: 100%; background-color: #B3E5FC; border: 1px solid #333333; border-radius: 10px; padding: 15px; box-shadow: 0px 0px 5px 0px #333333">
				<h2 style="text-shadow: 0px 0px 1px #333333;">Quick Links</h2><br>
				<span style=" font-size: 16px; text-decoration: underline;">Residential</span><br><br>
				<a href="properties.php?type=Houses">Houses</a> |
				<a href="properties.php?type=Condos">Condos</a> |
				<a href="properties.php?type=ResidentialLands">Land</a><br><br><br>

				<span style=" font-size: 16px; text-decoration: underline;">Commercial</span><br><br>
				<a href="properties.php?type=Space">Space</a> |
				<a href="properties.php?type=Buildings">Buildings</a> |
				<a href="properties.php?type=CommercialLands">Land</a>
			</div>
		</div>
		<!--left BODY Login End here-->

		<div class="prop" style="float: right; width: 79%; background-color: #B3E5FC; border: 1px solid #333333; padding: 15px; border-radius: 20px;">
			<h1 style="text-shadow: 0px 0px 1px #333333; text-align: right;">
				Properties
			</h1><hr style="border: 1px solid #03A9F4; box-shadow: 0px 0px 1px 0px #333333"><br><br>


			<?php
              	$sql = "select * from properties order by prop_id DESC LIMIT 7";
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
					<a href="single.php?id=<?php echo $row['prop_id'];?>&Title=<?php echo $row['Title']; ?>">
						<button class="btn btn-info" style="padding: 5px 15px;">Detail</button>
					</a>
				</div>
			</div>
			<!--Properties items (Single Item end here)-->

			<?php } ?>



			

			
		</div>

	</div>
	<!--Body end here-->


	<!--Footer start here-->
	<?php include("pageFooter.php"); ?>
	<!--Footer end here-->

</div>




<!--right script start here-->
<script language=JavaScript>
	function clickIE4(){
		if (event.button==2){
			return false;
		}
	}

	function clickNS4(e){
		if (document.layers||document.getElementById&&!document.all){
			if (e.which==2||e.which==3){
				return false;
			}
		}
	}

	if (document.layers){
		document.captureEvents(Event.MOUSEDOWN);
		document.onmousedown=clickNS4;
	} 
	else if (document.all&&!document.getElementById){
		document.onmousedown=clickIE4;
	}
	document.oncontextmenu=new Function("return false")
</script>
<!--right script end here-->

</body>
</html>