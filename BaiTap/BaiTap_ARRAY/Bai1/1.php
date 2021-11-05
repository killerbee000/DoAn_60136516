<?php
if(isset($_POST['submit'])){
    (int)$n = $_POST['nums'];

    if(is_numeric($n) && $n > 0 && is_int(0+$n)) {
        //Tạo mảng
        $arr = array();
        for ($i = 0; $i < $n; $i++) {
            $x = rand(-100, 100);
            $arr[$i] = $x;
        }
        //Sắp xếp mảng tăng dần
        asort($arr);
        $ketqua = "Mang duoc tao la: \n" . implode(" ", $arr) . "\n";

        // Đếm số chẵn
        $count = 0;
        foreach ($arr as $j) {
            if ($j % 2 == 0) $count++;
        }
       $ketqua .= "Co $count so chan trong mang \n";

        //Đếm số < 100
        $count1 = 0;
        foreach ($arr as $j) {

            if($j < 100) $count1++;
        }
        $ketqua .= "Co $count1 so be hon 100 \n";

        //Tổng các phần tử trong mảng có giá trị âm
        $sum = 0;
        foreach ($arr as $j)
        {
            if($j < 0)
                $sum += $j;
        }
        $ketqua .= "Tong:  $sum \n";

        $index=0;
        foreach ($arr as $key=>$value){
            if ($value==0) $index=$key;
        }
        if ($index!=0) $ketqua.="vị trí của các phần tử trong mảng có giá trị bằng 0 la: $index \n";
        else $ketqua.="Khong co phan tu co gia tri bang 0 \n";
    }
    else
       echo $ketqua = "n không phai so ng duong";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="">
    <table border="1">
        <tr>
            <td> Nhập vào số:</td>
            <td><input type="text" name="nums" value="" placeholder="Nhap so vao..."></td>
        </tr>
        <tr>
            <td colspan="2">
                <textarea cols="50" rows="30" name="ketqua"><?php if (isset($_POST['ketqua'])) echo $ketqua?></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"> <input type="submit" name="submit"></td>
        </tr>
    </table>
</form>

</body>
</html>