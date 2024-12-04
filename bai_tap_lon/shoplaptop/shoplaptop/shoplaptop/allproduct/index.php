<?php
include("../conection.php");
$sql_product = "SELECT * FROM product WHERE id_type='3'  ORDER BY productID DESC ";
$query_product = mysqli_query($mysqli,$sql_product);
?>
<?php

$sql_asus = "SELECT * FROM product WHERE id_type='1' ORDER BY productID DESC";
$query_asus = mysqli_query($mysqli,$sql_asus);
?>
<?php
$sql_msi = "SELECT * FROM product WHERE id_type='6'  ORDER BY productID DESC ";
$query_msi = mysqli_query($mysqli,$sql_msi);
?>
<?php
$sql_mouse = "SELECT * FROM product WHERE id_type='5' ORDER BY productID DESC";
$query_mouse = mysqli_query($mysqli,$sql_mouse);
?>
<?php
$sql_keyboard = "SELECT * FROM product WHERE id_type='4' ORDER BY productID DESC";
$query_keyboard = mysqli_query($mysqli,$sql_keyboard);
?>
<?php
$sql_getList = "SELECT * FROM category ORDER BY categoryID DESC";
$query_getList= mysqli_query($mysqli, $sql_getList);
?>
<?php
session_start();
if (isset($_GET['id_cus'])) {
  $id_cus=$_GET['id_cus'];
}
//phan trang
//define total number of results you want per page

$results_per_page = 4;

//find the total number of results stored in the database

$query = "SELECT *from product";

$result = mysqli_query($mysqli, $query);

$number_of_result = mysqli_num_rows($result);

//determine the total number of pages available

$number_of_page = ceil ($number_of_result / $results_per_page);

//determine which page number visitor is currently on

if (!isset ($_GET['page']) ) {

$page = 1;

} else {

$page = $_GET['page'];

}

//determine the sql LIMIT starting number for the results on the displaying page

$page_first_result = ($page-1) * $results_per_page;

//retrieve the selected results from database

$query = "SELECT *FROM product LIMIT " . $page_first_result . ',' . $results_per_page;

$result = mysqli_query($mysqli, $query);

//display the retrieved result on the webpage

?>


