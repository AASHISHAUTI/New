<?php

session_start();
if(isset($_SESSION['user'])){
	echo '<link rel="stylesheet" href="Des.css">';
	include("config.inc.php");
	$conn = mysqli_connect($server, $username, $password);
	if(!$conn)
	{
		die('Connection failed!'.mysqli_error($conn));
	}
	$db = mysqli_select_db($conn, "Daily_Report_Interns");
	$name = $_POST['name'];
	$date = $_POST['dt'];
	$address = $_POST['address'];

	$mysql = "INSERT INTO userregdata(name,dt,address) VALUES('$name','$date','$address')";

	if(mysqli_query($conn,$mysql))
	{
		echo "Registerd Successfully";
	}
	else
	{
		echo mysqli_error($conn);
	}
	echo '<a href="adminmain.php"><h2 align = "center">Back</h2></a>';
}
else {
	echo"<script>location.href='adminlogin.php'</script>";
}

?>
