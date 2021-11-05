<?php
include 'SQL/config.php';
error_reporting(0);

$mact_ = $_GET['mact'];
$xoaCty = "DELETE FROM congty WHERE MACTY = '$mact_'";
$result = $conn->query($xoaCty);

if($result == TRUE)
{
    header("Location: DSCTY.php");
}
else
{
    echo 'Thao tác bị lỗi';
}
?>