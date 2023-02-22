<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "kartujenius";
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
	die("koneksi gagal: " . mysqli_connect_error());
}
?>