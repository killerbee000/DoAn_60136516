<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    </head>
    <body class="sb-nav-fixed">

    <?php
    include './SQL/config.php';

    $query = 'SELECT * FROM congty';
    $result = $conn ->query($query);
    if(!$result) echo 'Cau truy van bi sai';
    ?>
    <?php include 'Header.php' ?>
    <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">DANH SÁCH CÔNG TY</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">TRANG CHỦ</a></li>
                            <li class="breadcrumb-item active">Danh sách Công Ty</li>
                        </ol>
                        <a class="mb-4 btn btn-primary" href="createCT.php" role="button">Nhập công ty mới</a>

                        <div class="card mb-4">
                            <div class="card-body">
                                <table class="table table-striped" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Logo</th>
                                            <th>Mã Công ty</th>
                                            <th>Tên Công ty</th>
                                            <th>Địa chỉ</th>
                                            <th>Số Lượng NV</th>
                                            <th>Quốc gia</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                        </tr>
                                    </thead>

                                    <?php if($result-> num_rows != 0){ ?>
                                        <?php while($row = $result->fetch_array()){ ?>
                                            <tr>
                                                <td><img src="<?= $row['Anh'] ?>" class="img-fluid rounded-start" alt="..." style="width: 100px"></td>                                                <td><?= $row['MACTY'] ?></td>
                                                <td><?= $row['TENCTY'] ?></td>
                                                <td><?= $row['DIACHI'] ?></td>
                                                <td><?= $row['SLNV'] ?></td>
                                                <td><?= $row['QUOCGIA'] ?></td>
                                                <td><?= $row['EMAIL'] ?></td>
                                                <td><?= $row['SDT_CT'] ?></td>
                                                <td><a class="btn btn-outline-danger" href="php/Xoa_CT.php?macty=<?= $row['MACTY'] ?>"> Xóa </a>
                                                    <a class="btn btn-outline-success" href="Edit_CTY.php?macty=<?= $row['MACTY'] ?>"> Chỉnh sửa </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>

                                    <?php $conn->close(); ?>
                                </table>
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
