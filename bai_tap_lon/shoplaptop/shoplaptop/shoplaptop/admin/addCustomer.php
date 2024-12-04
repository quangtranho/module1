<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Thêm người dùng</title>
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
           <a class="nav-item nav-link" href="#">Thêm người dùng</a>
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
 </br>
 <h2>THÊM NGƯỜI DÙNG</h2>
 <form method="POST" action="actionCustomer.php">
  <tr>
    <td>Email đăng nhập</td>
    <td><input class="form-control" type="email" name="fullname"></td> 
    <td><p>Mật khẩu</p></td>
    <td> <input class="form-control" type="password" name="password"></td>
    <td><p>Họ và tên</p></td>
    <td> <input class="form-control" type="text" name="address"></td>
    <td><p>Địa chỉ</p></td>
    <td> <input class="form-control" type="text" name="city"></td>
    <td></br></td>
    <td><input type="submit" class="btn btn-primary" name="addCustomer" value="Thêm"></td>
  </tr>
</form>    
</div>
</body>
</html>
