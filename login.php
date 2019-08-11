<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>User registration system using PHP and MySQL</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="header">
			<h2>Login</h2>
		</div>
		<div class="content">
			<form method="post" action="login.php">
				<!-- display validation errors -->
				<?php include('errors.php'); ?>
				<div class="input-group">
					<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username" >
				</div>
				<div class="input-group">
					<input type="password" name="password" placeholder="Password" >
				</div>
				<div class="input-group">
					<button type="submit" name="login" class="btn">Login</button>
				</div>
				<p>
					Not yet a member? <a href="register.php">Sign up</a>
				</p>
			</form>
		</div>
	</body>
</html>