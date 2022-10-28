<?php

    session_start();
    include('../Data/data.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เช่าสูทผู้ชาย</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr .net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../index.php">เช่าสูทผู้ชาย</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarToggler"> 
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                </ul>
            </div> 
        </div>
    </header>

    <div class="container">
        <section class="pb-4">
            <div class="bg-white border rounded-5">
    
                <section class="w-100 px-4 py-5" style=" border-radius: .5rem .5rem 0 0;">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-6 ">
                            <div class="card shadow-2-strong bg-info" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">

                                    <h3 class="mb-5">สมัครสมาชิก</h3>
                                    <form action="signup_bd.php" method="post">
                                        <?php include('errors.php');?>
                                        <?php if(isset($_SESSION['error'])):?>
                                            <div class="error">
                                                <h3>
                                                    <?php 
                                                        echo $_SESSION['error'];
                                                        unset($_SESSION['error']);
                                                    ?>
                                                </h3>
                                            </div>
                                        <?php endif ?>
                                        <div class="form-outline mb-2">
                                            <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" id="username">
                                            <label class="form-label" for="username" style="margin-left: 0px;" ></label>
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 40px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" id="email">
                                            <label class="form-label" for="email" name="email" style="margin-left: 0px;" ></label>
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 40px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="password" name="password" class="form-control form-control-lg" placeholder="รหัสผ่าน" id="password">
                                            <label class="form-label" for="password" style="margin-left: 0px;"></label>
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 64.8px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="password" name="c_password" class="form-control form-control-lg" placeholder="ยืนยันรหัสผ่าน" id="c_password">
                                            <label class="form-label" for="c_password" style="margin-left: 0px;"></label>
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 64.8px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="reg_user">สมัครสมาชิก</button>

                                        <hr class="my-4">
                                        <p>เป็นสมาชิกแล้วใช่ไหม คลื๊กที่นึ้เพื่อเข้าสู่ระบบ <a href="login.php">เข้าสู่ระบบ</a></p>

                                    </form>

                                        <!-- <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;" type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                                        <button class="btn btn-lg btn-block btn-primary" style="background-color: #3b5998;" type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
    
</body>
</html>