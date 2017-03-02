<?php

	require 'scripts/database.php';

	if($_POST['forename'] <> "" AND $_POST['surename'] <> "" AND $_POST['email'] <> "" AND $_POST['country'] <> "") {

		$forename = strip_tags($_POST['forename']);
		$surename = strip_tags($_POST['surename']);
		$email = strip_tags($_POST['email']);
		$country = strip_tags($_POST['country']);

		$forename = stripslashes($forename);
		$surename = stripslashes($surename);
		$email = stripslashes($email);
		$country = stripslashes($country);

		$forename = mysql_real_escape_string($forename);
		$surename = mysql_real_escape_string($surename);
		$email = mysql_real_escape_string($email);
		$country = mysql_real_escape_string($country);
		

		mysql_query("INSERT INTO members (`ID`, `Forename`, `Surename`, `E-Mail`, `Country`) VALUES ('', '$forename', '$surename', '$email', '$country')");

		$msg =  "Forename: {$forename}\n Surename: {$surename}\n E-Mail: {$email}\n Country: {$country}";

		mail('Bacon-Codex@mail.de', 'New Member', $msg);


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
							<li class="active"><a href="bam.php">Become a Member</a></li>
							<li><a href="rules.php">Rules</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="login.php">Login</a></li>
						</ul>	
					</div>

				</div>
			</div>

			<div class="jumbotron">
				<div class="container padding-top-25">
					<h1>Become a Member</h1>
				</div>
			</div>

		</header>


			<div class="container">
				<div class="center-block">
					
					<h2>Lorem</h2>
					<p class="f18">
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
					</p>

				</div>
			</div>


			<div class="container">
				<form action="bam.php" method="POST">
					
					<div class="form-group">
						<div class="input-group col-lg-3">
							<span class="input-group-addon" id="basic-addon1">Forename</span>
							<input type="text" class="form-control" name="forename" maxlength="25"></input>
						</div>
					</div>

					<div class="form-group">
						<div class="input-group col-lg-3">
							<span class="input-group-addon" id="basic-addon1">Surename</span>
							<input type="text" class="form-control" name="surename" maxlength="25"></input>
						</div>
					</div>

					<div class="form-group">
						<div class="input-group col-lg-3">
							<span class="input-group-addon" id="basic-addon1">E-Mail</span>
							<input type="text" class="form-control" name="email" maxlength="25"></input>
						</div>
					</div>

					<div class="form-group">
						<div class="input-group col-lg-3">
							<span class="input-group-addon" id="basic-addon1">Country</span>
							<input type="text" class="form-control" name="country" maxlength="25"></input>
						</div>
					</div>

					<input class="btn btn-success" type="submit" value="Become a Member!"></input>
				</form>
			</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
	</body>

</html>