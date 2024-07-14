<?php 
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("Location: ../../Form_Login/FormLogin.php");
    exit;
}
require "../DB.php";

$id = $_GET["id"];
$user  = mysqli_query($koneksi,"SELECT tb_user.id_user,tb_user.username,tb_user.password,tb_user.nama_user,tb_user.id_level,tb_level.id_level,tb_level.level FROM tb_user
INNER JOIN tb_level  ON tb_user.id_level = tb_level.id_level WHERE id_user = $id");

if (isset($_POST["u_user"])) {
    $nama_user = ucwords($_POST["nama_user"]);
    $username = ucwords(stripcslashes($_POST["username"]));
    $password = $_POST["password"];
    $id_akses = $_POST["level"];
    
    $query= "UPDATE tb_user
    SET
    username = '$username',
    password = '$password',
    nama_user = '$nama_user',
    id_level  = $id_akses
    WHERE 	id_user = $id;
    ";
    mysqli_query($koneksi, "$query");

if (mysqli_affected_rows($koneksi) > 0) {
    echo "
            <script>
                alert('User berhasil diubah!');
                document.location.href = 'ds-user.php';
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
    <title>Sistem Informasi Penjualan Butik <b>Owner-u-users Page.com</b></title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: aqua;" >
<div style="text-align: center;">
<h2>Form Registrasi</h2>
<?php foreach ($user as $data ) : ?> 
<form action="" method="post">
    <label style="margin-right:100px;" for="nama_user">Nama User:</label><br>
    <input type="text" id="nama_user" value="<?= $data["nama_user"]?>" name="nama_user"><br><br>

    <label style="margin-right:100px;" for="username">Username:</label><br>
    <input type="text" id="username" value="<?= $data["username"]?>" name="username"><br><br>

    <label style="margin-right:100px;" for="password">Password:</label><br>
    <input type="password" id="password" value="<?= $data["password"]?>" name="password"><br><br>

    <label style="margin-right:30px;" for="level">Level</label>
 <select name="level" id="level" class="form-control">
    <option selected disabled value="<?= $data["level"]?>"><?= $data["level"]?></option>
   <option value="1">Owner</option>
   <option value="2">Kasir</option>
   <option value="3">Pelanggan</option>
 </select>
 <br><br>
  <button style="width: 130px; color: white; background-color: blue" type="submit" name="u_user">Ubah Data</button>
</form>
<?php endforeach; ?>
</div>
</body>
</form>