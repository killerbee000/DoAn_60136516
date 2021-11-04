<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Password Reset - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <?php
    include './SQL/config.php';
    if(isset($_POST['reset']))
        header("Location: password.php");
    if(isset($_POST['submit']))
    {
       $mess="";
       $email = $_POST['email'];

        $query = "SELECT * FROM nguoidung where EMAILND = '$email'";
        $result = $conn->query($query);

        if($result->num_rows > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $email_id=$row['EMAILND'];
            $password=$row['PASSWORD'];

            $to = $email_id;
            $subject = "Mật khẩu của assword ". $email_id;
            $txt = "Mật khẩu của bạn là: ".$password;
            $headers = "From: ITVIEC" . "\r\n" .
                "CC: ITVIEC_ReturnPassword";
            mail($to,$subject,$txt,$headers);
            $mess = "Đã gửi thành công.". " Check tại <a href='https://mail.google.com/'>Gmail</a>";
        }
        else
        {
            $mess = "*Email không tồn tại";
        }
    }
    ?>
    <body style="background-repeat:no-repeat; background-size: cover;background-image: url('https://images.unsplash.com/photo-1593642634443-44adaa06623a?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1325&q=80')">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-danger"><h3 class="text-center font-weight-light my-4 text-light">GỬI LẠI MẬT KHẨU</h3></div>
                                    <div class="card-body ">
                                        <div class="small mb-3 text-muted">Nhập email mà bạn muốn gửi mật khẩu về:</div>
                                        <form method="post" action="">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" type="email" placeholder="" />
                                                <label for="email">Nhập email</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-2 mb-2 btn-group">
                                               <input class="btn btn-dark" type="submit" name="submit" value="Gửi mật khẩu" >
                                                <input class="btn btn-outline-dark" type="submit" name="reset" value="Reset" >
                                            </div>
                                            <div class="d-flex text-danger justify-content-center">
                                                <p> <?php if(isset($mess)) echo $mess?></p>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-lg-3">
                                        <div class="d-flex justify-content-between"><a href="register.php">Đăng kí tài khoản mới</a>
                                            <a class="d-flex" href="login.php">Quay lại đăng nhập</a>
                                        </div>

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
