<?php include './SQL/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>tao nguoi dung</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<?php
if (isset($_POST['submit'])) {
    $tennd1_ = $_POST['TENND'];
    $email = $_POST['EMAILND'];
    $pass = $_POST['PASSWORD'];
    $sdt = $_POST['SDTND'];

    $checktontai_ = "SELECT * FROM nguoidung WHERE TENND = '$tennd1_' ";
    $result_ = $conn->query($checktontai_);

    if($result_->num_rows > 0)
    {
        $error_result = "Người sử dụng đã đăng ký đã có trên website";
    }
    else
    {
        $query_ = "INSERT INTO nguoidung (TENND, EMAILND, PASSWORD, SDTND) VALUES ('$tennd1_','$email','$pass','$sdt')";
        $result_ = $conn->query($query_);
        $error_result = "Đã tạo thành công!";
        if (!$result_) {
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
                            <div class="card-header"><h2 class="text-center font-weight-light my-4">TẠO NGƯỜI DÙNG MỚI</h2></div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="TENND" type="text" value="<?php if(isset($email)) echo $email?>" required/>
                                                <label for="TENND">Tên người dùng</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" name="PASSWORD" type="text" value="<?php if(isset($pass)) echo $pass?>" required />
                                                <label for="PASSWORD">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="SDTND" type="text" value="<?php if(isset($sdt)) echo $sdt?>" required/>
                                                <label for="SDTND">Số điện thoại</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <p><?php if(isset($error_result)) echo $error_result ?></p>
                                        <input class="btn btn-primary" type="submit" name="submit" value="Tạo">
                                        <input class="btn btn-primary" type="submit" value="Thử lại" value="<?php header("Location: createCV.php");?>">
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

    <?php include 'footer.php'?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>