<nav class="sb-topnav navbar navbar-expand navbar-blue bg-light">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3 mt-3 text-danger" href="index.php"><h3 style="font-family: Kankin">ITVIEC.COM</h3></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">

        </div>
    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="CaNhan.php">Thông tin Cá Nhân </a></li>
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
                    <hr class="dropdown-divider" />
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Bài Tập Cá Nhân
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapse1" aria-expanded="false" aria-controls="pagesCollapse1">
                                Bài Tập Form
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapse1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="BaiTap/BaiTap_Form/Bai1_2/HCN_1.php">Bài 1</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_Form/Bai2/Form2.php">Bài 2</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_Form/Bai3/Bai3.php">Bài 3</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_Form/Bai4/Bai4.php">Bài 4</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_Form/Bai5/Baitap5.php">Bài 5</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_Form/Bai6_7/Baitap6.php">Bài 6</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_Form/Bai6_7/Trang2.php">Bài 7</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_Form/Bai_8.php">Bài 8</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapse2" aria-expanded="false" aria-controls="pagesCollapse2">
                                Bài Tập Mảng
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapse2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="./BaiTap/BaiTap_ARRAY/Bai1/1.php">Bài 1</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_ARRAY/Bai2/Bai2.php">Bài 2</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_ARRAY/Bai3/Bai3.php">Bài 3</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_ARRAY/Bai4/4.php">Bài 4</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_ARRAY/Bai5/5.php">Bài 5</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_ARRAY/Bai6/6.php">Bài 6</a>
                                    <a class="nav-link" href="./BaiTap/BaiTap_ARRAY/Bai7/7.php">Bài 7</a>

                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapse3" aria-expanded="false" aria-controls="pagesCollapse3">
                                Bài Tập SQL
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapse3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="./BaiTap/MYSQL/MYSQL_/2_1.php">Bài 1</a>
                                    <a class="nav-link" href="./BaiTap/MYSQL/MYSQL_/2_2.php">Bài 2</a>
                                    <a class="nav-link" href="./BaiTap/MYSQL/MYSQL_/2_3.php">Bài 3</a>
                                    <a class="nav-link" href="./BaiTap/MYSQL/MYSQL_/2_4.php">Bài 4</a>
                                    <a class="nav-link" href="./BaiTap/MYSQL/MYSQL_/2_5.php">Bài 5</a>
                                    <a class="nav-link" href="./BaiTap/MYSQL/MYSQL_/2_6.php">Bài 6</a>
                                    <a class="nav-link" href="./BaiTap/MYSQL/MYSQL_/2_8.php">Bài 8</a>
                                    <a class="nav-link" href="./BaiTap/MYSQL/MYSQL_/2_9.php">Bài 9</a>

                                </nav>
                            </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>