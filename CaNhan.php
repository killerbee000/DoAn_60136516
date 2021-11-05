<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/style_1.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    </head>
    <body class="sb-nav-fixed">
    <?php
    include './SQL/config.php';
    $query = 'SELECT * FROM congviec';
    $result = $conn->query($query);
    if(!$result) echo 'Cau truy van bi sai';
    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-blue bg-light">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php"><b>itviec.com</b></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">

            </div>
        </form>

    </nav>

    <!-- Navbar -->
    <?php include 'Header.php' ?>
    <div id="layoutSidenav_content"  style="background-size: cover;background-image: url(https://images.unsplash.com/photo-1467803738586-46b7eb7b16a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80)">
                <main>
                        <div class="container-fluid mt-8"">
                            <div class="row mt-lg-4 justify-content-center" >
                                <div class="col-md-7">
                                    <div class="card p-3 py-4" >
                                        <div class="text-center"> <img src="assets/img/avt.jpg" width="100" class="rounded-circle"> </div>
                                        <div class="text-center mt-3"> <span class="bg-secondary p-1 px-4 rounded text-white">Admin</span>
                                            <h4 class="mt-3 mb-0">Nguyễn Tấn Phát</h4>
                                            <h6 class="mt-3 mb-0">  <i class="bi bi-person-circle"></i> MSSV: 60136516 | Lớp: 60CNTT-2</h6>
                                            <h6 class="mt-3 mb-1">  <i class="bi bi-pen-fill"></i> Đang là sinh viên CNTT năm 4</h6>
                                            <h6 class="mt-3 mb-2">  <i class="bi bi-house-door-fill"></i> Học tại trường ĐH Nha Trang</h6>
                                            <div class="buttons"> <button class="btn btn-outline-primary px-4"><a href="https://www.facebook.com/norararan/">Liên hệ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
