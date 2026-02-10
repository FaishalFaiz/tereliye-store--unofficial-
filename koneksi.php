<?php

// fill in your database connection details here
$host = "";
$user = "";
$pass = "";
$db   = "";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal bosku: " . mysqli_connect_error());
}
?>