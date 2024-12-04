<?php
include("../conection.php");
session_start();

if (isset($_POST['login'])) {
	$adminID = $_POST['adminID'];
	$password   =$_POST['password'];
	
	if($adminID==''||$password==''){
		echo '<p>Xin nhập đủ!!</p>';
	}else{
		$sql_login=mysqli_query($mysqli,"SELECT * FROM admin WHERE adminID = '$adminID' AND password = '$password' LIMIT 1");
		$count = mysqli_num_rows($sql_login);
		
		if ($count >0) {
			$_SESSION['adminID']=$adminID;
			$_SESSION['fullname']=$row_getName['fullname'];
			header("location:index.php");
		}else{
			echo '<p>Tài khoản hoặc mật khẩu sai</p>';
			?>
			<a href="login_admin.php">Quay lại trang đăng nhập</a>
			<?php
		}
	}
}	
?>