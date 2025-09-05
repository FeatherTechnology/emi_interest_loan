<?php
date_default_timezone_set('Asia/Kolkata');

$host = "mysql5049.site4now.net";
$db_user = "a86e03_caucaps";
$db_pass = "cauvery@123";
$dbname = "db_a86e03_caucaps";

$mysqli = mysqli_connect($host, $db_user, $db_pass, $dbname) or die("Error in database connection" . mysqli_connect_error());
mysqli_set_charset($mysqli, "utf8");
$timeZoneQry = "set time_zone = '+5:30' ";
$mysqli->query($timeZoneQry);
