<?php

if(isset($_POST['submit'])){
    $arr = explode(",", $_POST['input']);
    $number = $_POST['key'];

    $result = -1;
    for($i=0; $i< count($arr); $i++) {
        if($arr[$i] == $number) $result = $i;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form method="post">
    <table align="center" style="border: 1px solid;" bgcolor="#b1dde0">
        <tr>
            <td style="padding: 0px 200px; color: white" colspan="2" bgcolor="#097980">
                <h2>TÌM KIẾM</h2>
            </td>
        </tr>
        <tr>
            <td>Nhập mảng: </td>
            <td>
                <input type="text" required placeholder="Nhập vào mảng..." name="input" value="<?php if(isset($arr)) foreach($arr as $i) echo $i.','; ?>" style="width: 90%;">
            </td>
        </tr>
        <tr>
            <td>Nhập vào số cần tìm: </td>
            <td>
                <input type="text" required name="key" value="<?php echo isset($number)? $number : '' ?>" style="width: 25%;">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Tìm kiếm" style="padding: 0 20px; background-color: #5abbc1">
            </td>
        </tr>
        <tr>
            <td>Mảng: </td>
            <td>
                <input type="text" readonly value="<?php if(isset($arr)) foreach($arr as $i) echo $i.', '; ?>" style="width: 90%;">
            </td>
        </tr>
        <tr>
            <td>Kết quả tìm kiếm: </td>
            <td>
                <input type="text" readonly value="<?php if(isset($number)) if($result == -1) echo 'Không tìm thấy '.$number.' trong mảng.';
                else echo 'Đã tìm thấy '.$number.' tại vị trí thứ '.$result.' trong mảng.'; ?>"
                       style="width: 90%; background-color: #cbe5e7; color: red; border: 1px solid black">
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2" bgcolor="#50b3bb">(Các phần tử cách nhau bởi dấu ",")</td>
        </tr>
    </table>
</form>
</body>

</html>