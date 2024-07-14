<?php 
session_start();
require "DB.php";

if (isset($_SESSION["login"]) ) {
  if ($_SESSION["login"] == 1) {
    header("Location: ../admin-owner/index.php");
    exit;  
  }elseif ($_SESSION["login"] == 2) {
    header("Location: ../kasir/index.php");
    exit;  
  }else {
    header("Location: ../costumer/index.php");
    exit;  
  }
}

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE username = '$username'");

  if (mysqli_num_rows($result)  === 1) {
      // cek password
      $row = mysqli_fetch_assoc($result);
      if($password == $row["password"]){
          $_SESSION["login"] = $row["id_level"];
          $_SESSION["user"] =  $row["username"];

          if ($_SESSION["login"] == '1') {
              $_POST [$_SESSION["user"]];
              header("Location: ../admin-owner/index.php");
          }elseif ($_SESSION["login"] == '2') {
            $_POST [$_SESSION["user"]];
              header("Location: ../kasir/index.php");
          }else{
              $_POST [$_SESSION["user"]];
              header("Location: ../costumer/index.php");
          }
          exit;
      }else {
        echo "
            <script>
                alert('Password Anda Salah!');
            </script>
        ";
      }
  }

  $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div style="text-align: center;">
<h2>Form Login</h2>
<form action="" method="post">
    <label style="margin-right:100px;" for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br><br>
    <label style="margin-right:100px;" for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <a href="register.php" style="text-decoration:none; font-family: sans-serif; font-size: small;">Daftar akun!</a>

 <br>
  <button style="width: 130px; color: white; background-color: blue" type="submit" name="login" id="login">Login</button>
</form>
</div>
</body>
</form>