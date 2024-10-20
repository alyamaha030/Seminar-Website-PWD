<?php
// Memanggil file koneksi.php
include_once("koneksi.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['Submit'])) {
    // Variable untuk menampung data $_POST yang dikirimkan melalui form.
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $institusi = $_POST['institusi'];
    $negara = $_POST['negara'];
    $alamat = $_POST['alamat'];

    // Syntax untuk menambahkan data ke table registrasi
    $result = mysqli_query($con, "INSERT INTO registrasi (email, nama, institusi, negara, alamat) VALUES ('$email', '$nama', '$institusi', '$negara', '$alamat')");


    // Menampilkan pesan jika data berhasil disimpan.
    echo "Data berhasil disimpan. Klik untuk selesai.<a href='login.html'>Selesai</a>";
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registrasi Peserta</title>
    <link rel="stylesheet" href="styleregis.css" />
  </head>
  <body>
  
    <section class="container">
      <header>Registration Form</header>
      <form action="tambah.php" method="post" class="form">
        <div class="input-box">
          <label>Email</label>
          <td><input type="text" name="email"></td>
        </div>

        <div class="input-box">
          <label>Name</label>
          <td><input type="text" name="nama"></td>
        </div>

        <div class="input-box">
          <label>Institution</label>
          <td><input type="text" name="institusi"></td>
        </div>

        <div class="input-box">
          <label>Country</label>
          <td><input type="text" name="negara"></td>
        </div>

        <div class="input-box">
          <label>Address</label>
          <td><input type="text" name="alamat"></td>
        </div>

        <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
      </form>
    </section>
  </body>
</html>



<!-- <html>

<head>
    <title>Tambah Data Peserta Seminar</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />
    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Institusi</td>
                <td><input type="text" name="institusi"></td>
            </tr>
            <tr>
                <td>Negara</td>
                <td><input type="text" name="negara"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html> -->