<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sản phẩm</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <style>
        img {
            width: 100px;
            height: 100px;
            margin-left: auto;
        }

        table {
            border: 4px solid red;
        }

        span,a{
            float: right;
        }

        h2{
            color: #ff5200;
            font-weight: bold;
        }

        th{
            background-color: #ff760033;
        }

        .col-md-2{
            text-align: center;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <?php
        include 'config.php';
        $masua = $_GET['masp'];
        $query = "SELECT * FROM sua WHERE Ma_sua = '$masua' ";
        $result = $conn->query($query);

        if(!$result) echo 'Cau truy van bi sai';
        $row = $result->fetch_assoc();

        $Hinh = $row['Hinh'];
        $Ten_sua = $row['Ten_sua'];
        $TP_Dinh_Duong = $row['TP_Dinh_Duong'];
        $Loi_ich = $row['Loi_ich'];
        $Trong_luong = $row['Trong_luong'];
        $Don_gia = $row['Don_gia'];
    ?>

    <table align="center" border="1" cellpadding="5" width="500px">
        <tr>
            <th colspan="2">
                <h2 class="text-center"><?= $Ten_sua; ?></h2>
            </th>
        </tr>
        <tr>
            <td>
                <img src="./images/<?= $Hinh ?>" alt="">
            </td>
            <td>
                <p><b>Thành phần dinh dưỡng:</b></p>
                <p><?= $TP_Dinh_Duong; ?></p>
                <p><b>Lợi ích:</b></p>
                <p><?= $Loi_ich; ?></p>
                <span class="text-right"> 
                    <b>Trọng lương: </b><?= $Trong_luong.' gr'; ?> -
                    <b>Đơn giá: </b><?= $Don_gia.' VNĐ'; ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <a href="javascript:window.history.back(-1);">Quay về</a>
            </td>
        </tr>
    </table>
    <?php $conn->close(); ?>
</body>
</html>