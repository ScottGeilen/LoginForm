<?php include('server.php'); 
	// if user is not logged in, they cannot access this page
	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>User registration system using PHP and MySQL</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="header">
			<h2>Home</h2>
		</div>
		<div class="navbar">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="why.php">Why Arizona?</a></li>
				<li><a href="how.php">How Arizona?</a></li>
				<li><a href="where.php">Where Arizona?</a></li>
				<li><a href="where.php">Where Arizona?</a></li><li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>
			</ul>
		</div>
		<div class="content">
			<?php if (isset($_SESSION['success'])): ?>
				<div class="error success">
					<h3>
						<?php
							echo $_SESSION['success'];
							unset($_SESSION['success']);
						?>
					</h3>
				</div>
			<?php endif ?>
			<div class="content2">
				<?php if (isset($_SESSION["username"])): ?>
					<p align="center">Welcome <strong><?php echo $_SESSION['username']; ?>!</strong></p>
				<?php endif ?>
				<h2 align="center">Want to know why I want to move to Arizona? You came to the right place!</h2>
				<h3 align="center">Why did you have to register and login? Good question!</h3>
				<p align="center">So I could learn how to do something like that. That's literally it. Now, let's learn about Arizona!</p>
				<div>
					<a href="https://ibb.co/hyy9VSD"><img src="https://i.ibb.co/jTTfDSg/grandcanyon.jpg" alt="grandcanyon" border="0" align="center"></a>
					<p>Nearly two billion years of Earth's geological history have been exposed as the Colorado River and its tributaries cut their channels through layer after layer of rock while the Colorado Plateau was uplifted. While some aspects about the history of incision of the canyon are debated by geologists several recent studies support the hypothesis that the Colorado River established its course through the area about 5 to 6 million years ago. Since that time, the Colorado River has driven the down-cutting of the tributaries and retreat of the cliffs, simultaneously deepening and widening the canyon.

					<br><br>For thousands of years, the area has been continuously inhabited by Native Americans, who built settlements within the canyon and its many caves. The Pueblo people considered the Grand Canyon a holy site, and made pilgrimages to it. The first European known to have viewed the Grand Canyon was García López de Cárdenas from Spain, who arrived in 1540.</p>
				</div>
			</div>
		</div> 
	</body>
</html>