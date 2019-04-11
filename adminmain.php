<html>
<head>
	<link rel="stylesheet" href="Des.css">

	<title>Admin Main Page</title>
	</head>
	<center><br><br>

<button onclick="location.href = 'adduser.php';" id="myButton" class="float-left submit-button" >Add Student</button><br><br><br>
<!--<button onclick="location.href = 'DeleteUser.php';" id="myButton" class="float-left submit-button" >Remove Student</button><br><br><br>-->
<button onclick="location.href = 'showuserdata.php';" id="myButton" class="float-left submit-button" >Show Student Data</button>
</center>
	<body bgcolor="cyan">
		<?php
		echo '<a href="choose.php"><h2 align = "center">Logout</h2></a>';
		?>
	</body>
</html>
