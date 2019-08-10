<?php
	session_start();

	$username = "";
	$email = "";
	$errors = array();

	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// if the register button is clicked
	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password01 = mysqli_real_escape_string($db, $_POST['password01']);
		$password02 = mysqli_real_escape_string($db, $_POST['password02']);

		// ensure that frm fields are filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}

		if (empty($email)) {
			array_push($errors, "Email is required");
		}

		if (empty($password01)) {
			array_push($errors, "Password is required");
		}
		if ($password01 != $password02) {
			array_push($errors, "The passwords do not match, bruh lmao");
		}

		// if there are no errors, save user to database
		if (count($errors) == 0) {
			$password = md5($password01); // encrypt password before storing in database
			$sql = "INSERT INTO users (username, email, password)
						VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in!";
			header('location: index.php'); // redirect to home page
		}
	}

	// log in user from login page
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// ensure that frm fields are filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}

		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password); // encrypt password before comparing with that from database
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				// log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in!";
				header('location: index.php'); // redirect to home page
			} else {
				array_push($errors, "Username or password are incorrect");
				header('location: login.php');
			}
		}
	}

	// logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}
?>