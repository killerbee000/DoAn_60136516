<?php
include 'SQL/config.php';
error_reporting(0);

$macv_ = $_GET['macv'];

$xoaViec = "DELETE FROM congviec WHERE MACV = '$macv_'";
$result = $conn->query($xoaViec);

if($result)
{
    echo 'OK';
}
else
{
    echo 'KO';
}
?>