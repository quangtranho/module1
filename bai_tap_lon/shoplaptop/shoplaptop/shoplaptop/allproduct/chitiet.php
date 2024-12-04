<?php
  include("../conection.php"); 
  session_start();
  $sql_customer = "SELECT * FROM customer ORDER BY customerID DESC";
    $product="SELECT * FROM product WHERE productID='".$id."' LIMIT 1";

  $query_customer = mysqli_query($mysqli,$sql_customer);
  $row= mysqli_fetch_array($query_customer);
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
    <link rel="shortcut icon" href="https://img.icons8.com/cotton/2x/laptop--v3.png" type="image/png">

  </head>
  <body>
      <div class="menu sticky-top ">
        <nav class="navbar navbar-expand-lg header-custom" >
          <div class="container-fluid font-header-custom">
          <a class="navbar-branch" href="../index.php">
            <img src="../image/logotan.png" height="60">
          </a>
            <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active"  href="../allProduct/index.php">TẤT CẢ SẢN PHẨM</a>
                </li>
                <a class="navbar-branch" href="../index.php">
                  <img src="../image/iconHD.png" height="40" >
                </a>
                <li class="nav-item">
                  <a class="nav-link" href="#">GIỎ HÀNG</a>
                </li>
                <?php if(isset($_SESSION['customerID'])) { ?>
                  <li class="nav-item">
                    <a class="nav-link" href="../cart/history.php">LỊCH SỬ ĐẶT HÀNG</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../customer/logout.php">ĐĂNG XUẤT</a>
                  </li>
                  <li class="nav-item">
                    <a type="button" class="btn btn-secondary"></span> <?php echo $_SESSION['fullname']?></a>
                  </li>
                <?php } else {?>
                  <li><a type="button" class="btn btn-secondary" href="../customer/login.php">&nbsp;Đăng Nhập  </a></li>
                <?php }?>
              </ul>
            </div>
          </nav>
        </div>
        <h2 style="text-align: center; margin-top: 20px">Giỏ hàng</h2>
      </br>
      <div class="container">
      <div class="tableInfo">
       <form  method="POST" action="order.php?id=<?php echo $_SESSION['customerID']?>">
        <table class="table">
          <thead>
            <tr>
              <th Style="magin: 20px " scope="col">Tên sản phẩm</th>
              <th Style="magin: 20px " scope="col">Hình ảnh</th> 
              <th Style="magin: 20px " scope="col">Giá tiền</th>
              <th Style="magin: 20px " scope="col">Chi tiết</th>
            </tr>
          </thead>
          <?php
          if (isset($_SESSION['cart'])) {
            $i=0;
            $allMoney=0;
            $allAmount=0;
            ?>
            <tbody>
              <?php foreach ($_SESSION['cart'] as $key => $value) {
                $i++;
                ?>
                <td><?= $value['productName'] ?></td>
                <td><img style="width:250px" src="../image/<?= $value['image'] ?>"></td>  
                <td><?= $value['price']?> VND</td>
                <td><?= $value['detail']?></td>
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
         
        
         
          <?php 
        }
        ?>
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