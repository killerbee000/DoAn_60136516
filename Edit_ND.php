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

    $tennd = $_GET['tennd'];
    $nguoidung = "SELECT * FROM nguoidung WHERE TENND = '$tennd'";
    $result = $conn->query($nguoidung);
    $mess = '';

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $tennd_ = $row['TENND'];
        $email = $row['EMAILND'];
        $pass = $row['PASSWORD'];
        $sdt = $row['SDTND'];
    } else {
        $mess = 'Error';
    }

    if (isset($_POST['submit'])) {
        $tennd1_ = $_POST['TENND'];
        $email = $_POST['EMAILND'];
        $pass = $_POST['PASSWORD'];
        $sdt = $_POST['SDTND'];

        $updatequery = "UPDATE nguoidung SET TENND='$tennd1_',EMAILND='$email',PASSWORD='$pass',SDTND='$sdt' WHERE TENND = '$tennd_'";
        $result = $conn->query($updatequery);
        if($result = TRUE)
        {
            header("Location: DSND.php");
        }
        else
        {
            $mess = "Cập nhật không thành công";
        }
    }

    ?>


    <!-- Navbar -->
    <?php include 'Header.php' ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Chỉnh sửa người dùng</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">TRANG CHỦ</a></li>
                            <li class="breadcrumb-item active">Danh sách người dùng</li>
                        </ol>
                        <div id="layoutAuthentication">
                            <div id="layoutAuthentication_content">
                                <main>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                    <div class="card-header bg-success"><h2 class="text-center font-weight-light my-4 text-light">CẬP NHẬT NGƯỜI DÙNG</h2></div>
                                                    <div class="card-body">
                                                        <form action="" method="post">
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <input class="form-control" name="TENND" type="text" value="<?php if(isset($tennd_)) echo $tennd_?>" required/>
                                                                        <label for="TENND">Tên người dùng</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating">
                                                                        <input class="form-control" name="EMAILND" type="text" value="<?php if(isset($email)) echo $email?>" required />
                                                                        <label for="EMAILND">Tên công việc</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <input class="form-control" name="PASSWORD" type="text" value="<?php if(isset($pass)) echo $pass?>" required/>
                                                                        <label for="PASSWORD">Password</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <input class="form-control" name="SDTND" type="text" value="<?php if(isset($sdt)) echo $sdt?>" required/>
                                                                        <label for="SDTND">Số điện hoại</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <p class="text-danger"><?php echo $mess; ?></p>
                                                            <div class="mt-4 mb-0">
                                                                <p><?php if(isset($error_result)) echo $error_result ?></p>
                                                                <input class="btn btn-success" type="submit" name="submit" value="Cập nhật">
                                                                <input class="btn btn-success" type="submit" value="Thử lại" value="<?php header("Location: Edit_ND.php");?>">
                                                                <a href="DSVL.php"> Quay lại trang chủ </a>
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
