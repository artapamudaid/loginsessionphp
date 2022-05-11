<?php

$server = "localhost";
$user = "arta";
$pass = "ArtaArta_1";
$database = "loginsession_db";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
