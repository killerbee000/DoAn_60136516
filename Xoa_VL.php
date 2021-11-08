<?php
include './SQL/config.php';

$id = $_GET['macv'];
$getCV = "SELECT * FROM congviec WHERE MACV = '$id'";
$result = $conn->query($getCV);
$row  = $result->fetch_assoc();

$deleteCV = "DELETE FROM congviec WHERE MACV = '$id'";
$result = $conn->query($deleteCV);

header('location: DSVL.php');
?>