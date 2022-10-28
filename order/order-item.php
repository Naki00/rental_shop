<?php

session_start();
include('../Data/data.php');

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['email']);
  header('location: login.php');
}


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
    <!--====== Tiny Slider CSS ======-->
    <link rel="stylesheet" href="../css/tiny-slider.css" />

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="../css/LineIcons.css" />

    <!--====== Material Design Icons CSS ======-->
    <link rel="stylesheet" href="../css/materialdesignicons.min.css" />

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <!--====== gLightBox CSS ======-->
    <link rel="stylesheet" href="../css/glightbox.min.css" />

    <!--====== nouiSlider CSS ======-->
    <link rel="stylesheet" href="../css/nouislider.min.css" />

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="../css/default.css" />

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="../css/style.css" />
    
</head>
<body>

<!-- <header class="p-3 text-bg-info"> -->
  <?php
    if(!isset($_SESSION['email'])):
  ?>
    <header class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../index.php">เช่าสูทผู้ชาย</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../index.php">หน้าแรก</a>
                </li>
              </ul>

                

                <div class="d-grid gap-2 d-md-flex">
                  <div class="text-end">
                    <a href="../login/login.php"><button type="button" class="btn btn-outline-dark me-2" >Login</button></a>
                    <a href="../login/signup.php"><button type="button" class="btn btn-dark">Sign-up</button></a>
                  </div>
                </div>
            </div> 
        </div>
      </div>
    </header>
  <?php
    endif
  ?>
  <?php
    if(isset($_SESSION['email'])):
  ?>
    <header class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container px-4 px-lg-5">
          <a class="navbar-brand" href="../index.php">เช่าสูทผู้ชาย</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../index.php">หน้าแรก</a>
                </li>
              </ul>

              

              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <div class="text-end">
                    <div class="dropdown">
                        <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          <span id="username"><?php echo $_SESSION['email']?></span> 
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">ประวัติการเช่า</a></li>
                            <li><a class="dropdown-item" href="../index.php?logout='1'">ออกจากระบบ</a></li>
                        </ul>
                    </div>
                </div>
              </div>
          </div> 
      </div>
    </div>
  </header>
  <?php
    endif
  ?>
  <section class="order-id-wrapper pt-100 pb-100">
      <div class="container">
        <div class="row justify-content-center">
          <?php
            $id=$_GET['id'];
            $user_check_query = "SELECT * FROM orders_detail";
            $user_check_query2 = "SELECT P.Pprice,OD.id FROM orders_detail OD , product P WHERE OD.id = $id AND OD.Pid = P.Pid";
            $query = mysqli_query($dbcon,$user_check_query);       
            $query2 = mysqli_query($dbcon,$user_check_query2); 
            $result = mysqli_fetch_array($query) ;
            $result2 = mysqli_fetch_array($query2);
          ?>
            <div class="col-lg-9">
              <div class="order-id-content">
                <h4 class="order-id">Order ID: <?=$result2['id']?></h4>
                <span class="order-price"><?=$result2['Pprice']?>บาท</span>
              </div>
            </div>
          <?php
            
          ?>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="row">
              <div class="col-md-7">
                <?php
                  $id=$_GET['id'];
                  $user_check_query2 = "SELECT P.Pname,P.Pprice,Pimage FROM orders_detail OD , product P WHERE OD.id = $id AND OD.Pid = P.Pid" ;
                  $query = mysqli_query($dbcon,$user_check_query2);       
                  while($result = mysqli_fetch_array($query)){
                  ?>
                <div class="order-product mt-30">
                  <div class="order-title bg-info">
                    <h5 class="title ">สินค้าที่สั่ง</h5>
                  </div>
                  <div class="order-product-table table-responsive">
                    <table class="table">
                      <tbody>
                      
                        <tr>
                          <td class="product">
                            <div class="order-product-item d-flex">
                              <div class="product-thumb">
                                <img src="<?=$result['Pimage']?> " width='100' height='125'>
                              </div>
                              <div class="product-content media-body">
                                <h5 class="title">
                                  <a href="#0"><?=$result['Pname']?></a>
                                </h5>
                              </div>
                            </div>
                          </td>
                          <td class="price">
                            <p class="product-price"><?=$result['Pprice']?>บาท</p>
                          </td>
                      </tbody>
                    </table>
                  </div>
                  <div class="order-product-total">
                    <div class="sub-total">
                      <p class="value">ราคาสินค้า:</p>
                      <p class="price"><?=$result['Pprice']?>บาท</p>
                    </div>
                  </div>
                  <div class="payable-total">
                    <p class="value">ราคารวมทั้งหมด:</p>
                    <p class="price"><?=$result['Pprice']?>บาท</p>
                  </div>
                </div>
              <?php
                }
              ?>
              </div>
              <div class="col-md-5">
                <div class="single-order-details mt-30">
                  <?php
                    $id=$_GET['id'];
                    $user_check_query2 = "SELECT OD.id,OD.Odate FROM orders_detail OD , product P WHERE OD.id = $id AND OD.Pid = P.Pid";
                    $query = mysqli_query($dbcon,$user_check_query2);       
                    $result = mysqli_fetch_array($query);
                  ?>
                    <div class="order-title bg-info">
                      <h5 class="title">สินค้าที่สั่ง</h5>
                    </div>
                    <div class="order-details-content">
                      <div class="single-details-item d-flex flex-wrap">
                        <div class="details-title">
                          <h6 class="title">Order ID:</h6>
                        </div>
                        <div class="details-content">
                          <p><?=$result['id']?></p>
                        </div>
                      </div>
                      <div class="single-details-item d-flex flex-wrap">
                        <div class="details-title">
                          <h6 class="title">Date &amp; Time:</h6>
                        </div>
                        <div class="details-content">
                          <p><?=$result['Odate']?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                    
                  ?>
                  <?php
                    $user_check_query2 = "SELECT UA.username,UA.email FROM orders_detail OD , product P,user_account UA WHERE OD.id = $id AND OD.Pid = P.Pid AND OD.Uid = UA.id";
                    $query = mysqli_query($dbcon,$user_check_query2);       
                    while($result = mysqli_fetch_array($query)){
                  ?>
                  <div class="single-order-details mt-25">
                    <div class="order-title bg-info">
                      <h5 class="title">ข้อมูลส่วนตัว</h5>
                    </div>
                    <div class="order-details-content">
                      <div class="single-details-item d-flex flex-wrap">
                        <div class="details-title">
                          <h6 class="title">ชื่อ:</h6>
                        </div>
                        <div class="details-content">
                          <p><?=$result['username']?></p>
                        </div>
                      </div>
                      <div class="single-details-item d-flex flex-wrap">
                        <div class="details-title">
                          <h6 class="title">Email:</h6>
                        </div>
                        <div class="details-content">
                          <p><?=$result['email']?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="../js/scripts.js"></script>
</body>