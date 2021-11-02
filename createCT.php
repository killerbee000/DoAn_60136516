<?php include './SQL/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>CREATE_COMPANY</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <?php
    //THÊM CTY
    if (isset($_POST['submit'])) {

        $macty = $_POST['MACTY'];
        $tencty = $_POST['TENCTY'];
        $slnv = $_POST['SLNV'];
        $diachi = $_POST['DIACHI'];
        $quocgia = $_POST['QUOCGIA'];
        $email = $_POST['EMAIL'];
        $sdt = $_POST['SDT_CT'];
        $anh = $_POST['ANH'];

        $checktontai_CTY = "SELECT * FROM congty WHERE MACTY = '$macty' AND SDT_CT = '$sdt' ";
        $result2 = $conn->query($checktontai_CTY);
        if($result2->num_rows > 0)
        {
            $error_result = "Công ty đã đăng ký trên website";
        }
        elseif (!(is_numeric($sdt) && $sdt > 0 && is_int(0+$sdt))) {
            $error_result = "Lỗi dữ liệu số điện thoại";
        }
        else
        {
            $query = "INSERT INTO congty(MACTY, TENCTY, DIACHI, SLNV, QUOCGIA, EMAIL, SDT_CT, Anh) VALUES ('$macty','$tencty','$diachi','$slnv','$quocgia','$email','$sdt','$anh')";
            $result2 = $conn->query($query);
            $error_result = "Đã tạo thành công!";
            if (!$result2) {
                $error_result = "Lỗi server!";
            }
        }
    }
    ?>

    <body style="background-repeat:no-repeat; background-size: cover; background-image: url('https://images.unsplash.com/photo-1593642634443-44adaa06623a?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1325&q=80')" />
    <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-primary"><h2 class="text-center font-weight-light my-4 text-light">NHẬP CÔNG TY MỚI</h2></div>
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
                                                        <label for="TENCTY">Tên công ty</label>
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
                                                        <input class="form-control" name="DIACHI" type="text" value="<?php if(isset($diachi)) echo $diachi?>" required/>
                                                        <label for="DIACHI">Địa chỉ</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="QUOCGIA" type="text" value="<?php if(isset($quocgia)) echo $quocgia?>" required/>
                                                        <label for="QUOCGIA">Quốc Gia</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="ANH" type="text" value="" required />
                                                        <label for="ANH">Ảnh đại diện</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="SDT_CT" type="text" value="<?php if(isset($sdt)) echo $sdt?>" required />
                                                        <label for="SDT_CT">Số điện thoại công ty</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="EMAIL" type="text" value="<?php if(isset($email)) echo $email?>" required />
                                                    <label for="EMAIL">Email</label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">

                                                <p><?php if(isset($error_result)) echo $error_result ?></p>
                                                <input class="btn btn-primary" type="submit" name="submit" value="Tạo">
                                                <input class="btn btn-primary" type="submit" value="Thử lại" value="<?php header("Location: createCT.php");?>">
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

        <?php include 'footer.php'?>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>