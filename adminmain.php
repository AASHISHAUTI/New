<html>
<head>
	<link rel="stylesheet" href="Des.css">

	<title>Admin Main Page</title>
	</head>

	<center><br><br>
<?php
session_start();
if(isset($_SESSION['user'])){
	echo '<a href="adduser.php"><button>Add Student</button></a><br><br><br>';
	echo '<!--<a href="DeleteUser.php"><button >Remove Student</button></a><br><br><br>-->';
	echo '<a href="showuserdata.php"><button>Show Student Data</button>';
}
else {
	echo"<script>location.href='adminlogin.php'</script>";
}
?>


</center>
	<body bgcolor="cyan">
		<?php
		echo '<a href="logout.php"><h2 align = "center">Logout</h2></a>';
		?>
	</body>
</html>
