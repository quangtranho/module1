<?php
include("../conection.php");
$sql_pro= "SELECT * FROM product WHERE product.id_category='$_GET[id]' ORDER BY productID DESC";
$query_pro= mysqli_query($mysqli,$sql_pro);

$sql_cate= "SELECT * FROM category WHERE category.categoryID='$_GET[id]' LIMIT 1";
$query_cate= mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);

$sql_getList = "SELECT * FROM category ORDER BY categoryID DESC";
$query_getList= mysqli_query($mysqli, $sql_getList);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Quản lý sản phẩm</title>
    <link rel="stylesheet"  href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet"  href="../bootstrap/js/bootstrap.bundle.js">
    <link rel="stylesheet"  href="../bootstrap/js/bootstrap.bundle.min.js">
</head>
<body>
  <div class="container">
    <div class="menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="customer.php">Danh sách người dùng</a>
            <a class="nav-item nav-link" href="addCustomer.php">Thêm người dùng</a>
            <a class="nav-item nav-link" href="allProduct.php">Xem tất cả các sản phẩm</a>
            <a class="nav-item nav-link" href="customerOrder.php">Xem danh sách đặt hàng</a>
            <a class="nav-item nav-link" href="addProduct.php">Thêm sản phẩm</a>
            <li class="nav-item">
              <a class="nav-link" href="../customer/logout.php">ĐĂNG XUẤT</a>
            </li>
            
          </div>
        </div>
      </nav>
    </div>
    <div class="nav-bar">
      <h2 style="width: 30%; float:left"><?php echo $row_title['name']?></h2>
      <?php
      while ($row_getList= mysqli_fetch_array($query_getList)) {
        ?>
        <a class="btn btn-primary" href="caProduct.php?danhmucsanpham&id=<?php echo $row_getList['categoryID']?>"><?php echo $row_getList['name']?></a>
        <?php
      }
      ?>
    </div>
  </br>
  <div class="tableInfo">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">ID sản phẩm</th>
          <th scope="col">Tên sản phẩm</th> 
          <th scope="col">Đơn vị</th> 
          <th scope="col">Số lượng</th>
          <th scope="col">Hình ảnh</th>
          <th scope="col">Giá</th>
        </tr>
      </thead>
      <?php
      $i=0;
      while ($row_pro= mysqli_fetch_array($query_pro)){
        $i++; 
        ?>
        <tbody>
          <td><?php echo $i ?></td> 
          <td><?php echo $row_pro['productID'];?></td>  
          <td><?php echo $row_pro['productName'];?></td>
          <td><?php echo $row_pro['price'];?> VND</td>
          <td><?php echo $row_pro['amount'];?></td>        
          <td> <img src="../image/<?php echo $row_pro['image'];?>"/></td>    
          <td><?php echo $row_pro['price'];?></td>
          
        </tbody> 
        <?php
      }
      ?>
    </table>
  </div>
</div>
</nav>
</div>
</nav>
</div>

</body>
</html>