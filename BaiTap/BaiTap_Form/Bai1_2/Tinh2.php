
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2 style="background-color: silver;width: 400px;"> Dien Tich HINH CHU NHAT: </h2>
<form method="POST" style="background-color: #00bfbf; width: 400px;">
    Chieu Dai: <br>
    <input type="number" name="cd" required="1">
    <br>
    Chieu Rong: <br>
    <input type="number" name="cr" required="1">
    <br>

    <?php

    $chd = $_POST['cd'];
    $chr = $_POST['cr'];

    $dientich = $chd * $chr;

    echo "Dien tich: <br> <input type='number' value='$dientich' disabled='1'/> ";
    ?>
    <br>
    <input type="submit" value="submit">
</form>



</body>
</html>

