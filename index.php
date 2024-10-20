<?php
// Memanggil file koneksi.php
include_once("koneksi.php");

// Syntax untuk mengambil semua data dari table mahasiswa
$result = mysqli_query($con, "SELECT * FROM registrasi");
?>
<html>

<head>
    <title>Halaman registrasi</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1>DATA PESERTA SEMINAR</h1>
    <table width='80%' border=1>
        <tr>
            <th>Email</th>
            <th>Nama</th>
            <th>Institusi</th>
            <th>Negara</th>
            <th>Alamat</th>
            <th>Update</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['institusi'] . "</td>";
            echo "<td>" . $user_data['negara'] . "</td>";
            echo "<td>" . $user_data['alamat'] . "</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'> <input type='button' class='btn-update'></a> | 
            <a href='delete.php?id=$user_data[id]'> <input type='button' class='btn-delete'> </a></td></tr>";
        }
    
        ?>
       
    </table>
    <p>
    KLIK untuk Lihat Data <a href="tambah.php"> <input type='button' class='btn-tambah' value= "Tambah Data" ></a></p>
</body>

</html>