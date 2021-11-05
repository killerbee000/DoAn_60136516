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

if (isset($_POST['submit'])) {
    $_gbd = $_POST['gbd'];
    $_gkt = $_POST['gkt'];
    $_ttt = "";

    if($_gbd < 10 || $_gkt > 24 || $_gbd > $_gkt)
    {
        $_ttt = "Vui long nhap lai";
    }
    else
    {
        if($_gkt < 17){
            $_ttt = ($_gkt - $_gbd)*20000;
        }
        elseif($_gbd > 17)
        {
            $_ttt = ($_gkt - $_gbd)*45000;
        }
        else{
            $_ttt = (17 - $_gbd)*20000 + ($_gkt - 17) *45000;
        }
    }

}

?>

<form action="" method="post">

    <table  bgcolor="#6495ed" align="center">
        <tr>
            <td colspan="3" align="center" bgcolor="#00008b">
                <h2 style="font-family: 'Brush Script MT'; color: white"> TÍNH TIỀN KARAOKE</h2>
            </td>
        </tr>
        <tr>
            <td> GIỜ BẮT ĐẦU </td>
            <td> <input type="text" name="gbd"
                        value="<?php if(isset($_POST['gbd'])) echo $_POST['gbd']; ?>"/></td>
            <td> (H) </td>
        </tr>
        <tr>
            <td> GIỜ KẾT THÚC</td>
            <td> <input type="text" name="gkt"
                        value="<?php if(isset($_POST['gkt'])) echo $_POST['gkt']; ?>"/></td>
            <td> (H) </td>
        </tr>
        <tr>
            <td> TIỀN THANH TOÁN</td>
            <td> <input type="text" name="ttt" disabled="1"
                        value="<?php echo $_ttt ?>"/></td>
            <td> (VND) </td>
        </tr>
        <tr>
            <td colspan="3" align="center"> <input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>

</form>
</body>
</html>