<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <?php
    include './SQL/config.php';
    session_start();
    $message="";
    if(count($_POST)>0) {
        $result = mysqli_query($conn,"SELECT * FROM nguoidung WHERE EMAILND='" . $_POST["email"] . "' and PASSWORD = '". $_POST["psw"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            $_SESSION["email"] = $row['EMAILND'];
            $_SESSION["psw"] = $row['PASSWORD'];
        } else {
            $message = "*Mật khẩu và tài khoản không hợp lệ!";
        }
    }
    if(isset($_SESSION["email"])) {
        header("Location:index.php");
    }
    ?>

    <body style="background-repeat:no-repeat; background-size: cover;background-image: url('https://images.unsplash.com/photo-1593642634443-44adaa06623a?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1325&q=80')" >
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-primary"><h2 class="text-center font-weight-light my-4 text-light">ĐĂNG NHẬP</h2></div>
                                    <div class="card-body">
                                        <form method="post" action="">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" type="email" required/>
                                                <label for="email">Nhập email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="psw" type="password" required/>
                                                <label for="psw">Nhập mật khẩu</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <p style="color: red"><?php echo $message?></p>

                                                <input class="form-check-input" name="inputRememberPassword" type="checkbox" value=""/>
                                                <label class="form-check-label" for="inputRememberPassword">Nhớ Mật khẩu</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Quên mật khẩu?</a>
                                                <input class="btn btn-primary" type="submit" name="submit" value="Đăng nhập">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Đăng ký tài khoản mới</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
