<?php

	session_start();

	if(!isset($_SESSION['id'])) {

		header("Location: login.php");

	};

	if($_SESSION['id'] != '1') {

		header("Location: employee.php");

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
		

		<title>Admin-Panel</title>
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
					<h1>Admin Panel</h1>
				</div>
			</div>

		</header>


			<div class="row">
				<div class="container">

					<a href="admin_adduser.php" class="btn btn-primary" role="button">Add User</a>

					<a href="admin_deluser.php" class="btn btn-primary" role="button">Delete User</a>

					<a href="admin_userlist.php" class="btn btn-primary" role="button">User List</a>

				</div>
			</div>

			<div class="row padding-top-25">
				<div class="container">

					<a href="admin_delmember.php" class="btn btn-primary" role="button">Delete Member</a>

					<a href="admin_memberlist.php" class="btn btn-primary" role="button">Member List</a>

				</div>
			</div>

			<div class="row padding-top-25">
				<div class="container">

					<a href="admin_delrule.php" class="btn btn-primary" role="button">Delete Rule</a>

					<a href="admin_rulelist.php" class="btn btn-primary" role="button">Rule List</a>

				</div>
			</div>

			<div class="row padding-top-25">
				<div class="container">

					<a href="employee.php" class="btn btn-info" role="button">Employee Panel</a>

				</div>
			</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
	</body>

</html>