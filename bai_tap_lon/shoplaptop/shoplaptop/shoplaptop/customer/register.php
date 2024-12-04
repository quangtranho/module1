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
            <a class="nav-link active"  href="login.php">ĐĂNG NHẬP</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <form action="register_submit.php" method="POST">
    <h5>ĐĂNG KÍ</h5  >
    <hr>
    <div>
    <label for="email"><b>Email đăng nhập</b></label>
    <br>
    <input style="    width: 100%;height: 60px;border-radius: 13px;border-collapse: collapse;border: none;" type="email" name="fullname" required>
    </div>
    <label for="password"><b>Mật khẩu</b></label>
    <input type="password" name="password" required>
    <label for="password-repeat"><b>Nhập lại mật khẩu</b></label>
    <input type="password" name="password-repeat" required> 
    <label for="text"><b>Họ và tên</b></label>
    <input type="text" name="address" required>
    <label for="text"><b>Địa chỉ</b></label>
    <input type="text" name="city" required>
    
    <div class="clearfix">
     <button type="submit" class="signupbtn" name="submit">Đăng kí</button>
     
   </form>
 </div>
</div>

</body>
</html>







