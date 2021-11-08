<?php
function taomang(int $spt)
{
    $result = array();
    for ($i = 0; $i < $spt; $i++) {
        array_push($result, rand(0, 20));
    }
    return $result;
}



function xuatmang($arr)
{
    foreach ($arr as $i) echo $i . " ";
}

function sum($arr)
{

    $sum = 0;
    foreach ($arr as $i) $sum += $i;
    return $sum;
}

function maxValue($arr)
{
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++)
        if ($arr[$i] > $max) $max = $arr[$i];

    return $max;
}

function minValue($arr)
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++)
        if ($arr[$i] < $min) $min = $arr[$i];

    return $min;
}

if(isset($_POST["submit"]))
{
    $spt_ = $_POST["sophantu"];
    $arr = taomang($spt_);
    $sum_ = sum($arr);
    $max_ = maxValue($arr);
    $min_ = minValue($arr);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="POST">
    <table  bgcolor="" align="center" border="1">
        <tr  bgcolor="purple">
            <td colspan="3" align="center"> <h1>Phát sinh mảng và tính toán</h1></td>
        </tr>
        <tr bgcolor="#ffdab9">
            <td>
                Nhập số phần tử:
            </td>
            <td>
                <input type="text" id="sophantu" size="30" name="sophantu"
                       value="<?php if(isset($_POST['sophantu'])) echo $_POST['sophantu']?>">
            </td>
        </tr>
        <tr bgcolor="#ffdab9">
            <td colspan="2" align="center">
                <input type="submit" name="submit" value="Phát sinh và tính toán" style="background-color: #00fafa">
            </td>
        </tr>
        <tr>
            <td>Mảng: </td>
            <td>  <input type="text" name="mang" size="30" value="<?php isset($_POST['submit']) ? xuatmang($arr) : ''; ?>"> </td>
        </tr>
        <tr>
            <td>GTLN MAX trong mảng: </td>
            <td>  <input type="text" disabled name="max" size="30" value="<?php if (isset($_POST['submit'])) echo $max_?>"> </td>
        </tr>
        <tr>
            <td>GTNN MIN trong mảng: </td>
            <td>  <input type="text" disabled name="min" size="30" value="<?php if (isset($_POST['submit'])) echo $min_?>"> </td>
        </tr>
        <tr>
            <td>Tổng mảng: </td>
            <td>  <input type="text" disabled name="sum" size="30" value="<?php if (isset($_POST['submit'])) echo $sum_?>"> </td>
        </tr>
    </table>
</form>
</body>
</html>