<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang</title>
</head>
<body>

<form action="Trang2.php" method="POST">
    <table align="center" border="1">
        <tr>
            <td align="center" colspan="5" bgcolor="#6495ed"><h2>Chọn Phép tính cho hai số</h2></td>
        </tr>
        <tr>
            <td>Chọn Phép tính:</td>
            <td> <input type="radio" id="Cong" name="Pheptinh" checked="1" value="Cong"> Cộng </td>
            <td> <input type="radio" id="Tru" name="Pheptinh" value="Tru"> Trừ </td>
            <td> <input type="radio" id="Nhan" name="Pheptinh" value="Nhan"> Nhân </td>
            <td> <input type="radio" id="Chia" name="Pheptinh" value="Chia"> Chia </td>
        </tr>
        <tr>
            <td> Số Thứ Nhất: </td>
            <td colspan="4">
                <input type="text" name="stn" size="30" value=""></td>
        </tr>
        <tr>
            <td> Số Thứ Hai: </td>
            <td colspan="4">
                <input type="text" name="sth" size="30" value=""></td>
        </tr>
        <tr>
            <td align="center" colspan="5"> <input type="submit" value="submit"></td>
        </tr>
    </table>
</form>

</body>
</html>