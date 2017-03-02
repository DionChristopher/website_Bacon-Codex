<?php
	
	define('server', 'localhost');
	define('username', 'bacon-codex');
	define('password', 'diondave99');
	define('database', 'bacon-codex');

	$connection = mysql_connect(server, username, password);
	if(!$connection) {
		die("could not connect:" . mysql_error());
	};

	mysql_select_db(database, $connection);

?>