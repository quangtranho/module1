<?php
include("../conection.php");
session_start ();
if(isset($_SESSION['adminID'])){
    $sql_lietke_Order = "SELECT * FROM orders ORDER BY ordersID DESC";
    $query_lietke_Order = mysqli_query($mysqli,$sql_lietke_Order);
    // $sql_lietke_tenKhacHang = "SELECT * FROM customer  WHERE  customerID = orders.id_customers ORDER BY customerID DESC";
    // $query_lietke_tenKhachHang = mysqli_query($mysqli,$sql_lietke_tenKhachHang);
    // $row_Customer= mysqli_fetch_array($query_lietke_tenKhachHang);
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
    <h2> DANH SÁCH ĐẶT HÀNG CỦA KHÁCH HÀNG</h2>
  </br>
  <div class="tableInfo">
    <table class="table">
      <thead>
      <tr>
              <th scope="col">STT</th>
              <th scope="col">ID Khách Hàng</th>
              <th scope="col">Tên Sản phẩm</th>
              <th scope="col">Giá tiền</th>
              <th scope="col">Ngày đặt</th>
              <th scope="col">Trả trước</th>
            </tr>
      </thead>
      <?php
      $i=0;
      while ($row_Order = mysqli_fetch_array($query_lietke_Order)) {
        $i++;
        ?>
        <tbody>
          <td><?php echo $i ?></td> 
          <td><?php echo $row_Order['id_customers'];?></td>   
          <td><?php echo $row_Order['note'];?></td>
          <td><?php echo $row_Order['total'];?></td>    
          <td><?php echo $row_Order['created_at'];?></td>
          <td><?php echo $row_Order['order_type'];?></td>
         
        </tbody>  
        <?php
      }
      ?>
    </table>
    <!-- xuất ra exel -->
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Xuất danh sách" />
    </form>
  </div>
</div>
</nav>
</div>
</nav>
</div>

</body>
</html>