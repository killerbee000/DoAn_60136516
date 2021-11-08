<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trang Chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>
<?php
include './SQL/config.php';
$query = "SELECT * FROM congty";
$result1 = $conn->query($query);

$options ='';
while($row0 = mysqli_fetch_array($result1))
{
    $options = $options."<option>$row0[1]</option>";
}

$result2 = mysqli_query($conn, 'select count(MACTY) as total from congty');
$row = mysqli_fetch_assoc($result2);
$total_records = $row['total'];

$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 8;

$total_page = ceil($total_records / $limit);

if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}

$start = ($current_page - 1) * $limit;

$result2 = $conn->query("SELECT * FROM congty LIMIT $start, $limit");

if(!$result2) echo 'Cau truy van bi sai';

?>
    <body>
    <?php include 'Header.php' ?>
        <div id="layoutSidenav_content">
            <main class="container-fluid">
                    <header  style="background-size: cover;background-image: url(https://images.unsplash.com/photo-1467803738586-46b7eb7b16a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80)" class="py-5 bg-light border-bottom mb-4">
                        <div class="container">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder text-light">FIND YOUR JOB - ITVIEC.COM</h1>
                                <p class="lead mb-0 text-light">Website tìm việc uy tín nhất Việt Nam</p>
                                <form method="post" action="" class="mt-5">
                                    <div class="form-group row justify-content-center">
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="inputPassword" placeholder="Nhập công việc bạn cần tìm...">
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-select" name="MACTY">
                                                <option selected>Chọn Công Ty</option>
                                                <?php echo $options;?>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="button" class="form-control btn-primary" name="submit" placeholder="" value="Tìm">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </header>
                    <div class="container-fluid justify-content-center d-flex">
                        <div class="col-xl-9">
                            <section class="py-3">
                                <div class="container px-4 px-lg-5">
                                    <h1 class="mb-4 text-primary"> Top Employers ――――――――――――――</h1>

                                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                        <?php

                                        while ($row = $result2->fetch_array()) { ?>
                                            <div class="col mb-4">
                                                    <div class="card">
                                                      <a href="#" class="ripple"> <img class="img-thumbnail" style="width:auto;height:200px;" src="<?= $row['Anh'] ?>"/></a>
                                                        <div class="card-body">
                                                            <div class="text-center text-dark">
                                                                <b><span><?= $row['TENCTY'] ?></span></b>
                                                                <p><?= "Địa chỉ: ".$row['DIACHI'] ?></p>
                                                                <p><?= "Quốc gia: ".$row['QUOCGIA']?></p>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="text-center"><a class="btn btn-sm btn-outline-primary mt-auto" href="#">Xem chi tiết</a></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <center>
                                        <?php

                                        //Trở về
                                        if ($current_page > 1 && $total_page > 1){
                                            echo '<a href="index.php?page='.($current_page-1).'" class="btn btn-outline-primary text-dark" role="button">Trang Đầu</a> ';
                                        }

                                        //Số trang
                                        for ($i = 1; $i <= $total_page; $i++){
                                            if ($i == $current_page){
                                                echo '<span class="btn btn-primary">'.$i.'</span> ';
                                            }
                                            else{
                                                echo '<a class="btn btn-outline-primary" href="index.php?page='.$i.'">'.$i.'</a> ';
                                            }
                                        }

                                        //Cuối trang
                                        if ($current_page < $total_page && $total_page > 1){
                                            echo '<a href="index.php?page='.($current_page+1).'" class="btn btn-outline-primary text-dark" role="button">Trang Cuối</a>';
                                        }
                                        ?>
                                    </center>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
<?php include 'footer.php'?>

</html>
