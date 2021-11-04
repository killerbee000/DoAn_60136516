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
include 'SQL/config.php';

?>
    <body>
    <nav class="sb-topnav navbar navbar-expand navbar-blue bg-light">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php"><b>itviec.com</b></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
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
            <main class="container-fluid">
                    <header  style="background-size: cover;background-image: url(https://images.unsplash.com/photo-1467803738586-46b7eb7b16a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80)" class="py-5 bg-light border-bottom mb-4">
                        <div class="container">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder text-light">ITVIEC.COM</h1>
                                <p class="lead mb-0 text-light">Website tìm việc uy tín nhất Việt Nam</p>
                            </div>
                        </div>
                    </header>

                    <div class="container-fluid justify-content-center d-flex">
                        <div class="col-xl-9">
                            <section class="py-3">
                                <div class="container px-4 px-lg-5">
                                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                        <?php
                                        $result = $conn->query("SELECT * FROM congty");

                                        while ($row = $result->fetch_array()) { ?>
                                            <div class="col mb-2">
                                                <a href="./detail.php?id=<?= $row['MACTY'] ?>" style="text-decoration: none;">
                                                    <div class="card">
                                                      <a href="#" class="ripple"> <img class="img-thumbnail rounded" style="float: end" src="<?= $row['Anh'] ?>"/></a>
                                                        <div class="card-body">
                                                            <div class="text-center text-dark">
                                                                <h5><span><?= $row['TENCTY'] ?></span></h5>
                                                                <p><?= "Địa chỉ: ".$row['DIACHI'] ?></p>
                                                                <p><?= "Quốc gia: ".$row['QUOCGIA']?></p>
                                                                <b class="text-muted">SĐT: <?= $row['SDT_CT'] ?></b>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="text-center"><a class="btn btn-sm btn-outline-success mt-auto" href="#">Thêm vào giỏ hàng</a></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
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
