<?php
// Variable untuk koneksi ke MySQL
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "seminar";

// Syntax untuk koneksi ke MySQL
$con = mysqli_connect($servername, $username, $password, $databasename);

// Perkondisian jika gagal konek ke MySQL
if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
