<!DOCTYPE html>

	<html>
		<head>
			<title> Mqsl-Con </title>
		</head>
			<body>
				<?php
				
				$host = 'localhost';
				$user = 'root';
				$password = 'root';
				$dbName = 'disp_db';
				
				$connect = mysql_connect($host, $user, $password)or Die(mysql_error());
				$db = mysql_select_db($dbName, $connect)or Die(mysql_error());
				$count = 0
				$count = $count + 1
				
				$connect
				$db
				$mysql_query(INSERT INTO table(column_id, column_name2) VALUES('$count', '$_REQUEST["name2"]'))				
				?>
				
				<?php
				echo $_REQUEST["name2"]; has been saved.
				?>
				
			</body>
	</html>