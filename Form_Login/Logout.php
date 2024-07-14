<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();//destroy the session
    header("Location:FormLogin.php");
    // redirect to FormLogin.php 
?>