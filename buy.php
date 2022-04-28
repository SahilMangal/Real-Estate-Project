<?php
	include("connectivity.php");
?>
<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	$user_id = $_SESSION["user"];
	$prop_id = $_GET["prop_id"];
	$prop_user= $_GET["prop_user"];
	$price = $_GET["price"];


	$sql = "select * from registration where Email = '$user_id'";
	$result = mysqli_query($connectivity, $sql);
	$row = mysqli_fetch_assoc($result);

	if ($row["Money"] < $price) {
		$message = 'You have not enough money in your wallet';
        echo "<SCRIPT type='text/javascript'> 
            alert('$message');
            window.location.replace(\"profile.php\");
            </SCRIPT>";
	} else {
		$query = "insert into buyers(user_id, prop_id, prop_user) values ('$user_id' ,'$prop_id', '$prop_user')";
		mysqli_query($connectivity, $query);


		$sql = "select * from registration where Email = '$prop_user'";
		$result = mysqli_query($connectivity, $sql);
		$row2 = mysqli_fetch_assoc($result);

		$rem = $row2["Money"] + $price;
		$q = "UPDATE registration SET Money='".$rem."' WHERE Email= '".$prop_user. "'"; 
		mysqli_query($connectivity, $q);



		$remaining = $row["Money"] - $price;
		$q = "UPDATE registration SET Money='".$remaining."' WHERE Email= '".$user_id. "'"; 
		mysqli_query($connectivity, $q);

		$message = 'Happy Shopping!!';
        echo "<SCRIPT type='text/javascript'> 
            alert('$message');
            window.location.replace(\"index.php\");
            </SCRIPT>";
	}

?>