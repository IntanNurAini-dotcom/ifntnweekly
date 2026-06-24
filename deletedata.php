<?php
require 'fungsi.php';


    $id = $_GET['id'];
    

if(deletedata($id) > 0) {
    echo"<script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'datamahasiswa.php';
    </script>";
}
else{
    echo"<script>
        alert('Data Gagal Dihapus!');
        document.location.href = 'datamahasiswa.php';
    </script>";
}

 
?>