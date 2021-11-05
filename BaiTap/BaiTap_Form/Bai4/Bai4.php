<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rectangle</title>
</head>

<body>

<?php
if (isset($_POST['submit'])){
    $_toan = $_POST['toan'];
    $_li = $_POST['li'];
    $_hoa = $_POST['hoa'];
    $_dc = $_POST['dc'];
    $_td = $_POST['td'];
    $_kqt = $_POST['kqt'];

    $_dc = 20;

    $_td = $_toan + $_hoa + $_li;
    if ($_toan > 10 || $_li > 10 || $_hoa > 10)
    {
        $_kqt = $_td = "Vui long nhap lai";
    }
    elseif ($_td >= $_dc && $_toan != 0 && $_li != 0 && $_hoa != 0)
    {
        $_kqt = "ĐẬU";
    }
    else
    {
        $_kqt = "RỚT";
    }
}
?>

<form action="" method="post">
    <table  bgcolor="#ffc0cb" align="center">
        <tr>
            <td colspan="3" align="center" bgcolor="#ff1493">
                <h3 style="font-family: 'Brush Script MT'"> KẾT QUẢ THI ĐẠI HỌC</h3>
            </td>
        </tr>
        <tr>
            <td> Toán</td>
            <td> <input type="text" name="toan"
                        value="<?php if(isset($_POST['toan'])) echo $_POST['toan']; ?>"/></td>
        </tr>
        <tr>
            <td> Lí</td>
            <td> <input type="text" name="li"
                        value="<?php if(isset($_POST['li'])) echo $_POST['li']; ?>"/></td>
        </tr>
        <tr>
            <td> Hóa</td>
            <td> <input type="text" name="hoa"
                        value="<?php if(isset($_POST['hoa'])) echo $_POST['hoa']; ?>"/></td>
            <td> </td>

        </tr>
        <tr>
            <td> Điểm chuẩn</td>
            <td> <input type="text" name="dc"
                        value="<?php echo $_dc ?>" /> </td>
            <td> </td>

        </tr>
        <tr>
            <td> Tổng điểm</td>
            <td> <input type="text" name="td" disabled="1"
                        value="<?php echo $_td ?>"/></td>
            <td> </td>

        </tr>
        <tr>
            <td> Kết Quả Thi</td>
            <td> <input type="text" name="kqt" disabled="1"
                        value="<?php echo $_kqt?>"/></td>
            <td> </td>

        </tr>
        <tr>
            <td colspan="3" align="center"> <input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>

</body>
</html>