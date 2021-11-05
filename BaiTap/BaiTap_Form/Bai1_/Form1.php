<?php

$sname = $_POST['name'];
$semail = $_POST['pass'];

if($sname == 'admin' && $semail == '12345')
{
    echo "<font color = red> Welcome admin".$sname;
}
else
{
    echo "<font color = red> Sai. Nhap lai";
}

?>