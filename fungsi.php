
 <?php
$conn = mysqli_connect("localhost", "root", "root", "ntnweekly");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function tampildata($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function inputdata($data, $foto)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $prodi = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);

    $namafoto = $foto["name"];
    $newname = date('dmYhis') . '_' . $namafoto;
    $tmpfoto = $foto["tmp_name"];

    $path = "assets/images/" . $newname;

    if(move_uploaded_file($tmpfoto, $path)) {
         $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto)
              VALUES ('$nama', '$nim', '$prodi', '$email', '$nohp', '$newname')";

    mysqli_query($conn, $query);
       
    }

    return mysqli_affected_rows($conn);



}
function deletedata($id)
{
    global $conn;

    $id = (int)$id;
    $query = "DELETE FROM mahasiswa WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editdata($data, $id)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $prodi = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $foto = htmlspecialchars($data["foto"]);

    $query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', jurusan = '$prodi', email = '$email', no_hp = '$nohp', foto = '$foto' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function register($data)
{ 
    $username = stripslashes($data["username"]);
    $password1 = mysqli_real_escape_string($GLOBALS['conn'], $data['password1']);
    $password2 = mysqli_real_escape_string($GLOBALS['conn'], $data['password2']);
}

if ($password1 != $password2) {
        echo "<script>
                alert('Konfirmasi Password Tidak Sesuai!');
              </script>";
        return false;
    }

    $queryrow = mysqli_query($GLOBALS['conn'], "SELECT username FROM user WHERE username = '$username'");
    $result = mysqli_fetch_assoc($queryrow);

    if(mysqli_num_rows($queryrow) > 0) {
        echo "<script>
                alert('Username Sudah Terdaftar!');
              </script>";
        return false;
    }

$password = password_hash($password1, PASSWORD_DEFAULT);

$query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";


    mysqli_query($GLOBALS['conn'], $query);

    return mysqli_affected_rows($GLOBALS['conn']);



