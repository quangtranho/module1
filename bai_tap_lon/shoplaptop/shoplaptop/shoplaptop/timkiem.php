<?php
include("conection.php");
if (isset ($_POST ['timkiem'])) {
$key = addslashes($_POST ['timkiem']);
$sql = "SELECT * FROM product WHERE productName LIKE '%$key%' ";
$KQ = mysqli_query($mysqli,$sql);
$count = mysqli_num_rows($KQ);

}
?>
</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Trang chủ</title>
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet"  href="bootstrap/js/bootstrap.bundle.js">
  <link rel="stylesheet"  href="bootstrap/js/bootstrap.bundle.min.js">
  <link rel="stylesheet"  href="style.css">
  <link rel="stylesheet"  href="themify-icons/themify-icons.css">
  <link rel="shortcut icon" href="https://img.icons8.com/cotton/2x/laptop--v3.png" type="image/png">

  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body> 
<?php
    include("menu.php")
    ?> 

<div class="container">
    <div class="d-flex flex-column text-center border">
<?php


    while ($row_tk = mysqli_fetch_array ($KQ)) {
    ?>
    <form class="card"  style=" float:left" action="cart/add.php?id=<?php echo $row_tk['productID'];?>" method="POST">
            <img style="width:20%" src="image/<?php echo $row_tk['image'];?>" />
            <h2><?php echo $row_tk['productName'];?></h2>
            <h6>Giá: <?php echo $row_tk['price'];?> VND</h6>
            <input type="submit" class="btn btn-info" name='submit' value="Xem chi tiết & Mua">
            <?php
                $id_cus=$_SESSION['customerID'];
            ?>
            
            </form>
            <?php
    }



?>
</div>
</div>
</body>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>