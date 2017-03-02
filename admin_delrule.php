<?php

	session_start();

	if(!isset($_SESSION['id'])) {

		header("Location: login.php");

	};

	if($_SESSION['id'] != '1') {

		header("Location: employee.php");

	};

	require 'scripts/database.php';

	if($_POST['id'] <> "") {

		$id = strip_tags($_POST['id']);

		$id = stripslashes($id);

		$id = mysql_real_escape_string($id);


		mysql_query("DELETE FROM `rules` WHERE `ID` = '$id'");

		header("Location: admin_rulelist.php");

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
		

		<title>Delete Rule</title>
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
					<h1>Delete Rule</h1>
				</div>
			</div>

		</header>

			<div class="row">
				<div class="container">
				
					<form action="admin_delrule.php" method="POST">

						<div class="form-group">
							<div class="input-group col-lg-3">
								<span class="input-group-addon" id="basic-addon1">Rule ID</span>
								<input type="number" class="form-control" name="id" maxlength="3"></input>
							</div>
						</div>

						<input class="btn btn-danger" type="submit" value="Delete"></input>

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
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
	</body>

</html>