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

        tr:nth-child(odd){
            background: #efe0b2b3;
        }

        tr:nth-child(even) {
            color: red;
        }

        a{
            text-decoration: none;
        }

        center{
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php 
        include 'config.php';
        if(!isset($_GET['page'])){
            $_GET['page'] = 1;
        }
        $rowPerPage = 5;
        // vị trí của mẩu tin đầu tiên trên mỗi trang
        $offset = ($_GET['page'] - 1) * $rowPerPage;

        $query = "SELECT * FROM sua, hang_sua, loai_sua LIMIT 1,5";
        $result = $conn->query($query);
        if(!$result) echo 'Cau truy van bi sai';
        $i = 1;
        // tổng số kết quả trả về
        $numRows = mysqli_num_rows($result);
        // tổng số trang hiển thị
        $maxPage = ceil($numRows / $rowPerPage);
    ?>

    <h2 style="text-transform:uppercase; color: red; font-weight:bold;
        text-align:center">Thông tin sữa</h2>
    <table border="1" cellpadding="4" align="center" width="800px">
        <tr>
            <th>STT</th>
            <th>Tên sữa</th>
            <th>Hãng sữa</th>
            <th>Loại sữa</th>
            <th>Trọng lượng</th>
            <th>Đơn giá</th>
        </tr>

        <?php if($result-> num_rows != 0){ ?>
            <?php while($row = $result->fetch_array()){ ?>  
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['Ten_sua'] ?></td>
                    <td><?= $row['Ten_hang_sua'] ?></td>
                    <td><?= $row['Ten_loai'] ?></td>
                    <td><?= $row['Trong_luong'] ?></td>
                    <td><?= number_format($row['Don_gia'], 3, '.', '.').' VNĐ'; ?></td>
                </tr>
                <?php $i++; ?>
            <?php } ?>
        <?php } ?>
    </table>
    <center>
        <?php 
            $re = $conn->query('SELECT * FROM sua');
            $numRows = mysqli_num_rows($re);
            $maxPage = ceil($numRows/$rowPerPage) + 1;
            if ($_GET['page'] > 1){
                echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1)."> << </a>"; //gắn thêm nút Back
            }
            for ($i=1 ; $i<=$maxPage ; $i++)
            {
                if ($i == $_GET['page'])
                {
                    echo '<b> <u>'.$i.'</u> </b>'; //trang hiện tại sẽ được bôi đậm
                }
                else echo '<a href="2_4.php?page='.$i.'"> '.$i.' </a>';
            }
            if ($_GET['page'] < $maxPage) {
                echo '<a href="DoAn_60136516/BaiTap/MYSQL/MYSQL_/2_4.php?page='.($_GET['page'] + 1).'"> >> </a>';  //gắn thêm nút Next
            }
            $conn->close();
        ?>
    </center>
</body>
</html>