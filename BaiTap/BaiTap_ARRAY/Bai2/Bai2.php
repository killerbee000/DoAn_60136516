<?php

function tong($arr)
{
    $temp = 0;
    for($i =0; $i < count($arr); $i++)
        $temp += $arr[$i];
    return $temp;
}

$dayso = "";
$array_=array();
if(isset($_POST['submit']))
{
    $dayso = $_POST['nhapds'];
    $array_ = explode(",", $dayso);
    $sum_ = tong($array_);
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
    <table  bgcolor="#f0f8ff" align="center">
        <tr  bgcolor="#6495ed">
            <td colspan="3" align="center"> <h1>Nhập và tính dãy số</h1></td>
        </tr>
        <tr>
            <td>
                Nhập dãy số:
            </td>
            <td>
                <input type="text" id="nhapds" size="30" name="nhapds"
                       value="<?php if(isset($dayso)) echo $dayso; ?>">
            </td>
            <td>
                <p style="color: red"> * </p>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" name="submit" value="Tinh tong" style="background-color: #00fafa">
            </td>
        </tr>
        <tr>
            <td>Tổng dãy số: </td>
            <td>  <input type="text" name="sum" size="30" disabled value="<?php if(isset($sum_)) echo $sum_;?>"> </td>
        </tr>
        <tr>
          <td colspan="3" align="center"> Các số được nhập cách nhau bằng dấu ","</td>
        </tr>
    </table>
</form>
</body>
</html>