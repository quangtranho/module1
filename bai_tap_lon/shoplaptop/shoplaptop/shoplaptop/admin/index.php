<?php
include("../conection.php");
session_start ();
if(isset($_SESSION['adminID'])){
    $sql_lietke_customer = "SELECT * FROM customer ORDER BY customerID DESC";
    $query_lietke_customer = mysqli_query($mysqli,$sql_lietke_customer);
}else{
    header('location:login_admin.php');
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Quản lý</title>
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
            <a class="nav-item nav-link" href="#">Danh sách người dùng</a>
            <a class="nav-item nav-link" href="addcustomer.php">Thêm người dùng</a>
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
    <h2> DANH SÁCH NGƯỜI DÙNG</h2>
  </br>
  <div class="tableInfo">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">ID</th>
          <th scope="col">Tên đăng nhập</th> 
          <th scope="col">Họ & Tên</th>
          <th scope="col">Địa chỉ</th>
          <th scope="col">Quản lý</th>
        </tr>
      </thead>
      <?php
      $i=0;
      while ($row= mysqli_fetch_array($query_lietke_customer)) {
        $i++;
        ?>
        <tbody>
          <td><?php echo $i ?></td> 
          <td><?php echo $row['customerID'];?></td>  
          <td><?php echo $row['fullname'];?></td>   
          <td><?php echo $row['address'];?></td>    
          <td><?php echo $row['city'];?></td>
          <td>
            <a href="actionCustomer.php?id_custom= <?php echo $row['customerID'];?>">Xoa</a> 
            <a href="fixCustomer.php?id=<?php echo $row['customerID'];?>">Sua</a>
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