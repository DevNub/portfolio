<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
// Create table
mysql_select_db("disp_db2", $con);
$sql = "CREATE TABLE Names_Entered
(
User int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(User),
Name varchar(20),
RevName varchar(20),
Date Datetime
)";
  
// Execute query
mysql_query($sql,$con);

mysql_close($con);
?>