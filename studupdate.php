<?php
echo '<link rel="stylesheet" href="Des.css">';
include("config.inc.php");
 $conn = mysqli_connect($server, $username, $password);

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}
 $db = mysqli_select_db($conn, "Daily_Report_Interns");
$name = $_POST['Name'];
$date = $_POST['dt'];
$time= $_POST['CTime'];
$message = $_POST['message'];

$mysql = "INSERT INTO studup(name,dt,CTime,message) VALUES('$name','$date','$time','$message')";

if(mysqli_query($conn,$mysql))
{
	echo "Successfully Stored";
	echo "<script>var timer = setTimeout(function() {
            location.href='studup.php'
        }, 3000);</script>";
}
else
{
	echo mysqli_error($conn);
}
echo '<a href="choose.php"><h2 align = "center">Back</h2></a>';
?>
