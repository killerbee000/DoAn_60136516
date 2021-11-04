<?php include './SQL/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>CREATE_JOB</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <?php
    include './SQL/config.php';
    //Dropdown list MACTY
    $query = "SELECT * FROM congty";
    $result1 = $conn->query($query);

    $options ='';
    while($row0 = mysqli_fetch_array($result1))
    {
        $options = $options."<option>$row0[0]</option>";
    }

    ?>

    <?php
    //THÊM CV
    if (isset($_POST['submit'])) {
        $macv = $_POST['MACV'];
        $tencv = $_POST['TENCV'];
        $sl = $_POST['SL'];
        $nn = $_POST['NN'];
        $macty = $_POST['MACTY'];
        (int)$mucluong = $_POST['MUCLUONG'];
        $tgkt = $_POST['TGKETTHUC'];

        $checktontai = "SELECT * FROM congviec WHERE MACV = '$macv' ";
        $result = $conn->query($checktontai);

        $checktontai_mucluong = "SELECT * FROM congviec WHERE MUCLUONG = '$mucluong' ";
        $result3 = $conn->query($checktontai_mucluong);

        if($result->num_rows > 0)
        {
            $error_result = "Công việc đã có trên website";
        }
        elseif (!(is_numeric($mucluong)  && $mucluong > 0 && is_int(0+$mucluong))) {
            $error_result = "Mức lương không hợp lệ";
        }
        else
        {
            $query = "INSERT INTO congviec (MACV, TENCV, SL, NN, MACTY,MUCLUONG, TGKETTHUC) VALUES ('$macv','$tencv','$sl','$nn','$macty','$mucluong','$tgkt')";
            $result = $conn->query($query);
            $error_result = "Đã tạo thành công!";
            if (!$result) {
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
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">TẠO CÔNG VIỆC MỚI</h2></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="MACV" type="text" value="<?php if(isset($macv)) echo $macv?>" required/>
                                                        <label for="MACV">Mã công việc</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="TENCV" type="text" value="<?php if(isset($tencv)) echo $tencv?>" required />
                                                        <label for="TENCV">Tên công việc</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="SL" type="number" value="<?php if(isset($sl)) echo $sl?>" required/>
                                                        <label for="SL">Số lượng ứng tuyển</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="NN" type="text" value="<?php if(isset($nn)) echo $nn?>" required/>
                                                        <label for="NN">Ngôn ngữ</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
<!--                                                        <input class="form-control" name="MACTY" type="text" value="--><?php //if(isset($macty)) echo $macty?><!--" required/>-->
<!--                                                        <label for="MACTY">Mã công ty</label>-->
                                                        <select class="form-select" name="MACTY" aria-label="Default select example">
                                                            <option selected disabled>Chọn công ty</option>
                                                            <?php echo $options;?>
                                                        </select>
                                                        <label for="MACTY">Mã công ty</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="MUCLUONG" type="text" value="<?php if(isset($mucluong)) echo $mucluong?>" required />
                                                        <label for="MUCLUONG">Mức lương</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="TGKETTHUC" type="date" value="<?php if(isset($tgkt)) echo $tgkt?>" required/>
                                                    <label for="TGKETTHUC">Hạn ứng tuyển:</label>
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