<?php

$hostname = "localhost";
$username = "root";
$password = "b1sm1llah";
$database = "web_bpkad_db";

$con = mysqli_connect($hostname, $username, $password, $database);

if (!$con) {
	die ("Koneksi Bermasalah : " . mysqli_connect_error());
}
