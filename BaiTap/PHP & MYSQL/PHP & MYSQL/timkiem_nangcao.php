<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container {
            background-color: #ede9e5;
        }

        img {
            width: 100px;
            height: 100px;
            margin-left: auto;
        }

        .table-content,th,tr,td{
            border: 2px solid red;
            text-align: justify;
        }

        th{
            background-color: #d69a6733;
        }

        h2,h3{
            color: #ff5200;
            font-weight: bold;
            text-align: center;
        }

        h2{
            color: #d22454a8;
        }
    </style>
</head>
<body>
    <?php
        include 'config.php';

        $query = "SELECT * FROM sua";
        $result = $conn->query($query);

        $loai_sua = "SELECT * FROM loai_sua";
        $drop_loai_sua = $conn->query($loai_sua);

        $hang_sua = "SELECT * FROM hang_sua";
        $drop_hang_sua = $conn->query($hang_sua);

        if(!$result) echo 'Cau truy van bi sai';

        if(isset($_POST['submit'])){
            $ten_sua = $_POST['ten_sua'];
            $loaisua = $_POST['loaisua'];
            $loaihang = $_POST['loaihang'];
            $num = 0;

            if(isset($loaisua) && !empty($loaisua) && empty($loaihang) && empty($ten_sua)){
                $query = "SELECT * FROM sua,loai_sua,hang_sua WHERE sua.Ma_hang_sua = hang_sua.Ma_hang_sua AND sua.Ma_loai_sua = loai_sua.Ma_loai_sua AND Ten_loai = '$loaisua'";
                $result = $conn->query($query);
                $num = $result->num_rows;
                if(!$result) echo 'Cau truy van bi sai';
            }
            else if(isset($loaihang) && !empty($loaihang) && empty($loaisua) && empty($ten_sua)){
                $query = "SELECT * FROM sua,loai_sua,hang_sua WHERE sua.Ma_hang_sua = hang_sua.Ma_hang_sua AND sua.Ma_loai_sua = loai_sua.Ma_loai_sua AND Ten_hang_sua = '$loaihang'";
                $result = $conn->query($query);
                $num = $result->num_rows;
                if(!$result) echo 'Cau truy van bi sai';
            }
            else if(isset($ten_sua) && !empty($ten_sua) && empty($loaihang) && empty($loaisua)){
                $query = "SELECT * FROM sua,loai_sua,hang_sua WHERE sua.Ma_hang_sua = hang_sua.Ma_hang_sua AND sua.Ma_loai_sua = loai_sua.Ma_loai_sua AND Ten_sua LIKE '%$ten_sua%'";
                $result = $conn->query($query);
                $num = $result->num_rows;
                if(!$result) echo 'Cau truy van bi sai';
            }
            else{
                $query = "SELECT * FROM sua,loai_sua,hang_sua WHERE sua.Ma_hang_sua = hang_sua.Ma_hang_sua AND sua.Ma_loai_sua = loai_sua.Ma_loai_sua AND Ten_sua = '$ten_sua' AND Ten_loai = '$loaisua' AND Ten_hang_sua = '$loaihang'";
                $result = $conn->query($query);
                $num = $result->num_rows;
                if(!$result) echo 'Cau truy van bi sai';
            }
            
            if($num != 0)
                $thongbao = 'Có '.$num.' được tìm thấy!';
            else 
                $thongbao = 'Không tìm thấy sản phẩm này';
        }
    ?>

    <div class="container col-md-8">
        <div class="row">
            <h2>TÌM KIẾM THÔNG TIN SỮA</h2>
            <form method="post" action class="col-md-12 main" aria-label=".form-select-lg example" style="display: flex; justify-content: center; background:white;">
                <div class="container" style="background: white;">
                    <div class="row" style="justify-content:center;">
                        <div class="col-md-4 mt-2" style="display: flex;">
                            <span class="fw-bold mt-2">Loại sữa: </span>
                            <select class="form-select mx-3" name="loaisua" aria-label=".form-select-sm example" style="width: 150px; height: 40px;">
                                <option value='' selected>Mặc định</option>
                                <?php 
                                    if($drop_loai_sua->num_rows != 0){
                                        while($row = $drop_loai_sua->fetch_array()){ ?>
                                            <?php
                                                if($row['Ten_loai'] == $loaisua){ ?>
                                                    <option name="loaisua" value="<?= $row['Ten_loai'] ?>" selected><?= $row['Ten_loai'];?></option>
                                                <?php } else { ?>
                                                    <option name="loaisua" value="<?= $row['Ten_loai'] ?>"><?= $row['Ten_loai'];?></option>
                                                <?php } ?>
                                        <?php }
                                    }
                                ?>
                            </select>
                        </div>   
                        <div class="col-md-4 mt-2" style="display: flex;">
                            <span class="fw-bold mt-2">Hãng sữa:</span>
                            <select class="form-select mx-2" name="loaihang" style="width: 150px; height: 40px;">
                                <option value='' selected>Mặc định</option> 
                                <?php 
                                    if($drop_hang_sua->num_rows != 0){
                                        while($row = $drop_hang_sua->fetch_array()){ ?>
                                            <?php
                                                if($row['Ten_hang_sua'] == $loaihang){ ?>
                                                    <option name="loaihang" value="<?= $row['Ten_hang_sua'] ?>" selected><?= $row['Ten_hang_sua'];?></option>
                                                <?php } else { ?>
                                                    <option name="loaihang" value="<?= $row['Ten_hang_sua'] ?>"><?= $row['Ten_hang_sua'];?></option>
                                                <?php } ?>
                                        <?php }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6 mt-3" style="display: flex;">
                            <span class="fw-bold mt-2" style="width:100px;">Tên sữa: </span>
                            <input type="text" class="form-control" width="200px" name="ten_sua" value="<?php if(isset($ten_sua)) echo $ten_sua; ?>">
                        </div>
                        <div class="col-md-2 mt-3">
                            <button class="btn btn-success" name="submit" type="submit" value="">Tìm kiếm</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <center class="mt-2"><b><?php if (isset($thongbao)) echo $thongbao; ?></b></center>
        <div class="col-md-12 mt-5">
            <table class="table-content" align="center" border="1" cellspacing="0" width="600px">
                <?php
                    if($result->num_rows != 0) {
                        while($row = $result->fetch_array()) { ?>
                            <?php 
                                $hinh = $row['Hinh']; 
                                $thongbao = $result->num_rows;
                            ?>
                            <tr>
                                <th colspan="2">
                                    <h3 class="text-center"><?= $row['Ten_sua']; ?></h3>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <img src="./images/<?= $hinh ?>" alt="">
                                </td>
                                <td>
                                    <p><b>Thành phần dinh dưỡng:</b></p>
                                    <p><?= $row['TP_Dinh_Duong'] ?></p>
                                    <p><b>Lợi ích:</b></p>
                                    <p><?= $row['Loi_ich'] ?></p>
                                    <span class="text-right"> 
                                        <b>Trọng lương: </b><?= $row['Trong_luong'].' gr'; ?> -
                                        <b>Đơn giá: </b><?= $row['Don_gia'].' VNĐ'; ?>
                                    </span>
                                </td>
                            </tr>
                        <?php } 
                    }
                ?> 
            </table>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>