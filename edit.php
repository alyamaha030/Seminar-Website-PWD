<?php
// Memanggil file koneksi.php
include_once("koneksi.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email= $_POST['email'];
    $nama = $_POST['nama'];
    $institusi = $_POST['institusi'];
    $negara = $_POST['negara'];
    $alamat = $_POST['alamat'];
   

    // Syntax untuk mengupdate data user berdasarkan id
    $result = mysqli_query($con, "UPDATE registrasi SET email='$email', nama='$nama', institusi='$institusi', negara='$negara', alamat='$alamat' WHERE id=$id");

    // Redirect ke index.php
    header("Location: index.php");
}
?>
<?php
// Menampilkan data berdasarkan data yang kita pilih.

// Mengambil id dari url
$id = $_GET['id'];

// Syntax untuk mengambil data berdasarkan id
$result = mysqli_query($con, "SELECT * FROM registrasi WHERE id='$id'");
while ($user_data = mysqli_fetch_array($result)) {
    $email = $user_data['email'];
    $nama = $user_data['nama'];
    $institusi = $user_data['institusi'];
    $negara = $user_data['negara'];
    $alamat = $user_data['alamat'];

   
}
?>
<html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="styleregis.css" />
</head>

<body>
<section class="container">
      <header>Update Data Peserta</header>
      <form name="update_peserta" method="post" action="edit.php">
        <div class="input-box">
          <label>Email</label>
          <td><input type="text" name="email" value=<?php echo $email; ?>></td>
        </div>

        <div class="input-box">
          <label>Nama</label>
          <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
        </div>

        <div class="input-box">
          <label>Institusi</label>
          <td><input type="text" name="institusi" value=<?php echo $institusi; ?>></td>
        </div>

        <div class="input-box">
          <label>Negara</label>
          <td><input type="text" name="negara" value=<?php echo $negara; ?>></td>
        </div>

        <div class="input-box">
          <label>Alamat</label>
          <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
        </div>

        <tr>
                <td><input type="hidden" name="id" value=<?php echo $id ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
            <tr>
                <td><a href="index.php"><input type="submit" value="Home"></td>
            </tr>
        </form>
    </section>
  </body>
</html>


   