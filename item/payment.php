<?php

  session_start();
  include('../Data/data.php');

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: login.php');
  }

  $id=$_GET['id'];


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

<!-- <navbar"> -->
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
                            <li><a class="dropdown-item" href="../order/order-h.php">ประวัติการเช่า</a></li>
                            <li><a class="dropdown-item" href="../index.php?logout='1'">ออกจากระบบ</a></li>
                        </ul>
                    </div>
                </div>
              </div>
          </div> 
      </div>
    </header>
  <?php
    endif
  ?>
<section class="checkout-wrapper pt-50">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <form action="process-item.php" method="post">
              <div class="checkout-payment-style-1 mt-50">
                <h6 class="title">ข้อมูลการชำระเงิน</h6>
                <div class="checkout-payment-form">
                  <div class="single-form form-default">
                    <label>ชื่อผู้ถือบัตร</label>
                    <div class="form-input form">
                      <input type="text" placeholder="Cardholder Name" name="Cname" id="Cname">
                    </div>
                  </div>
                  <div class="single-form form-default">
                    <label>หมายเลขบัตร</label>
                    <div class="form-input form">
                      <input id="credit-input" type="text" placeholder="0000 0000 0000 0000" name="Cnum" id="Cnum">
                      <img src="../img/card.png" alt="card">
                    </div>
                  </div>
                  <div class="payment-card-info">
                    <div class="single-form form-default">
                      <label>วันหมดอายุ</label>
                      <div class="expiration d-flex">
                        <div class="form-input form">
                          <input type="text" placeholder="MM" name="Cdate" id="Cdate">
                        </div>
                        <div class="form-input form">
                          <input type="text" placeholder="YYYY" name="Cyear" id="Cyear">
                        </div>
                      </div>
                    </div>
                    <div class="single-form form-default">
                      <label>CVC/CVV <span><i class="mdi mdi-alert-circle"></i></span></label>
                      <div class="form-input form">
                        <input type="text" placeholder="***" name="cvv" id="cvv">
                      </div>
                    </div>
                  </div>
                  <div class="single-form form-default">
                    <button class="main-btn primary-btn" name="pay"> ชำละเงิน</button>
                  </div>
                  
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="checkout-sidebar-accordion mt-50">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <a href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">สินค้าที่เลือก</a>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <form action="process-item.php" method="post"></form>
                      <div class="checkout-table table-responsive">
                        <table class="table">
                          <tbody>
                            <tr>
                              <td class="checkout-product">
                                <?php
                                  $user_check_query2 = "SELECT P.Pname,P.Pprice,Pimage FROM product P WHERE P.Pid = $id" ;
                                  $query = mysqli_query($dbcon,$user_check_query2);       
                                  $result = mysqli_fetch_array($query)
                                ?>
                                <div class="product-cart d-flex">
                                  <div class="product-thumb">
                                    <img src="<?=$result['Pimage']?>" alt="Product">
                                  </div>
                                  <div class="product-content media-body">
                                    <h5 class="title">
                                      <a href="#0"><?=$result['Pname']?></a>
                                    </h5>
                                  </div>
                                </div>
                              </td>
                              <td class="checkout-price">
                                <p class="price"><?=$result['Pprice']?>บาท</p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="pricing-table">
                        <div class="sub-total-price">
                          <div class="total-price">
                            <p class="value">ราคาสินค้า:</p>
                            <p class="price"><?=$result['Pprice']?>บาท</p>
                          </div>
                        </div>

                        <div class="total-payable">
                          <div class="payable-price">
                            <p class="value">ราคารวมทั้งหมด:</p>
                            <p class="price"><?=$result['Pprice']?>บาท</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</body>