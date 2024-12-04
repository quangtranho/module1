<?php 
    include("../conection.php");
if(isset($_POST["otpp"])) {
    $result = mysqli_query($mysqli,"SELECT * FROM otp_expiry WHERE otp='" . $_POST["otp"] . "'");
    $count  = mysqli_num_rows($result);
    if($count > 0 ){
        echo ("Đăng Ký tài khoản thành công");?>
        <a href="login.php" style="color: red" >Trở về trang đăng nhập</a>
   <?php
    }else{
        echo ("Mã OTP sai!!!!!!!!!!");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Đăng kí</title>
  <link href="register.css" rel="stylesheet">
  <link rel="stylesheet"  href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet"  href="../bootstrap/js/bootstrap.bundle.js">
  <link rel="stylesheet"  href="../bootstrap/js/bootstrap.bundle.min.js">
  <link rel="stylesheet"  href="register.css">
  <link rel="stylesheet"  href="../style.css">
  <link rel="shortcut icon" href="https://img.icons8.com/cotton/2x/laptop--v3.png" type="image/png">

</head>
<body>
  
  <div class="container">
    <nav class="navbar navbar-expand-lg header-custom sticky-top">
      <div class="container-fluid font-header-custom">
      <a class="navbar-branch" href="../index.php">
        <img src="../image/logotan.png" height="60">
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <form action="" method="POST">
    <h5>Nhập OTP</h5  >
    <hr>
 
    <label for="text"><b>Mời nhập OTP</b></label>
    <input type="text" name="otp" required>
    
    
    <div class="clearfix">
     <button type="submit" class="" name="otpp">Đăng kí</button>
     
   </form>
 </div>
</div>

</body>
</html>







