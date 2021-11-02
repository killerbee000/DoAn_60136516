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
    session_start();
    include './SQL/config.php';
    if(isset($_POST['submit']))
    {
        $mess="";
        $email = $_POST['email'];
        $query = "SELECT * FROM nguoidung where EMAILND = $email";
        $result = $conn->query($query);

        $row = mysqli_fetch_assoc($result);
        $email_id=$row['EMAILND'];
        $password=$row['PASSWORD'];
        if($email == $email_id) {
            $to = $email;
            $subject = "Gửi password của $email_id";
            $txt = "Your password is : $password.";
            $headers = "From: ITVIEC@edu.com" . "\r\n" .
                "CC: ITVIEC@edu.com";
            mail($to,$subject,$txt,$headers);
        }
        else{
            $mess = 'Không hợp lệ!';
        }
    }
    ?>
    <body style="background-image: url('https://images.unsplash.com/photo-1593642634443-44adaa06623a?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1325&q=80')">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">GỬI LẠI MẬT KHẨU</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Nhập email mà bạn muốn gửi mật khẩu về:</div>
                                        <form method="post" action="">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" type="email" placeholder="" />
                                                <label for="email">Nhập email</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="login.php">Quay lại đăng nhập</a>
                                               <input class="btn btn-primary" type="submit" value="Gửi mật khẩu" >
                                                <p> <?php if(isset($mess)) echo $mess?></p>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Đăng kí tài khoản!?</a></div>
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
