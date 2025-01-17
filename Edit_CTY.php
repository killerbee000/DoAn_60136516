<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DSVL</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    </head>
    <body class="sb-nav-fixed">
    <?php
    include 'SQL/config.php';

    $macty_ = $_GET['macty'];
    $congty = "SELECT * FROM congty WHERE MACTY = '$macty_'";
    $result = $conn->query($congty);
    $mess = '';

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $macty = $row['MACTY'];
        $tencty = $row['TENCTY'];
        $slnv = $row['SLNV'];
        $diachi = $row['DIACHI'];
        $quocgia = $row['QUOCGIA'];
        $email = $row['EMAIL'];
        $sdt = $row['SDT_CT'];
        $anh = $row['Anh'];
    } else {
        $mess = 'Error';
    }

    if (isset($_POST['submit'])) {
        $macty = $_POST['MACTY'];
        $tencty = $_POST['TENCTY'];
        $slnv = $_POST['SLNV'];
        $diachi = $_POST['DIACHI'];
        $quocgia = $_POST['QUOCGIA'];
        $email = $_POST['EMAIL'];
        $sdt = $_POST['SDT_CT'];
        $anh = $_POST['ANH'];

        $updatequery = "UPDATE congty SET MACTY='$macty',TENCTY='$tencty',SLNV='$slnv',DIACHI='$diachi',QUOCGIA='$diachi',EMAIL='$email',SDT_CT='$sdt',Anh = '$anh' WHERE MACTY = '$macty_'";
        $result = $conn->query($updatequery);
        if($result = TRUE)
        {
            header("Location: DSCTY.php");
        }
        else
        {
            $mess = "Cập nhật không thành công";
        }
    }

    ?>
    <?php include 'Header.php' ?>
    <body>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="">Chỉnh sửa công ty</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">TRANG CHỦ</a></li>
                        <li class="breadcrumb-item active">Danh sách công việc</li>
                    </ol>
                    <div id="layoutAuthentication">
                        <div id="layoutAuthentication_content">
                            <main>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                <div class="card-header bg-success"><h2 class="text-center font-weight-light my-4 text-light">CẬP NHẬT CÔNG TY</h2></div>
                                                <div class="card-body">
                                                    <form action="" method="post">
                                                        <div class="row mb-3">
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-3 mb-md-0">
                                                                    <input class="form-control" name="MACTY" type="text" value="<?php if(isset($macty)) echo $macty?>" required/>
                                                                    <label for="MACTY">Mã công ty</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating">
                                                                    <input class="form-control" name="TENCTY" type="text" value="<?php if(isset($tencty)) echo $tencty?>" required />
                                                                    <label for="TENCV">Tên công ty</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-3 mb-md-0">
                                                                    <input class="form-control" name="SLNV" type="number" value="<?php if(isset($slnv)) echo $slnv?>" required/>
                                                                    <label for="SLNV">Số lượng nhân viên</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-3 mb-md-0">
                                                                    <input class="form-control" name="QUOCGIA" type="text" value="<?php if(isset($quocgia)) echo $quocgia?>" required/>
                                                                    <label for="QUOCGIA">Quốc gia</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-3 mb-md-0">
                                                                    <input class="form-control" name="DIACHI" type="text" value="<?php if(isset($diachi)) echo $diachi?>" required/>
                                                                    <label for="DIACHI">Địa chỉ</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-3 mb-md-0">
                                                                    <input class="form-control" name="EMAIL" type="text" value="<?php if(isset($email)) echo $email?>" required/>
                                                                    <label for="EMAIL">Email</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <div class="form-floating mb-3 mb-md-0">
                                                                <input class="form-control" name="SDT_CT" type="text" value="<?php if(isset($sdt)) echo $sdt?>" required/>
                                                                <label for="SDT_CT">Số điện thoại công ty:</label>
                                                            </div>
                                                        </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-3 mb-md-0">
                                                                    <input class="form-control" name="ANH" type="text" value="<?php if(isset($anh)) echo $anh?>" required/>
                                                                    <label for="ANH">Ảnh:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="text-danger"><?php echo $mess; ?></p>
                                                        <div class="mt-4 mb-0">
                                                            <input class="btn btn-primary" type="submit" name="submit" value="Cập nhật">
                                                            <input class="btn btn-primary" type="submit" value="Thử lại" value="<?php header("Location: Edit_CTY.php");?>">
                                                            <a href="DSCTY.php"> Quay lại trang chủ </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>

                        </div>

                    </div>
            </main>
            <?php include 'footer.php'?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
