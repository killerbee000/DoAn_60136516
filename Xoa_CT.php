<?php
include './SQL/config.php';

$id_ = $_GET['macty'];
$getCT = "SELECT * FROM congty WHERE MACTY = '$id_'";
$result = $conn->query($getCT);
$row  = $result->fetch_assoc();

$deleteCT = "DELETE FROM congty WHERE MACTY = '$id_'";
$result = $conn->query($deleteCT);

header('location: DSCTY.php');
?>