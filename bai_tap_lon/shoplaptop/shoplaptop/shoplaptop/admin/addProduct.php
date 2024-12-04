<?php
include('../conection.php');
$sql_getList = "SELECT * FROM product ORDER BY productID DESC";
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
            <a class="nav-item nav-link" href="allProduct.php">Xem tất cả các sản phẩm</a>
            <a class="nav-item nav-link" href="customerOrder.php">Xem danh sách đặt hàng</a>
            <a class="nav-item nav-link" href="#">Thêm sản phẩm</a>
            <li class="nav-item">
              <a class="nav-link" href="../customer/logout.php">ĐĂNG XUẤT</a>
            </li>
          </div>
        </div>
      </nav>
    </div>
  </br>
  <h2>THÊM SẢN PHẨM</h2>
  <form method="POST" action="actionProduct.php">
    <tr>
      <td>Tên sản phẩm</td>
      <td><input class="form-control" type="text" name="productName"></td> 
      <td><p>Số lượng</p></td>
      <td> <input class="form-control" type="text" name="amount"></td>
      <td> <label for="formFile" class="form-label">Hình ảnh</label>
        <input class="form-control" type="file" id="formFile" name="image"></td>
        <td><p>Giá</p></td>
        <td> <input class="form-control" type="text" name="price"></td>
        <td><p>Chi tiết</p></td>
        <td> <input class="form-control" type="text" name="detail"></td>
        <td><p>Mã SP</p></td>
        <td> <input class="form-control" type="text" name="id_type"></td>
        
   
        
          <?php
          while ($row_getList= mysqli_fetch_array($query_getList)) {
            ?>
            <option value="<?php echo $row_getList['productID']?>" name="id_product">
            <?php
          }
          ?>
        </option>
      </select>
    </td>
    <td></br></td>
    <td><input style="margin-top:-900px" type="submit" class="btn btn-primary" name="addProduct" value="THÊM"></td>
  </tr>
</form>    
</div>
</body>
</html>
