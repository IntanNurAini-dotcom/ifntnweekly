<?php
require 'fungsi.php';

if (isset($_POST["kirim"])) {


    

    if (inputdata($_POST, $_FILES["foto"]) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                window.location.href='DataMahasiswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
              </script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" /></td>
            </tr>
            <tr>
                <td><label for="nim">NIM:</label></td>
                <td>:</td>
                <td><input type="number" name="nim" id="nim"/></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan"/></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" id="email"/></td>
            </tr>
            <tr>
                <td><label for="nohp">Nomor HP</label></td>
                <td>:</td>
                <td><input type="number" name="nohp" id="nohp"/></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="file" name="foto" id="foto"/></td>
            </tr>
        </table>
        <button type="submit" name="kirim" >Tambah Data</button>
    
    </form>
</body>
</html>