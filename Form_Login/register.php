<?php 
require "DB.php";

if (isset($_POST["register"])) {
    $namadp = ucwords(stripcslashes($_POST["namadp"]));
    $namabk = ucwords(stripcslashes($_POST["namabk"]));
    $nama = $namadp." ".$namabk;
    $username = ucwords(stripcslashes($_POST["username"]));
    $password = $_POST["password"];
    $id_level = 3;
    
    $result = mysqli_query($koneksi,"SELECT username FROM tb_user WHERE  username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('username sudah digunakan!');
            document.location.href = 'registrasi.php';
        </script>
    ";
    return false;
    }

     mysqli_query($koneksi, "INSERT INTO tb_user 
    VALUES('','$username','$password', '$nama','$id_level')");

if (mysqli_affected_rows($koneksi) > 0) {
    echo "
            <script>
                alert('user baru berhasil di tambahkan!');
                document.location.href = 'FormLogin.php';
            </script>
        ";
}else {
    echo mysqli_error($koneksi);
}


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Page.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div style="text-align: center;">
<h2>Form Registrasi</h2>
<form action="" method="post">
    <label style="margin-right:100px;" for="nama">Nama Depan:</label><br>
    <input type="text" id="namadp" name="namadp"><br><br>
    <label style="margin-right:100px;" for="nama">Nama Belakang:</label><br>
    <input type="text" id="namabk" name="namabk"><br><br>
    <label style="margin-right:100px;" for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br><br>
    <label style="margin-right:100px;" for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <a href="FormLogin.php" style="text-decoration:none; font-family: sans-serif; font-size: small;">Login akun!</a> <br><br>
 <br><br>

  <button style="width: 130px; color: white; background-color: blue" type="submit" name="register" id="register">Registrasi</button>
</form>
</div>
</body>
</form>