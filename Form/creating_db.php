<html>
	<head>
		<title> Creating Database </title>
	</head>
			<body>
				<?php
				CREATE DATABASE disp_db;
				USE disp_db;
				CREATE TABLE table_form;
				(
				id int increment primary key,
				name char(20),
				name2 char(20),
				date date/time(DD-MM-YYYY HH:MM:SS),
				)
				?>
			</body>
</html>