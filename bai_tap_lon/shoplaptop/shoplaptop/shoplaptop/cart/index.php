<?php
  include("../conection.php"); 
  session_start();
  $sql_customer = "SELECT * FROM customer ORDER BY customerID DESC";
  $query_customer = mysqli_query($mysqli,$sql_customer);
  $row= mysqli_fetch_array($query_customer);
  ?>
  <?php
 
if(isset($_POST['sua'])) {
  $fullname = $_POST['fullname'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  if ($fullname == ""){echo"vui long nhap fullname!<br />";}
  if ($address == ""){echo"vui long nhap address!<br />";}
  if ($city == ""){echo"vui long nhap city!<br />";}
  if ($fullname != "" && $address!= ""&& $city!= ""){
   $sql_fix = "UPDATE customer SET fullname = '".$fullname."', address = '".$address."',city = '".$city."' WHERE customerID= '$_GET[id]' ";
   mysqli_query($mysqli,$sql_fix);
   header("location: index.php");
 }
}	
?>
  
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset=utf-8>
    <title>Home</title>
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
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="introduce/introduce.php">GIỚI THIỆU</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="../allProduct/index.php">TẤT CẢ SẢN PHẨM</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">ƯU ĐÃI</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="../cart/history.php">LỊCH SỬ ĐẶT HÀNG</a></li>
                        <li style="margin-top: 10px; margin-right: 10px"  class="nav-item"><a style="margin-left: 10px ; text-decoration: none;font-size:18px;" href="#"><i class="ti-shopping-cart"></i>GIỎ HÀNG</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" type="button" class="btn btn-outline-danger"><?php echo $_SESSION['fullname']?></a></li>
                        <li class="nav-item"><a type="button" class="nav-link btn btn-outline-danger" href="../customer/logout.php">ĐĂNG XUẤT</a></li>
                    </ul>
                <?php } else {?>
                    <ul class="nav justify-content-center">
                    <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">GIỚI THIỆU</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="customer/login.php">TẤT CẢ SẢN PHẨM</a></li>
                        <li class="nav-item"><a style="margin-left: 10px ;font-size:18px;text-decoration: none;" class="nav-link" href="#">ƯU ĐÃI</a></li>
                        <li style="margin-top: 10px; margin-right: 10px"  class="nav-item"><a style="margin-left: 10px ; text-decoration: none;font-size:18px;" href="customer/login.php"><i class="ti-shopping-cart"></i>GIỎ HÀNG</a></li>
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
        <h2 style="text-align: center; margin-top: 20px">Giỏ hàng</h2>
      </br>
      <div class="container">
      <div class="tableInfo">
       <form  method="POST" action="order.php?id=<?php echo $_SESSION['customerID']?>">
        <table class="table">
          <thead>
            <tr>
              <th Style="magin: 20px " scope="col">STT</th>
              <th Style="magin: 20px " scope="col">ID</th>
              <th Style="magin: 20px " scope="col">Tên sản phẩm</th>
              <th Style="magin: 20px " scope="col">Hình ảnh</th> 
              <th Style="magin: 20px " scope="col">Chi tiết</th> 
              <th Style="magin: 20px " scope="col">Số lượng</th> 
              <th Style="magin: 20px " scope="col">Giá tiền</th>
            </tr>
          </thead>
          <?php
          if (isset($_SESSION['cart'])) {
        $id =$_SESSION['customerID'];

            $i=0;
            $allMoney=0;
            $allAmount=0;
            ?>
            <tbody>
              <?php foreach ($_SESSION['cart'] as $key => $value) {
                $tensp = $value['productName'];
                $i++;
                ?>
                <td><?= $i ?></td> 
                <td><?= $key ?></td> 
                <td><?= $value['productName'] ?></td>
                <td><img style="width:250px" src="../image/<?= $value['image'] ?>"></td>  
                <td>chi tiết nè </td>
                <td><?= $value['qty']?></td>
                <td><?= $value['price']?> VND</td>
              </tbody>
              <?php
            }
          }else{
            ?>
            <h4>Không có gì trong giỏ hàng</h4>
            <?php
          }
          ?>
          
        </table>
        <?php if (isset($_SESSION['cart'])) {
          foreach ($_SESSION['cart'] as $value) {
            $Money =$value['qty']*$value['price'];
            $amount=$value['qty'];
            $allMoney +=$Money;
            $allAmount+=$amount;
          }
          ?> 
          <h4 style="float: right;">Thành tiền :<?= $allMoney ?> VND</h4>
          <h5 style="float: right; width: 7%;"><?= $allAmount ?></h5>
         
          <input type="submit"  class="btn btn-primary" name='submit' value="Đặt hàng"
          style="margin-left: 80% ; margin-top:10px ;width: 130px; " >
          
          <!-- <script language="javascript">
            var button = document.getElementById("btn");
            button.onclick = function(){
                alert("Bạn đã thanh toán thành công!");
            }
          </script> -->
          <?php 
        }
        ?>
      </form>
    </div>
    <div>

      <form  class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="momoQR.php">
      <input style="background-color:#FF3399; width:250px" type="submit" name="momo" value="Thanh toán Momo QR" class="btn btn-danger">
      <input type="hidden" value="<?php echo $allMoney ?>" name="tongtien">
      <input type="hidden" value="<?php echo $tensp ?>" name="tensp">

    </form>
    </div>
      
    <div style="margin-top:10px">
    <form  class="" method="POST" target="_blank" enctype="application/x/www-form-urlencoded" action="atmmomo.php">
    <input style="background-color:#FF3399; width:250px" type="submit" name="momo" value="Thanh toán Momo ATM" class="btn btn-danger">
    <input type="hidden" value="<?php echo $allMoney ?>" name="tongtien">
    <input type="hidden" value="<?php echo $tensp ?>" name="tensp">

  </form>
    </div>


    <!-- <h2>Sửa Thông tin người dùng</h2>
  <form method="POST" action="">
    <tr>
      <td>Full name</td>
      <td><input class="form-control" type="text"  name="fullname" value="<?php echo $row['fullname'];?>" ></td> 
      <td><p>address</p></td>
      <td> <input class="form-control" type="text" name="address" value="<?php echo $row['address'];?>" ></td>
      <td><p>Ten</p></td>
      <td> <input class="form-control" type="text" name="city" value="<?php echo $row['city'];?>" ></td>
      <td></br></td>
      <td><input type="submit" name="sua" value="Sửa"></td>
    </tr>
  </form>     -->
    </div>
    <div class="position-fixed" style="bottom:-130px; right:5px;">
      <a href="https://www.facebook.com/hutechuniversity">
      <img style="" src="../image/thanhFb.png" height="300">
      </a>
   </div> 
</body>
</html>