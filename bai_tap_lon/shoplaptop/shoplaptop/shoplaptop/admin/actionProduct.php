<?php
include('../conection.php');
$productName = $_POST['productName'];
$amount = $_POST['amount'];
$image = $_POST['image'];
$price = $_POST['price'];
$detail = $_POST['detail'];
$id_type = $_POST['id_type'];
if (isset($_POST['addProduct'])) {
  $sql_add = "INSERT INTO product(productName,amount,image,price,detail,id_type) VALUE('".$productName."','".$amount."','".$image."','".$price."','".$detail."','".$id_type."')";
  mysqli_query($mysqli,$sql_add);
  header('location:allProduct.php');
}else{
  $id= $_GET['id_ve'];
  $sql_xoa = "DELETE FROM product WHERE productID='".$id."'";
  mysqli_query($mysqli,$sql_xoa);
  header('location:allProduct.php');
}
?>