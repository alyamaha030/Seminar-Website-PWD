<?php

$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

$id = $_POST['id'];
$email= $_POST['email'];
$nama = $_POST['nama'];
$institusi= $_POST['institusi'];
$negara= $_POST['negara'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO registrasi (nama, email, institusi, negara, alamat)
            VALUES ('$nama', '$email', '$institusi', '$negara', '$alamat')";

mysqli_query($conn, $query);
?>
          