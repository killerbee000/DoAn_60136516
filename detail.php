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

//Option cho công cụ search
$options ='';
while($row0 = mysqli_fetch_array($result1))
{
    $options = $options."<option>$row0[1]</option>";
}

$id_ = $_GET['id'];

$comp = $conn->query("SELECT * FROM congty WHERE MACTY = '$id_'");

if ($comp->num_rows > 0) $row = $comp->fetch_assoc();

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
                <div class="container-fluid px-4 px-lg-5">
                    <div class="card mb-3 ms-5">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= $row['Anh'] ?>" class="w-100 img-thumbnail" style="height: 100%" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h1 class="card-title "> (<?= $row['MACTY'] ?>)  <?= $row['TENCTY'] ?></h1>
                                    <hr>
                                    <p class="card-text" style="font-size: 20px"><i class="bi bi-geo-alt-fill text-primary"></i>
                                         Địa chỉ: <?= $row['DIACHI'] ?></p>
                                    <p class="card-text" style="font-size: 20px"> <i class="bi bi-person-fill text-primary"></i>
                                        Số lượng nhân viên: <?= $row['SLNV'] ?></p>
                                    <p class="card-text" style="font-size: 20px"><i class="bi bi-envelope-fill text-primary"></i>
                                         Email: <?= $row['EMAIL'] ?></p>
                                    <p class="card-text" style="font-size: 20px"><i class="bi bi-telephone-fill text-primary"></i>
                                        Số điện thoại: <?= $row['SDT_CT'] ?></p>
                                    <p class="card-text" style="font-size: 20px">
                                        <i class="bi bi-stop-fill text-primary"></i>
                                        Quốc gia: <?= $row['QUOCGIA'] ?></p>
                                </div>
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
