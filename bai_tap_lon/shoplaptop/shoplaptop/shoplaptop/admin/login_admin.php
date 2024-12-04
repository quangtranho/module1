
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>ADMIN</title>
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
        </div>
      </nav>
    </div>
  </br>
  <div style="width: 50%;">
    <h2>ĐĂNG NHẬP ADMIN</h2>
    <form method="POST" action="login_admin_submit.php">
      <tr>
        <td>ID Admin của bạn</td>
        <td><input class="form-control" type="text" name="adminID"></td>
        <td><p>Mật khẩu Admin</p></td>
        <td> <input class="form-control" type="password" name="password"></td>
        <td><input type="submit" class="btn btn-primary" name="login" value="ĐĂNG NHẬP"></td>
      </tr>
    </form>
  </br>
</div> 
</div>
</body>
</html>
