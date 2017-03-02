<?php

	require 'scripts/database.php';

	session_start();

	if(isset($_SESSION['id'])) {
		if($_SESSION['id'] == "1") {
			header("Location: admin.php");
		}else{
			header("Location: employee.php");
		};
	};

	


	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);

	$username = stripslashes($username);
	$pasword = stripslashes($password);

	$username = mysql_real_escape_string($username);
	$pasword = mysql_real_escape_string($password);

	$password = md5($password);

	$query = mysql_query("SELECT * FROM users WHERE username='$username' LIMIT 1");
	$row = mysql_fetch_array($query);
	$id = $row['ID'];
	$db_password = $row['Password'];

	if($password == $db_password) {
		
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		
		if($_SESSION['id'] == '1') {

			header("Location: admin.php");

		}else{

			header("Location: employee.php");

		};

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

		<title>Bacon-Codex</title>
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
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="bam.php">Become a Member</a></li>
							<li><a href="rules.php">Rules</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="login.php">Login</a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="jumbotron">
				<div class="container padding-top-25">
					<h1>Login</h1>
				</div>
			</div>

		</header>


				<div class="col-lg-4 col-lg-offset-4">

					<div class="container">

						<form action="login.php" method="POST">
							
							<h2>Login</h2>
							<div class="form-group">
								<div class="input-group col-lg-3">
									<span class="input-group-addon" id="basic-addon1">Username</span>
									<input type="text" class="form-control" name="username" maxlength="25"></input>
								</div>
							</div>

							<div class="form-group">
								<div class="input-group col-lg-3">
									<span class="input-group-addon" id="basic-addon1">Password</span>
									<input type="password" class="form-control" name="password" maxlength="25"></input>
								</div>
							</div>

							<input class="btn btn-success" type="submit" value="Login"></input>

						</form>

					</div>

				</div>



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		

	</body>

</html>