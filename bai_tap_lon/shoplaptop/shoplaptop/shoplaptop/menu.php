<?php
include("conection.php"); 
session_start();

?>



<!--Navigation-->
<nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color:rgba(13, 255, 235, 0.7)">
        <div class="container-fluid">
            <a class="navbar-branch" href="#">
                <img src="image/logotu.png" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div style="text-align: center; justify-content: center" class="collapse navbar-collapse" id="navbarResponsive">  
            <?php if(isset($_SESSION['customerID'])) { ?>
                    <ul class="nav justify-content-center">
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">GIỚI THIỆU</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="allProduct/index.php">TẤT CẢ SẢN PHẨM</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">ƯU ĐÃI</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="cart/history.php">LỊCH SỬ ĐẶT HÀNG</a></li>
                        <li style="margin-top: 10px; margin-right: 10px"  class="nav-item"><a style="margin-left: 10px ; text-decoration: none;font-size:18px;" href="customer/login.php"><i class="ti-shopping-cart"></i>GIỎ HÀNG</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" type="button" class="btn btn-outline-danger"><?php echo $_SESSION['fullname']?></a></li>
                        <li class="nav-item"><a type="button" class="nav-link btn btn-outline-danger" href="customer/logout.php">ĐĂNG XUẤT</a></li>
                    </ul>
                <?php } else {?>
                    <ul class="nav justify-content-center">
                    <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="introduce/introduce.php">GIỚI THIỆU</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="customer/login.php">TẤT CẢ SẢN PHẨM</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">ƯU ĐÃI</a></li>
                        <li style="margin-top: 10px; margin-right: 10px"  class="nav-item"><a style="margin-left: 10px ; text-decoration: none;font-size:18px;" href="cart/index.php"><i class="ti-shopping-cart"></i>GIỎ HÀNG</a></li>
                    </ul>
                    <div class="login">
                        <a type="button" style="margin-left: 25px" class="btn btn-outline-danger" href="customer/login.php">&nbsp;ĐĂNG NHẬP</a>
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
                            <a  href="index.php"><img src="image/logotan.png" style="width:50%" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- Start Header Search -->
                        <div class="header-search">
                            <form action="timkiem.php" method="post">
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
                                <a href="cart/index.php" class="offcanvas-toggle">
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



