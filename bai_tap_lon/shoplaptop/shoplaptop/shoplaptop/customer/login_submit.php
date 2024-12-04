<?php
include("../conection.php");
session_start();

if (isset($_POST['login'])) {
	$customerID = $_POST['fullname'];
	$password   =($_POST['password']);
	$sql_getName="SELECT * FROM customer WHERE fullname = '$customerID' LIMIT 1";
	$query_getName=mysqli_query($mysqli,$sql_getName);
	$row_getName=mysqli_fetch_array($query_getName);
	
	if($customerID==''||$password==''){
		echo '<p>Xin nhập đủ!!</p>';
	}else if($customerID == 1){
		
		$sql_login=mysqli_query($mysqli,"SELECT * FROM admin WHERE  password = '$password' LIMIT 1");
		$count = mysqli_num_rows($sql_login);
		if($count>0)
			header("location:../admin/index.php");
		else {
			echo '<p>Tài khoản hoặc mật khẩu sai</p>';
			?>
			 <a href="login.php">Quay lại trang đăng nhập</a> 
			<?php
		}
	}else
	{
		$password = md5($password);
		$sql_login=mysqli_query($mysqli,"SELECT * FROM customer WHERE fullname = '$customerID' AND password = '$password' LIMIT 1");
		$count = mysqli_num_rows($sql_login);
		$sql_name=mysqli_query($mysqli,"SELECT fullname FROM customer WHERE customerID= '$customerID'LIMIT 1");

		$countname= mysqli_num_rows($sql_name);
		if ($count >0) {
			$_SESSION['customerID']=$customerID;
			$_SESSION['fullname']=$row_getName['fullname'];
			header("location:../index.php");
		}else{
			echo '<p>Tài khoản hoặc mật khẩu sai</p>';
			?>
			 <a href="login.php">Quay lại trang đăng nhập</a> 
			<?php
		}
	}
}	
?> 