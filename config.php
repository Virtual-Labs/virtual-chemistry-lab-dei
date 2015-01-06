<?php

$host = "localhost";
$username = "root";
$password = ""; // mysql database password
$dbname = "lab_local"; //mysql database name
$tbl_name="feedback";

mysql_connect($host, $username, $password) or die("Can not connect to the database server");
mysql_select_db($dbname) or die ("Can not connect to database name");

?>