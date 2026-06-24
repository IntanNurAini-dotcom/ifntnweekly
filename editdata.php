<?php
require 'fungsi.php';

$id =$_GET["id"];

$query = "SELECT * FROM mahasiswa WHERE id = $id";
$mahasiswa = tampildata($query)[0];  ///wadah terbuka



if (isset($_POST["kirim"])) {

    

    if (editdata($_POST, $id) > 0) {
        echo "<script>
                alert('Data Berhasil Diedit!');
                window.location.href='DataMahasiswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diedit!');
              </script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td>:</td>
                <td><input type="text" name="nama" 
                id="nama" value="<?= $mahasiswa["nama"] ?>"
                required/></td>
            </tr>
            <tr>
                <td><label for="nim">NIM:</label></td>
                <td>:</td>
                <td><input type="number" name="nim" id="nim" value="<?= $mahasiswa["nim"] ?>" required/></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan" value="<?= $mahasiswa["jurusan"] ?>" required/></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" id="email" value="<?= $mahasiswa["email"] ?>" required/></td>
            </tr>
            <tr>
                <td><label for="nohp">Nomor HP</label></td>
                <td>:</td>
                <td><input type="number" name="nohp" id="nohp" value="<?= $mahasiswa["no_hp"] ?>" required/>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="text" name="foto" id="foto" value="<?= $mahasiswa["foto"] ?>" required/></td>
            </tr>
        </table>
        <button type="submit" name="kirim" >Edit Data</button>
    
    </form>
</body>
</html>