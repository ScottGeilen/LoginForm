<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>User registration system using PHP and MySQL</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="header">
			<h2>Register</h2>
		</div>
		<div class="content">
			<form method="post" action="register.php">
				<!-- display validation errors -->
				<?php include('errors.php'); ?>
				<div class="input-group">
					<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username" >
				</div>
				<div class="input-group">
					<input type="text" name="email" value="<?php echo $email; ?>" placeholder="example@example.com">
				</div>
				<div class="input-group">
					<input type="password" name="password01" placeholder="Password" >
				</div>
				<div class="input-group">
					<input type="password" name="password02" placeholder="Confirm password" >
				</div>
				<div class="input-group">
					<button type="submit" name="register" class="btn">Register</button>
				</div>
				<p>
					Already a member? <a href="login.php">Sign in</a>
				</p>
			</form>
		</div>
	</body>
</html>