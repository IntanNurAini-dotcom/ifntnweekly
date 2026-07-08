<?php
require 'fungsi.php';

if (isset($_POST["register"])) {


    

    if (register($_POST) > 0) {
        echo "<script>
                alert('User Berhasil Dibuat!');
                window.location.href='login.php';
              </script>";
    } else {
        echo "<script>
                alert('User Gagal Dibuat!');
              </script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

   <form action="" method="post" 
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password1">Password:</label>
        <input type="password" id="password1" name="password1" required><br><br>

        <label for="password2">Confirm Password:</label>
        <input type="password" id="password2" name="password2" required><br><br>

        <button type="submit" name="Register">Register</button>
</form>
    
    
</body>
</html>