<?php
session_start();
if(isset($_SESSION['user'])){
	echo '<html>
	<head>
		<link rel="stylesheet" href="Des.css">
		<title>Add User Form</title>
	</head>
	<body bgcolor="cyan">
	<center>
		<h2>New User Registration</h2></center>
		<center>
	<form action="userregdata.php" method="POST">
	<table>
	<tr>
	<td>
	<label>Name:-</label>
	</td>
	<td>
	<input type="text" name="name">
	</td>
	</tr>

	<tr>
	<td>
	<label>Date of Joining:-</label>
	</td>
	<td>
	<input type="date" name="dt">
	</td>
	</tr>
	<tr>
	<td>
	<label>Address:-</label>
	</td>
	<td>
	<input type="text" name="address">
	</td>
	</tr>
	<tr><td><button type="submit" name="submit" value="Submit">Submit</button></td>

	</tr></table></form>';

}
else {
	echo"<script>location.href='choose.php'</script>";
}
?>

<?php
		echo '<a href="adminmain.php"><h2 align = "center">Back</h2></a>';
		?>

</center></body></html>
