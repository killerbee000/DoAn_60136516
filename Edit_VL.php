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
    include './SQL/config.php';
    //Dropdown list MACTY
    $query = "SELECT * FROM congty";
    $result1 = $conn->query($query);

    $options ='';
    while($row0 = mysqli_fetch_array($result1))
    {
        $options = $options."<option>$row0[0]</option>";
    }
    ?>

    <?php
    include 'SQL/config.php';

    $macv_ = $_GET['macv'];
    $congviec = "SELECT * FROM congviec WHERE MACV = '$macv_'";
    $result = $conn->query($congviec);
    $mess = '';

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $macv = $row['MACV'];
        $tencv = $row['TENCV'];
        $slnv = $row['SL'];
        $nn = $row['NN'];
        $macty = $row['MACTY'];
        $mucluong = $row['MUCLUONG'];
        $tgketthuc = $row['TGKETTHUC'];
    } else {
        $mess = 'Error';
    }

    if (isset($_POST['submit'])) {
        $macv = $_POST['MACV'];
        $tencv = $_POST['TENCV'];
        $slnv = $_POST['SL'];
        $nn = $_POST['NN'];
        $macty = $_POST['MACTY'];
        $mucluong = $_POST['MUCLUONG'];
        $tgketthuc = $_POST['TGKETTHUC'];

        $updatequery = "UPDATE congviec SET MACV='$macv',TENCV='$tencv',SL='$slnv',NN='$nn',MACTY='$macty',MUCLUONG='$mucluong',TGKETTHUC='$tgketthuc' WHERE MACV = '$macv_'";
        $result = $conn->query($updatequery);
        if($result = TRUE)
        {
            header("Location: DSVL.php");
        }
        else
        {
            $mess = "Cập nhật không thành công";
        }
    }

    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-blue bg-light">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php"><b>itviec.com</b></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="CaNhan.php">Thông tin Cá Nhân </a></li>
                    <li><a class="dropdown-item" href="#!">Bài tập cá nhân</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="logout.php">Đăng Xuất</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Navbar -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav bg-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">Danh sách trang</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="bi bi-house-door-fill"></i></div>
                            Trang chủ
                        </a>
                        <hr class="dropdown-divider" />
                        <a class="nav-link" href="DSVL.php">
                            <div class="sb-nav-link-icon"><i class="bi bi-briefcase-fill"></i>
                            </div>
                            Danh sách Việc làm
                        </a>
                        <hr class="dropdown-divider" />
                        <a class="nav-link" href="DSCTY.php">
                            <div class="sb-nav-link-icon"><i class="bi bi-building"></i>
                                </i></div>
                            Danh sách Công Ty
                        </a>

                    </div>
                </div>
            </nav>
        </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Chỉnh sửa công việc</h1>
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
                                                    <div class="card-header bg-primary"><h2 class="text-center font-weight-light my-4 text-light">CẬP NHẬT CÔNG VIỆC</h2></div>
                                                    <div class="card-body">
                                                        <form action="" method="post">
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <input class="form-control" name="MACV" type="text" value="<?php if(isset($macv)) echo $macv?>" required/>
                                                                        <label for="MACV">Mã công việc</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating">
                                                                        <input class="form-control" name="TENCV" type="text" value="<?php if(isset($tencv)) echo $tencv?>" required />
                                                                        <label for="TENCV">Tên công việc</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <input class="form-control" name="SL" type="number" value="<?php if(isset($sl)) echo $sl?>" required/>
                                                                        <label for="SL">Số lượng ứng tuyển</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <input class="form-control" name="NN" type="text" value="<?php if(isset($nn)) echo $nn?>" required/>
                                                                        <label for="NN">Ngôn ngữ</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <select class="form-select" name="MACTY" aria-label="Default select example">
                                                                            <option selected disabled>Chọn công ty</option>
                                                                            <?php echo $options;?>
                                                                        </select>
                                                                        <label for="MACTY">Mã công ty</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <input class="form-control" name="MUCLUONG" type="text" value="<?php if(isset($mucluong)) echo $mucluong?>" required />
                                                                        <label for="MUCLUONG">Mức lương</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-3 mb-md-0">
                                                                    <input class="form-control" name="TGKETTHUC" type="date" value="<?php if(isset($tgkt)) echo $tgkt?>" required/>
                                                                    <label for="TGKETTHUC">Hạn ứng tuyển:</label>
                                                                </div>
                                                            </div>
                                                            <p class="text-danger"><?php echo $mess; ?></p>
                                                            <div class="mt-4 mb-0">
                                                                <p><?php if(isset($error_result)) echo $error_result ?></p>
                                                                <input class="btn btn-primary" type="submit" name="submit" value="Cập nhật">
                                                                <input class="btn btn-primary" type="submit" value="Thử lại" value="<?php header("Location: Edit_VL.php");?>">
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
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
