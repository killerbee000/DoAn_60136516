<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <?php
    //THÊM CTY
    include './SQL/config.php';
    if (isset($_POST['submit'])) {

        $tennd = $_POST['tennd'];
        $sdtnd = $_POST['sdtnd'];
        $psw = $_POST['psw'];
        $email = $_POST['email'];

        $checktontai_ngdung = "SELECT * FROM nguoidung WHERE EMAILND = '$email' AND SDTND = '$sdtnd' ";
        $result2 = $conn->query($checktontai_ngdung);
        if($result2->num_rows > 0)
        {
            $error_result = "Email đã đăng ký trên website";
        }
        elseif (!(is_numeric($sdtnd) && $sdtnd > 0 && is_int(0+$sdtnd))) {
            $error_result = "Lỗi dữ liệu số điện thoại";
        }
        else
        {
            $query = "INSERT INTO nguoidung(TENND, EMAILND, SDTND, PASSWORD) VALUES ('$tennd','$email','$sdtnd','$psw')";
            $result2 = $conn->query($query);
            $error_result = "Đã tạo thành công!";
            if (!$result2) {
                $error_result = "Lỗi server!";
            }
        }
    }
    ?>


    <body style="background-repeat:no-repeat; background-size: cover;background-image: url('https://images.unsplash.com/photo-1593642634443-44adaa06623a?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1325&q=80')" />
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">ĐĂNG KÝ TÀI KHOẢN</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="tennd" type="text" placeholder="" />
                                                        <label for="tennd">Tên người dùng</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="sdtnd" type="text" placeholder="" />
                                                        <label for="sdtnd">Số điện thoại</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="psw" type="password" placeholder="" />
                                                        <label for="psw">Mật khẩu</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" name="email" type="email" placeholder="" />
                                                        <label for="email">Nhập email</label>
                                                    </div>
                                                </div>
                                                <div class="mt-4 mb-0">
                                                    <div class="d-grid">
                                                        <input class="btn btn-primary" type="submit" name="submit" value="Tạo">
                                                    </div>
                                                    <p style="color: red"><?php if(isset($error_result)) echo $error_result ?></p>

                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Đã có tài khoản?</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
