<?php


function swap(&$a, &$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}

function sxGiam($arr)
{
    for($i=0;$i<count($arr)-1;$i++)
        for($j=$i+1;$j<count($arr);$j++)
        {
            if($arr[$i] < $arr[$j])
                swap($arr[$i], $arr[$j]);
        }
    return $arr;
}

if(isset($_POST['submit']))
{
        $mangNhap = $_POST['nhapmang'];
//        $mangtach = explode(", ", $mangNhap);
//        $KQ_giam = implode(", ",sxGiam($mangtach));
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form>
    <table  bgcolor="#ffc0cb">
        <tr  bgcolor="#8b4513">
            <td colspan="3" align="center"> <h3>TÌM KIẾM </h3></td>
        </tr>
        <tr>
            <td>
                Nhập Mảng:
            </td>
            <td>
                <input type="text" name="nhapmang" size="30" value="<?php $_POST['nhapmang']?>">
            </td>
            <td>
                <p style="color: red"> * </p>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" name="submit" value="submit">
            </td>
        </tr>
        <tr>
            <td>Sau khi sắp xếp</td>
        </tr>
        <tr>
            <td>Tăng dần: </td>
            <td>  <input type="text" name="td" size="30"> </td>
        </tr>
        <tr>
            <td>Giảm dần: </td>
            <td>  <input type="text" name="gd" size="30" value=""> </td>
        </tr>
    </table>
</form>
</body>
</html>