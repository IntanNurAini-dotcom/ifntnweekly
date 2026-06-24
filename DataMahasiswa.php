<?php

require 'fungsi.php';

$mahasiswa = "SELECT * FROM mahasiswa";
$mahasiswa = tampildata($mahasiswa);///wadah dengan data mahasiswa yang sudah diambil dari data base 


?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <!-- LINK CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Portofolio Intan Nur Aini</h1>

<!-- NAVBAR -->
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="profile.php">Profile</a>
    <a href="contact.php">Kontak</a>
    <a href="datamahasiswa.php">Data Mahasiswa</a>
</div>

<h2>Data Mahasiswa</h2>

<a href="inputdata.php">
    <button>+ Tambah Data Mahasiswa</button>
</a>

<!-- TABLE DATA -->
<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>No. HP</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

<?php
$i = 1;
foreach ($mahasiswa as $mhs)
{
 ?>
    <tr>
        <td align="center">1</td>
        <td><?php echo $mhs["nama"]?></td>
        <td align="center"><?php echo $mhs ["nim"] ?></td>
        <td align="center"><?php echo $mhs ["jurusan"] ?></td>
        <td align="center"><?php echo $mhs ["email"] ?></td>
        <td align="center"><?php echo $mhs ["no_hp"] ?></td>

        <td align="center">
            <img src="assets/images/<?php echo $mhs ["foto"] ?>" width="30px">
        </td>

        <td align="center">
            <a href="editdata.php?id=<?php echo $mhs["id"]; ?>">
                <button>Edit</button>
            </a>

            <a href="deletedata.php?id=<?php echo $mhs["id"]; ?>" onclick="return confirm('Yakin?')"><button>DELETE</button></a></td>
        
            </a>
        </td>
    </tr>
    <?php
    }
    ?>
    

    <tr>
        <td align="center">2</td>
        <td>Pipimbull</td>
        <td align="center">101062006012</td>
        <td align="center">Informatika</td>
        <td align="center">mbul@gmail.com</td>
        <td align="center">0895110099111</td>

        <td align="center">
            <img src="assets/images/intun.jpeg" width="30px">
        </td>

        <td align="center">
            <a href="editdata.php">
                <button>Edit</button>
            </a>

            <a href="deletedata.php">
                <button>DELETE</button>
            </a>
        </td>
    </tr>
    

</table>

<hr>

<h3>Latihan</h3>

<table class="latihan" border="1" cellpadding="10">

    <tr>
        <td>1,1</td>
        <td>1,2</td>
        <td>1,3</td>
        <td>1,4</td>
    </tr>

    <tr>
        <td>2,1</td>
        <td colspan="2">?</td>
        <td>2,4</td>
    </tr>

    <tr>
        <td>3,1</td>
        <td colspan="3">3,4</td>
    </tr>

    <tr>
        <td>4,1</td>
        <td>4,2</td>
        <td>4,3</td>
        <td>4,4</td>
    </tr>

</table>

</body>
</html>