
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2 style="background-color: silver;width: 400px;"> Dien Tich VA CHU VI HINH TRON: </h2>
<form method="POST" style="background-color: #00bfbf; width: 400px;">
    Chieu Dai: <br>
    <input type="number" name="bankinh" required="1">
    <br>
    <?php
    $pi = 3.14;
    $bk = $_POST['bankinh'];
    $chuvi = 2 * $pi * $bk;
    $dientich = $pi * pow($bk,2);

    echo "Dien tich: <br> <input type='number' value='$dientich' disabled='1'/> ";
    echo "<br>Chu vi: <br> <input type='number' value='$chuvi' disabled='1'/> ";
    ?>
    <br>
    <input type="submit" value="submit">
</form>

</body>
</html>

