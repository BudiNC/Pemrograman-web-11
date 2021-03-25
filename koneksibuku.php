<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "tamu_php";

$db = mysqli_connect($server, $user, $password, $db);

if (!$db) {
	die("Gagal Terhubung Database Buku Tamu Silahkan Ulangi Lagi :" .mysqli_connect_error());
}

 ?>