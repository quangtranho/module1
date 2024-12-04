<?php
include('../conection.php');
$fullname = $_POST['fullname'];
$password = $_POST['password'];
$address = $_POST['address'];
$city = $_POST['city'];
if (isset($_POST['addCustomer'])) {
	$sql_add = "INSERT INTO customer(fullname,password,address,city) VALUE('".$fullname."','".$password."','".$address."','".$city."')";

	mysqli_query($mysqli,$sql_add);
	header('location:index.php');
}
else{
	$id= $_GET['id_custom'];
	$sql_xoa = "DELETE FROM customer WHERE customerID='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('location:index.php');
}
?>
