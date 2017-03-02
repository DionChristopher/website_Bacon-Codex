<?php

	session_start();

	if(!isset($_SESSION['id'])) {

		header("Location: login.php");

	}

	require 'scripts/database.php';

	if($_POST['name'] <> "" AND $_POST['description'] <> "" AND $_POST['content'] <> "") {

		$name = strip_tags($_POST['name']);
		$description = strip_tags($_POST['description']);
		$content = strip_tags($_POST['content']);

		$name = stripslashes($name);
		$description = stripslashes($description);
		$content = stripslashes($content);

		$name = mysql_escape_string($name);
		$description = mysql_escape_string($description);
		$content = mysql_escape_string($content);

		$username = $_SESSION['username'];

		mysql_query("INSERT INTO rules (`ID`, `From`, `Name`, `Description`, `Content`) VALUES ('', '$username', '$name', '$description', '$content')");
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
		

		<title>Employee-Panel</title>
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
					<h1>Employee Panel</h1>
				</div>
			</div>

		</header>

			<div class="container">

				<form action="employee.php" method="POST">
							
					<h2>Rule Name</h2>
					<div class="form-group">
						<textarea class="form-control" rows="1" placeholder="(max. 20 characters)" maxlength="20" name="name" required></textarea>
					</div>

					<h2>Description</h2>
					<div class="form-group">
						<textarea class="form-control" rows="" placeholder="(max. 100 characters)" maxlength="100" name="description" required></textarea>
					</div>

					<h2>Rule</h2>
					<div class="form-group">
						<textarea class="form-control" rows="3" placeholder="(max. 255 characters)" maxlength="255" name="content" required></textarea>
					</div>

					<input class="btn btn-success" type="submit" value="Submit" name="submit"></input>

				</form>
			

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
	</body>

</html>