<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["psw"]);
header("Location:login.php");
?>