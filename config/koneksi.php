<?php
$host     = "localhost";
$username = "root";
$password = "";
$database = "sis_mdr";

$connect = mysqli_connect($host, $username, $password, $database);

if (!$connect) {
	echo "<h1 style=\"text-align:center;\">Database connection failed!</h1>";
	exit;
}
?>