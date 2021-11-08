<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin hãng sửa</title>
    <style>
        th{
            text-align: center;
            color: red;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background: #efe0b2b3;
        }
        img{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php 
        include 'config.php';
        $query = 'SELECT * FROM khach_hang';
        $result = $conn->query($query);
        if(!$result) echo 'Cau truy van bi sai';
    ?>

    <h2 style="text-transform:uppercase; color: rebeccapurple;
        text-align:center">Thông tin khách hàng</h2>
    <table border="1" align="center" width="800px">
        <tr>
            <th>Mã KH</th>
            <th>Tên khách hàng</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
        </tr>

        <?php if($result-> num_rows != 0){ ?>
            <?php while($row = $result->fetch_array()){ ?>  
                <tr>
                    <td><?= $row['Ma_khach_hang'] ?></td>
                    <td><?= $row['Ten_khach_hang'] ?></td>
                    <td align="center">
                        <?php if($row['Phai'] == 1){ ?>
                            <img src="https://image.flaticon.com/icons/png/512/146/146025.png" alt="">
                        <?php }
                        else echo '<img src="https://image.flaticon.com/icons/png/512/146/146007.png" alt="">';
                        ?>

                    </td>
                    <td><?= $row['Dia_chi'] ?></td>
                    <td><?= $row['Dien_thoai'] ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
        <?php $conn->close(); ?>
    </table>
</body>
</html>