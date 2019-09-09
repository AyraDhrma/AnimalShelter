<?php

$server="localhost";
$user="root";
$pass="";
$nama_db="shelter";

$db = mysqli_connect($server,$user,$pass,$nama_db);

if (!$db) {
	# code...
	die("Gagal Terhubung".mysqli_connect_error());
}

?>