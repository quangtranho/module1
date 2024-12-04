<?php
include('../conection.php');
?>

<?php
if(isset($_GET['id'])){
  $customerID = $_GET['id'];
}else {
  echo "Empty query!";
  exit;
}
if(!isset($customerID)){
  echo "Empty isbn! check again!";
  exit;
}
?>
  <!-- lấy dữ liệu hiển thị ra màn hình -->
<?php
$sql_fix = "SELECT * FROM customer WHERE customerID = '$customerID'";
$qr_fix=mysqli_query($mysqli,$sql_fix);
$row = mysqli_fetch_array($qr_fix);
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
            <a class="nav-item nav-link" href="../customer.php">Danh sách người dùng</a>
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

  <h2>Sửa Thông tin người dùng</h2>
  <form method="POST" action="">
    <tr>
      <td>tên đăng nhập</td>
      <td><input class="form-control" type="text"  name="fullname" value="<?php echo $row['fullname'];?>" ></td> 
      <td><p>Họ và Tên</p></td>
      <td> <input class="form-control" type="text" name="address" value="<?php echo $row['address'];?>" ></td>
      <td><p>Địa chỉ</p></td>
      <td> <input class="form-control" type="text" name="city" value="<?php echo $row['city'];?>" ></td>
      <td></br></td>
      <td><input type="submit" name="sua" value="Sửa"></td>
    </tr>
  </form>    
</div>
</body>
</html>
