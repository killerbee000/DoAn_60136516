<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang</title>
</head>
<body>

<?php

$_stn = $_POST['stn'];
$_sth = $_POST['sth'];
$_pheptinh = $_POST['Pheptinh'];
$kq = "";

if(!preg_match('/[A-Za-z]/',$_stn && $_sth))
 {
     switch ($_pheptinh){
         case 'Cong':
             $kq = $_stn + $_sth; break;
         case 'Tru':
             $kq = $_stn - $_sth;break;
         case 'Nhan':
             $kq = $_stn*$_sth;break;
         case 'Chia':
               switch ($_stn && $_sth){
                   case 0:
                       $kq = "Khong chia duoc"; break;
                   default:
                       $kq = $_stn/$_sth;break;
               }
     }
}else $kq = "VUI LONG NHAP LAI";

?>

<form action="" method="POST">
    <table align="center" border="1">
        <tr>
            <td align="center" colspan="5" bgcolor="#6495ed"><h2>Chọn Phép tính cho hai số</h2></td>
        </tr>
        <tr>
            <td>Chọn Phép tính:</td>
            <td> <?php echo $_pheptinh; ?> </td>
        </tr>
        <tr>
            <td> Số Thứ Nhất: </td>
            <td colspan="4">
                <input type="text" name="stn" size="30" value="<?php echo $_stn;?>"></td>
        </tr>
        <tr>
            <td> Số Thứ Hai: </td>
            <td colspan="">
                <input type="text" name="sth" size="30" value="<?php echo $_sth;?>"></td>
        </tr>
        <tr>
            <td> Kết quả: </td>
            <td colspan="">
                <input type="text" name="kq" size="30" value="<?php echo $kq;?>"></td>
        </tr>
        <tr>
            <td align="center" colspan="2"> <a href="javascript:window.history.back(-1);">Tro ve trang truoc</a></td>
        </tr>
    </table>
</form>

</body>
</html>