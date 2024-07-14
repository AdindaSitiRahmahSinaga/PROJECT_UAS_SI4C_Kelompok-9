
<?php 
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("Location: ../../Form_Login/FormLogin.php");
    exit;
}
require "../DB.php";

$id = $_GET["id"];

mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user = $id");

if (mysqli_affected_rows($koneksi) > 0) {
    echo "
            <script>
                alert('User berhasil di hapus!');
                document.location.href = 'ds-user.php';
            </script>
        ";
  }else {
    echo mysqli_error($koneksi);
  }
?> 