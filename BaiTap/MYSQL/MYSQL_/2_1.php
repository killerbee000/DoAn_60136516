<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin hãng sửa</title>
</head>
<body>
    <?php 
        include 'config.php';
        $query = 'SELECT * FROM hang_sua';
        $result = $conn->query($query);
        if(!$result) echo 'Cau truy van bi sai';
    ?>
    
    <h2 style="text-transform:uppercase; color: rebeccapurple;
        text-align:center">Thông tin hãng sữa</h2>
    <table border="1" align="center" width="800px">
        <tr>
            <th>Mã HS</th>
            <th>Tên hãng sửa</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Email</th>
        </tr>

        <?php if($result-> num_rows != 0){ ?>
            <?php while($row = $result->fetch_array()){ ?>  
                <tr>
                    <td><?= $row['Ma_hang_sua'] ?></td>
                    <td><?= $row['Ten_hang_sua'] ?></td>
                    <td><?= $row['Dia_chi'] ?></td>
                    <td><?= $row['Dien_thoai'] ?></td>
                    <td><?= $row['Email'] ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
        
        <?php $conn->close(); ?>
    </table>
</body>
</html>