<!DOCTYPE html >
<html style="scroll-behavior: smooth">
<head>
  <meta charset=utf-8>
  <title>Sản phẩm</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
    .pagination > li > a
    {
        background-color: white;
        color: green
    }
     
    .page-item.active .page-link
    {
        background-color:green;
        border-color:green
    }
     
    .pagination > li > a:focus,
    .pagination > li > a:hover,
    .pagination > li > span:focus,
    .pagination > li > span:hover
    {
        color: green;
        background-color: #eee;
        border-color: #ddd;
    }
     
    .pagination > .active > a
    {
        color: white;
        background-color: green;
        border: solid 1px green;
    }
 
    .pagination > .active > a:hover
    {
        background-color: green;
        border: solid 1px green;
    }
    </style>
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
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">TẤT CẢ SẢN PHẨM</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">ƯU ĐÃI</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="../cart/history.php">LỊCH SỬ ĐẶT HÀNG</a></li>
                        <li style="margin-top: 10px; margin-right: 10px"  class="nav-item"><a style="margin-left: 10px ; text-decoration: none;font-size:18px;" href="../cart/index.php"><i class="ti-shopping-cart"></i>GIỎ HÀNG</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" type="button" class="btn btn-outline-danger"><?php echo $_SESSION['fullname']?></a></li>
                        <li class="nav-item"><a type="button" class="nav-link btn btn-outline-danger" href="../customer/logout.php">ĐĂNG XUẤT</a></li>
                    </ul>
                <?php } else {?>
                    <ul class="nav justify-content-center">
                    <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="introduce/introduce.php">GIỚI THIỆU</a></li>
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
                            <a href="../index.php"><img src="../image/logotan.png" style="width:50%" alt=""></a>
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

<div class="position-fixed dashboard_tab_button " style="align-items:center;top:225px; left:15px;">
<ul class="nav flex-column dashboard-list">
  <li style="background-color: #FF0000; margin-top:5px"class="nav-item">
     <a style="font-family: sans-serif; font-weight: 700; color: #fff"class="nav-link" href="#asus">Laptop Asus</a>
  </li>
   <li style="background-color: #FF0000; margin-top:5px;height:20%" class="nav-item">
    <a style="font-family: sans-serif; font-weight: 700; color: #fff; "class="nav-link" href="#acer">Laptop Acer</a>
   </li>
   <li style="background-color: #FF0000; margin-top:5px"class="nav-item">
      <a style="font-family: sans-serif; font-weight: 700; color: #fff"class="nav-link" href="#msi">Laptop Msi</a>
   </li>
   <li style="background-color: #FF0000; margin-top:5px"class="nav-item">
      <a style="font-family: sans-serif; font-weight: 700; color: #fff"class="nav-link" href="#mouse">Gaming Mouse</a>
   </li>
   <li style="background-color: #FF0000; margin-top:5px"class="nav-item">
      <a style="font-family: sans-serif; font-weight: 700; color: #fff"class="nav-link" href="#keyboard">Keyboard</a>
   </li>
</ul>
</div>


<!-- <div class="position-fixed" style="align-items:center;top:225px; left:35px;">
      <a href="https://vzone.vn/wp-content/uploads/2020/10/Nen-mua-sua-vinamilk-khuyen-mai-hay-la-khong.jpg?v=1604044976">
      <img style="" src="../image/thanh3.jpg" width="120">
      </a>
   </div> -->
   <!-- <div class="position-fixed" style="align-items:center;top:225px; left:35px;">
      <a href="https://vzone.vn/wp-content/uploads/2020/10/Nen-mua-sua-vinamilk-khuyen-mai-hay-la-khong.jpg?v=1604044976">
      <img style="" src="../image/thanh3.jpg" width="120">
      </a>
   </div> -->

<div class="container">
<div class= "container-fluid">
  <div class= "row d-inline-flex">



    
<div >
<div style="text-align:center">
        <h1>TẤT CẢ SẢN PHẨM</h1>
  </div>
  <?php
  while ($row = mysqli_fetch_array($result)){
    ?>
    
    <form class="card" style="width: 25%; float:left" action="../cart/add.php?id=<?php echo $row['productID'];?>" method="POST">
         <div class="d-flex flex-column text-center border">
           <img src="../image/<?php echo $row['image'];?>" />
           <h2><?php echo $row['productName'];?></h2>
           <h6>Giá: <?php echo $row['price'];?> VND</h6>
           <input type="submit" class="btn btn-info" name='submit' value="Xem chi tiết & Mua">
           <?php
            $id_cus=$_SESSION['customerID'];
           ?>
         
         </div>
   </form>
   <?php

   
   
 }?>


</div>
<div style="margin-left:33%;margin-top:10px;"><?php

for($page = 1; $page<= $number_of_page; $page++) {
?>
<div class="container">

</div> <?php

   
  echo '<button style="width:60px;background-color:#ccc;float:left"><a href = "index.php?page=' . $page . '">' . $page . ' </a></button>';}
 ?>
</div>

<!-- laptop asus -->
<div id="asus">
 <div style="text-center">
        <img style="width: 100%; padding-left:10%" src="../image/type/typelaptopasus.png" height=""> 
 </div>
  <?php
  while($row_asus = mysqli_fetch_array($query_asus)){
    ?>
    
    <form class="card" style="width: 25%; float:left" action="../cart/add.php?id=<?php echo $row_asus['productID'];?><?php echo $_SESSION['customerID'];?>" method="POST">
         <div class="d-flex flex-column text-center border">
           <img src="../image/<?php echo $row_asus['image'];?>" />
           <h2><?php echo $row_asus['productName'];?></h2>
           <h6>Giá: <?php echo $row_asus['price'];?> VND</h6>
           
           
           <input type="submit" class="btn btn-info" name='submit' value="Xem chi tiết & Mua">
           <?php
            $id_cus=$_SESSION['customerID'];
           ?>
         
         </div>
   </form>
   <?php
 }
 ?>


 <!-- laptop acer -->
 <div id="acer">
 <div style="text-center">
        <img style="width: 100%; padding-left:10%" src="../image/type/typelaptopacer.png" height=""> 
 </div>
  <?php
  while($row_product = mysqli_fetch_array($query_product)){
    ?>
    
    <form class="card" style="width: 25%; float:left" action="../cart/add.php?id=<?php echo $row_product['productID'];?>" method="POST">
         <div class="d-flex flex-column text-center border">
           <img src="../image/<?php echo $row_product['image'];?>" />
           <h2><?php echo $row_product['productName'];?></h2>
           <h6>Giá: <?php echo $row_product['price'];?> VND</h6>
           
           
           <input type="submit" class="btn btn-info" name='submit' value="Xem chi tiết & Mua">
           <?php
            $id_cus=$_SESSION['customerID'];
           ?>
         
         </div>
   </form>
   <?php
 }
 ?>

</div>
<!-- laptop msi -->
<div id="msi">
<div style="text-center">
        <img style="width: 100%; padding-left:10%" src="../image/type/typelaptopmsi.png" height=""> 
  </div>
<?php
while($row_msi = mysqli_fetch_array($query_msi)){
?>

<form class="card" style="width: 25%; float:left" action="../cart/add.php?id=<?php echo $row_msi['productID'];?>" method="POST">
 <div class="d-flex flex-column text-center border">
   <img src="../image/<?php echo $row_msi['image'];?>" />
   <h2><?php echo $row_msi['productName'];?></h2>
   <h6>Giá: <?php echo $row_msi['price'];?> VND</h6>
   <input type="submit" class="btn btn-info" name='submit' value="Xem chi tiết & Mua">
   <?php
    $id_cus=$_SESSION['customerID'];
   ?>
 
 </div>
</form>
<?php
}
?>
</div>
  <!-- mouse -->
<div id="mouse">
<div style="text-center">
        <img style="width: 100%; padding-left:10%" src="../image/type/typechuotgaming.png" height=""> 
  </div>
<?php
while($row_mouse = mysqli_fetch_array($query_mouse)){
?>

<form class="card" style="width: 25%; float:left" action="../cart/add.php?id=<?php echo $row_mouse['productID'];?>" method="POST">
 <div class="d-flex flex-column text-center border">
   <img src="../image/<?php echo $row_mouse['image'];?>" />
   <h2><?php echo $row_mouse['productName'];?></h2>
   <h6>Giá: <?php echo $row_mouse['price'];?> VND</h6>
   <input type="submit" class="btn btn-info" name='submit' value="Xem chi tiết & Mua">
   <?php
    $id_cus=$_SESSION['customerID'];
   ?>
 
 </div>
</form>
<?php
}
?>
</div>
 <!-- keyboard -->
 <div id="keyboard">
 <div style="text-center">
        <img style="width: 100%; padding-left:10%" src="../image/type/typebanphim.png" height=""> 
  </div>
<?php
while($row_keyboard = mysqli_fetch_array($query_keyboard)){
?>

<form class="card" style="width: 25%; float:left" action="../cart/add.php?id=<?php echo $row_keyboard['productID'];?>" method="POST">
 <div class="d-flex flex-column text-center border">
   <img src="../image/<?php echo $row_keyboard['image'];?>" />
   <h2><?php echo $row_keyboard['productName'];?></h2>
   <h6>Giá: <?php echo $row_keyboard['price'];?> VND</h6>
   <input type="submit" class="btn btn-info" name='submit' value="Xem chi tiết & Mua">
   <?php
    $id_cus=$_SESSION['customerID'];
   ?>
 
 </div>
</form>
<?php
}
?>
</div>
</div>
</div>
<div class="position-fixed" style="bottom:-130px; right:5px;">
      <a href="https://www.facebook.com/hutechuniversity">
      <img style="" src="../image/thanhFb.png" height="300">
      </a>
   </div> 
  <!-- <div class="position-fixed" style="align-items:center;top:225px; left:35px;">
      <a href="https://vzone.vn/wp-content/uploads/2020/10/Nen-mua-sua-vinamilk-khuyen-mai-hay-la-khong.jpg?v=1604044976">
      <img style="" src="../image/thanh3.jpg" width="120">
      </a>
   </div> -->
   <div class="position-fixed" style="align-items:center;top:225px; right:15px;">
      <a href="https://vzone.vn/wp-content/uploads/2020/10/Nen-mua-sua-vinamilk-khuyen-mai-hay-la-khong.jpg?v=1604044976">
      <img style="" src="../image/thanh3.jpg" width="90%">
      </a>
   </div>

   <!-- <div class="position-fixed" style="bottom:10px; right:5px;">
      <a href="https://www.facebook.com/hutechuniversity">
      <img style="" src="../image/facebook.png" height="60">
      </a> -->
    </div> 





<!-- footer1 -->
  <hr class="hr--large">
    <div class = "container" style="margin-top: 25px">
      <div class="text-center"> 
      </div>
        <h1 style="text-align: center; margin-bottom:15px">Các chính sách dành cho khách hàng</h1>
        <img style= "" src="../image/giaohang.PNG" width="24.7%">
        <img style= "" src="../image/ch.PNG" width="24.7%">
        <img style= "" src="../image/1doi1.PNG" width="24.7%">
        <img style= "" src="../image/thanhtoan.PNG" width="24.7%">
    </div>
<!-- Contact -->
<hr class="hr--large">
<div class = "Conten-sec" >
  <h1 class="sec-heading"style="text-align: center">ĐÓNG GÓP Ý KIẾN</h1>
  <p class="sec-sub-heading"style="text-align: center; color: red">Liên hệ với chúng tôi</p>
  <div class="row contact-content">
    <div class="col col-half"style="font-size: 17px;padding-left: 25%">
        <p style="width 30px;font-weight: bold"><i class="ti-location-pin" style="width 30px; font-weight: bold;padding: 0 5px"></i>HoChiMinh City, VietNam</p>
        <p style="width 30px;font-weight: bold"><i class="ti-mobile"  style="width: 30px;font-weight: bold;padding: 0 5px"></i>Phone:+84-938325878</p>
        <p style="width 30px;font-weight: bold"><i class="ti-email" style="width: 30px;font-weight: bold;padding: 0 5px"></i>Email:shoplaptop@gmail.com</p>
</div>
<div class="col col-half" style="padding-right: 20%">
<form target="_blank" action="https://formsubmit.co/dangminhquang1401@gmail.com" method="POST">
    <input type="hidden" name="_subject" value="Shoplaptop: Giải đáp vấn đề!">
    <input type="text" name="_honey" style="display:none">
    <div class="form-group">
      <div class="form-row">
        <div class="col">
          <input type="text" name="name" class="form-control" placeholder="Tên khách hàng" required>
        </div>
        <div class="col">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          <input type="hidden" name="_next" value="http://localhost/shoplaptop/allproduct/thankyou.php">
        </div>
      </div>
    </div>
    <div class="form-group">
      <textarea placeholder="Lời nhắn" class="form-control" name="message"  required></textarea>
    </div>
    <input type="submit" style="background-color:black; color: #fff; float: right" value="Gửi"> 
  </form>
</div>
</div>
<hr class="hr--large">
    <div class = "space" style="text-align: center; background-color: #white ">
        <img style= "" src="../image/thanhspace.PNG">
   
              <ul style="list-style: none" class="no-bullets social-icons">
                    <li style="text-align: center">
                    <a class = "ti-facebook"style=" color: black" href="https://www.facebook.com/profile.php?id=100014117371605" title="Q&T on Facebook" >
                      Facebook
                    </a>
                    <a class = "ti-pinterest"style=" color: black" href="https://www.pinterest.com/bachthien2739/_saved/" title="Q&T on Pinterest">
                      Pinterest
                    </a>
                    <a class = "ti-instagram"style=" color: black" href="https://www.instagram.com/shoplaptop.vn/" title="Q&T on Instagram">
                      Instagram
                    </a>
                    </li>
              </ul>
              <p class="site-footer__copyright-content">
                  © 2021, 
                  <a href="http://localhost/shoplaptop/index.php" \title=""style=" color: red" >Q&T</a>
            
    </div>

    
        
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>