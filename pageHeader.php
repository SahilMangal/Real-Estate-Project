<?php
  if (!isset($_SESSION)) {
    session_start();
  }

?>

<!--Header start here-->
<div class="container" style="background-color: #03A9F4; padding: 20px; margin-top: 10px; border: 2px solid #333333; border-top-left-radius: 20px; border-top-right-radius: 20px;" align="center">

		<a href="index.php"><img src="logo.png" style="width: 400px;"></a>
		<img src="hello.gif" style="float: right; width: 100px;">

</div>
<!--Header End here-->


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
    						<li><a href="index.php">Login</a></li>
    					</ul>
  					</li>
            <?php } else {?>
            <li>
              <a href="sell.php">Sell Properties</a>
            </li>
            <li>
              <a href="myProp.php">My Properties</a>
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
        <?php if (!isset($_SESSION["user"])) { ?>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">Admin Login</a>
          </li>
        </ul>
        <?php } ?>
				</div>
		</nav>
</div>
<!--navigation End here-->