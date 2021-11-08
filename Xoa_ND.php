<?php
include './SQL/config.php';

$id_ = $_GET['tennd'];
$getND = "SELECT * FROM nguoidung WHERE TENND = '$id_'";
$result = $conn->query($getND);
$row  = $result->fetch_assoc();

$deleteND = "DELETE FROM nguoidung WHERE TENND = '$id_'";
$result = $conn->query($deleteND);

header('location: DSND.php');
?>