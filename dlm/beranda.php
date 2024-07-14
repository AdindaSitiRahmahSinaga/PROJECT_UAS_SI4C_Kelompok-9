<?php
    //aktifkan session
    session_start();
    //cek session user ada atau tidak
    if( !isset($_SESSION['nim']) ){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard E-Campus STMIK ROYAL</title>
</head>
<body>
    <h2>Dasboard E-Campus STMIK ROYAL</h2>
    <h2>Welcome <?php echo $_SESSION['nama']; ?> Your Dasboard!</h2>
    <a href="Logout.php">Logout</a>
</body>
</html>