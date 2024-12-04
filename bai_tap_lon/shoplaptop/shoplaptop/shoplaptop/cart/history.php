<?php
include("../conection.php"); 
session_start();
if(isset($_SESSION['customerID'])){
  $id=$_SESSION['customerID'];
  $sql_getOrder="SELECT * FROM orders WHERE id_customers='$id'";
  $query_getOrder=mysqli_query($mysqli,$sql_getOrder);
}else{
  echo "Đã có lỗi";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Lịch sử</title>
  <link rel="stylesheet"  href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet"  href="../bootstrap/js/bootstrap.bundle.js">
  <link rel="stylesheet"  href="../bootstrap/js/bootstrap.bundle.min.js">
  <link rel="stylesheet"  href="../style.css">
  <link rel="stylesheet"  href="../themify-icons/themify-icons.css">
  <link rel="shortcut icon" href="https://img.icons8.com/cotton/2x/laptop--v3.png" type="image/png">

  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="../assets/css/vendor/jquery-ui.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../assets/css/plugins/slick.css">
    <link rel="stylesheet" href="../assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="../assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="../assets/css/plugins/venobox.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">


</head>
<body>
   <!--Navigation-->
<nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color:rgba(13, 255, 235, 0.7)">
        <div class="container-fluid">
            <a class="navbar-branch" href="#">
                <img src="../image/logotu.png" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div style="text-align: center; justify-content: center" class="collapse navbar-collapse" id="navbarResponsive">  
            <?php if(isset($_SESSION['customerID'])) { ?>
                    <ul class="nav justify-content-center">
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">GIỚI THIỆU</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="../allProduct/index.php">TẤT CẢ SẢN PHẨM</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">ƯU ĐÃI</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">LỊCH SỬ ĐẶT HÀNG</a></li>
                        <li style="margin-top: 10px; margin-right: 10px"  class="nav-item"><a style="margin-left: 10px ; text-decoration: none;font-size:18px;" href="../cart/index.php"><i class="ti-shopping-cart"></i>GIỎ HÀNG</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" type="button" class="btn btn-outline-danger"><?php echo $_SESSION['fullname']?></a></li>
                        <li class="nav-item"><a type="button" class="nav-link btn btn-outline-danger" href="customer/logout.php">ĐĂNG XUẤT</a></li>
                    </ul>
                <?php } else {?>
                    <ul class="nav justify-content-center">
                    <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">GIỚI THIỆU</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="../customer/login.php">TẤT CẢ SẢN PHẨM</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">ƯU ĐÃI</a></li>
                        <li style="margin-top: 10px; margin-right: 10px"  class="nav-item"><a style="margin-left: 10px ; text-decoration: none;font-size:18px;" href="../customer/login.php"><i class="ti-shopping-cart"></i>GIỎ HÀNG</a></li>
                    </ul>
                    <div class="login">
                        <a type="button" style="margin-left: 25px" class="btn btn-outline-danger" href="../customer/login.php">&nbsp;ĐĂNG NHẬP</a>
                    </div>
                <?php }?>
                </div>
                        
        </div>
    </nav>
    <!--END Navigation-->


<!-- Start Header Center Area -->
<div class="header-center">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-3">
                        <!-- Logo Header -->
                        <div class="header-logo">
                            <a href="index.html"><img src="../image/logotan.png" style="width:50%" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- Start Header Search -->
                        <div class="header-search">
                            <form action="../timkiem.php" method="post">
                                <div class="header-search-box default-search-style d-flex">
                                    <input class="default-search-style-input-box border-around border-right-none" name="timkiem" type="search" placeholder="Nhập tên sản phẩm muốn tìm..." required>
                                    <button class="default-search-style-input-btn" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div> <!-- End Header Search -->
                    </div>
                    <div class="col-3 text-right">
                        <!-- Start Header Action Icon -->
                        <ul class="header-action-icon">
                            <li>
                                <a  class="offcanvas-toggle">
                                    <i class="icon-heart"></i>
                                    <span class="header-action-icon-item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="../cart/index.php" class="offcanvas-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="header-action-icon-item-count">3</span>
                                </a>
                            </li>
                        </ul> <!-- End Header Action Icon -->
                    </div>
                </div>
            </div>
        </div> <!-- End Header Center Area -->

        
    </header> <!-- ...:::: End Header Section:::... -->
      <h2 Style="text-align: center; margin-top:15px">Lịch sử</h2>
    </br>
<div class="container">
    <div class="tableInfo">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Ngày và giờ đặt hàng</th>
            <th scope="col">Tổng tiền</th>
            <th scope="col">Chi tiết</th> 
          </tr>
        </thead>
        <tbody>
          <?php  
          $i=0;  
          while( $row = mysqli_fetch_array($query_getOrder))  {
            $i++;
            ?>
            <td><?php echo $i ?></td> 
            <td><?php echo $row['created_at']; ?></td> 
            <td><?php echo $row['total']; ?></td>
            <td><a class="btn btn-primary" class="button"  href="detail.php?id=<?php echo $_SESSION['customerID']?>">Chi tiết hóa đơn</a></td>
          </tbody>
          <?php
        }
        ?>

      </table>

    </form>
  </div>
</div>
<div class="position-fixed" style="bottom:-130px; right:5px;">
      <a href="https://www.facebook.com/hutechuniversity">
      <img style="" src="../image/thanhFb.png" height="300">
      </a>
   </div> 
</body>
</html>