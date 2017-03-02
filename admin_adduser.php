<?php

	session_start();

	if(!isset($_SESSION['id'])) {

		header("Location: login.php");

	};

	if($_SESSION['id'] != '1') {

		header("Location: employee.php");

	};

	require 'scripts/database.php';


	if($_POST['username'] <> "" AND $_POST['password'] <> "") {

		$username = strip_tags($_POST['username']);
		$password = strip_tags($_POST['password']);
		$admin = strip_tags($_POST['admin']);

		$username = stripslashes($username);
		$password = stripslashes($password);
		$admin = stripslashes($admin);

		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		$admin = mysql_real_escape_string($admin);

		$password = md5($password);

		if($admin == "Yes" OR $admin == "yes") {

			$admin = "x";

		}else {

			$admin = "o";

		}

		mysql_query("INSERT INTO users (`ID`, `Username`, `Password`, `Admin`) VALUES ('', '$username', '$password', '$admin')");

		header("Location: admin_userlist.php");

	};

?>



<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" href="styles/main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		

		<title>Add User</title>
	</head>


	<body>
		
		<header>
			
			<div class="navbar navbar-default navbar-fixed-top navbar-inverse">
				<div class="container">
					<div class="navbar-header">

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="index.php" class="navbar-brand">Bacon-Codex</a>

					</div>

					<div class="collapse navbar-collapse" id="example">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="logout.php">Logout</a></li>
						</ul>	
					</div>

				</div>
			</div>

			<div class="jumbotron">
				<div class="container padding-top-25">
					<h1>Add User</h1>
				</div>
			</div>

		</header>


			<div class="row">
				<div class="container">

					<form action="admin_adduser.php" method="POST">
					
						<div class="form-group">
							<div class="input-group col-lg-3">
								<span class="input-group-addon" id="basic-addon1">Username</span>
								<input type="text" class="form-control" name="username"></input>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group col-lg-3">
								<span class="input-group-addon" id="basic-addon1">Password</span>
								<input type="password" class="form-control" name="password"></input>
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group col-lg-3">
								<span class="input-group-addon" id="basic-addon1">Admin?</span>
								<input type="text" class="form-control" name="admin" maxlength="3"></input>
							</div>
						</div>

						<input class="btn btn-success" type="submit" value="Submit"></input>

					</form>

				</div>
			</div>

			<div class="row padding-top-25">
				<div class="container">

					<a href="admin.php" class="btn btn-primary" role="button">Back</a>

				</div>
			</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
	</body>

</html>