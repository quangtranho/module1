<?php
include("../conection.php");
$sql_pro= "SELECT * FROM product WHERE product.id_category='$_GET[id]' ORDER BY productID DESC";
$query_pro= mysqli_query($mysqli,$sql_pro);
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
?>

<!DOCTYPE html>
<html style="scroll-behavior: smooth;">
<head>
  <meta charset=utf-8>
  <title>Sản phẩm</title>
  <link rel="stylesheet"  href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet"  href="../bootstrap/js/bootstrap.bundle.js">
  <link rel="stylesheet"  href="../bootstrap/js/bootstrap.bundle.min.js">
  <link rel="stylesheet"  href="../style.css">

</head>
<body>

  <div class="menu sticky-top">
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
              <a class="nav-link active"  href="index.php">TẤT CẢ SẢN PHẨM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../cart">GIỎ HÀNG</a>
            </li>
            <?php if(isset($_SESSION['customerID'])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="../cart/history.php">LỊCH SỬ MUA HÀNG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../customer/logout.php">ĐĂNG XUẤT</a>
              </li>
              <li class="nav-item">
                <a type="button" class="btn btn-secondary" ></span> <?php echo $_SESSION['customerID']?></a>
              </li>
            <?php } else {?>
              <li><a type="button" class="btn btn-secondary" href="../customer/login.php">&nbsp;ĐĂNG NHẬP  </a></li>
            <?php }?>
          </ul>
          <?php
          if (isset($_SESSION['cart'])) {
            ?>
            <h5>Đã thêm vào giỏ</h5>
            <?php
          }
          ?>
        </div>
      </div>
    </nav>
    <div style="margin-top:10px">

        <img style="display: block;margin-left: auto; margin-right: auto" src="../image/laptopasus.png" height="">
    
</div>
  <?php
  while($row_pro = mysqli_fetch_array($query_pro)){
    ?>
    <form action="../cart/add.php?id=<?php echo $row_pro['productID'];?>" method="POST">
    <div class="card" style="width: 20%; float: left; margin:5px" action="../cart/add.php?id=<?php echo $row_product['productID'];?>" method="POST">
         <div class="d-flex flex-column text-center border ">
           <img src="../image/<?php echo $row_pro['image'];?>"/>
           <div>
           <h2><?php echo $row_pro['productName'];?></h2>
           <h6>Giá: <?php echo $row_pro['price'];?></h6>
           <input type="submit" class="btn btn-primary" name='submit' value="Mua">
           <?php
           $id_cus= $_SESSION['customerID'];
           ?>
         </div>
       </div>
      </div>
     </div>
   </form>
   <?php
 }
 ?>
</div>
</div>
<div class="position-fixed" style="bottom:10px; right:5px;">
      <a href="https://www.facebook.com/hutechuniversity">
      <img style="" src="../image/facebook.png" height="60">
      </a>
   </div> 
</body>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>