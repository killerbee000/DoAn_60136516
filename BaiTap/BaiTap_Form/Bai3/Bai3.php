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

if(isset($_POST['submit'])) {
    $_name = $_POST['name'];
    $_sc = $_POST['sc'];
    $_sm = $_POST['sm'];
    $_dg = $_POST['dg'];
    $_sttt = $_POST['sttt'];

    $_dg = 2000;

    if ($_sc != 0 && $_sm != 0) {
        $_sttt = ($_sc + $_sm) * $_dg;
    } else {
        $_sttt = "Vui long nhap lai";
    }
}

?>

<form method="POST" action="Bai3.php">
<table  bgcolor="#ffebcd" align="center">
    <tr>
        <td colspan="3" align="center" bgcolor="orange">
            <h3> Tính Tiền Điện Chung Cư</h3>
        </td>
    </tr>
    <tr>
        <td> Tên chủ hộ</td>
        <td> <input type="text" name="name"
                    value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"/></td>
    </tr>
    <tr>
        <td> Chỉ số cũ</td>
        <td> <input type="text" name="sc"
            value="<?php if(isset($_POST['sc'])) echo $_POST['sc']; ?>"/></td>
        <td> Kw</td>
    </tr>
    <tr>
        <td> Chỉ số mới</td>
        <td> <input type="text" name="sm"
                    value="<?php if(isset($_POST['sm'])) echo $_POST['sm']; ?>"/></td>
        <td> Kw</td>

    </tr>
    <tr>
        <td> Đơn giá</td>
        <td> <input type="text" name="dg"
            value="<?php echo $_dg;?>" /> </td>
        <td> VND</td>

    </tr>
    <tr>
        <td> Số tiền thanh toán</td>
        <td> <input type="text" name="sttt" disabled="1"
                    value="<?php echo $_sttt;?>"/></td>
        <td> VND</td>

    </tr>
    <tr>
        <td colspan="3" align="center"> <input type="submit" name="submit" value="submit"></td>
    </tr>
</table>
</form>

</body>
</html>