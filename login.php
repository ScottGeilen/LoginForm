<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		#welcome {
			width: 250px;
		}
		h1 {
			color: white;
			background-color: #212121;
			border-bottom-right-radius: 25px;
			border-bottom-left-radius: 25px;
		}
		body {
			background-color: #d9d9d9;
		}
	</style>
</head>
<body>
	<div id="welcome">Welcome!</div>
	<?php
	mysqli_connect("localhost", "root", "", "login");
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = mysql_query("SELECT password FROM users WHERE username='$username'");
		if ($row=mysql_fetch_array($sql)) {
			if ($password==$row['password']) {
				header("location:index.html");
				exit();
			} else
				echo "Invalid password";
		} else
			echo "Invalid username";
	}
	// echo "<h1>Welcome, " . $username . "!</h1>";
	// echo "Thank you for entering this super duper secret website which can only be entered through a password so simple that it could be the first guess of literally anyone.";
	// echo "<br><br>Enjoy your stay! :D";
	

	?>
</body>
</html>