<?php
include("../conection.php");
$sql_getAll = "SELECT * FROM product ORDER BY productID DESC";
$sql_getacer = "SELECT * FROM acer ORDER BY productID DESC";
$sql_getmsi = "SELECT * FROM msi ORDER BY productID DESC";
$sql_getmouse = "SELECT * FROM mouse ORDER BY productID DESC";
$sql_getkeyboard = "SELECT * FROM keyboard ORDER BY productID DESC";
$query_getAll= mysqli_query($mysqli,$sql_getAll);
?>
<?php
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
            <a class="nav-item nav-link" href="index.php">Danh sách người dùng</a>
            <a class="nav-item nav-link" href="addCustomer.php">Thêm người dùng</a>
            <a class="nav-item nav-link" href="#">Xem tất cả các sản phẩm</a>
            <a class="nav-item nav-link" href="customerOrder.php">Xem danh sách đặt hàng</a>
            <a class="nav-item nav-link" href="addProduct.php">Thêm sản phẩm</a>
          </div>
        </div>
      </nav>
    </div>
     <div class="nav-bar">
      <h2 style="width: 30%; float:left"> Quản lý sản phẩm</h2>
     
      
    </div> 
  </br>
  <div class="tableInfo">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">ID sản phẩm</th>
          <th scope="col">Tên sản phẩm</th> 
          <th scope="col">Giá</th> 
          <th scope="col">Số lượng</th>
          <th scope="col">Hình ảnh</th>
          <th scope="col">Chi tiết</th>
          <th scope="col">mã SP</th>
          <th scope="col">Quản lý</th>
        </tr>
      </thead>
      <?php
      $i=0;
      while ($row_getAll= mysqli_fetch_array($query_getAll)){
        $i++; 
        ?>
        <tbody>
          <td><?php echo $i ?></td> 
          <td><?php echo $row_getAll['productID'];?></td>  
          <td><?php echo $row_getAll['productName'];?></td>
          <td><?php echo $row_getAll['price']?> VND</td>
          <td><?php echo $row_getAll['amount'];?></td>        
          <td> <img  style="width:250px" src="../image/<?php echo $row_getAll['image'];?>"/></td>    
          <td><?php echo $row_getAll['detail'];?></td>
          <td><?php echo $row_getAll['id_type'];?></td>
          <td>
            <a class="btn btn-primary" href="fixProduct.php?id=<?php echo $row_getAll['productID'];?>">Sửa</a>
          </td>   
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