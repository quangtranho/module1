<?php
include('../conection.php');
?>

<?php
if(isset($_GET['id'])){
  $productID = $_GET['id'];
}else {
  echo "Empty query!";
  exit;
}
if(!isset($productID)){
  echo "Empty isbn! check again!";
  exit;
}
?>
<?php
if(isset($_POST['sua'])) {
  $productName = $_POST['productName'];
  $amount = $_POST['amount'];
  $image = $_POST['image'];
  $price = $_POST['price'];
  if ($productName == ""){echo"vui long nhap san pham!<br />";}
  if ($price == ""){echo"vui long nhap gia san pham!<br />";}
  if ($productName != ""  &&$price!= ""){
    $sql_fix = "UPDATE product SET productName = '".$productName."',amount = '".$amount."' ,image = '".$image."',price = '".$price."' WHERE productID= '$_GET[id]' ";
    mysqli_query($mysqli,$sql_fix);
    header("location: allProduct.php");
  }
} 
?>
<?php
$sql_fix = "SELECT * FROM product WHERE productID ='$productID'";
$qr_fix=mysqli_query($mysqli,$sql_fix);
$row = mysqli_fetch_array($qr_fix);
?>
<?php
include('../conection.php');
$sql_getList = "SELECT * FROM category ORDER BY categoryID DESC";
$query_getList= mysqli_query($mysqli, $sql_getList);
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
    <link rel="stylesheet"  href="../bootstrap/css/style.css">
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
  </br>

  <h2>Sửa sản phẩm</h2>
  <form method="POST" action="">
    <tr>
      <td>Tên sản phẩm</td>
      <td><input class="form-control" type="text" name="productName" value="<?php echo $row['productName'];?>"></td> 
      
      <td><p>Số lượng</p></td>
      <td> <input class="form-control" type="text" name="amount" value="<?php echo $row['amount'];?>"></td>
      <td> <label for="formFile" class="form-label">Hình ảnh</label>
        <input class="form-control" type="file" name="image" value="<?php echo $row['image'];?>">
        <img style="width:30%" src="../image/<?php echo $row['image'];?>">
      </td>
      <td><p>Giá</p></td>
      <td> <input class="form-control" type="text" name="price" value="<?php echo $row['price'];?>"></td>
      
    
  </select>
</td>
<td></br></td>
<td><input type="submit" name="sua" value="Sửa"></td>
</tr>
</form>    
</div>
</body>
</html>