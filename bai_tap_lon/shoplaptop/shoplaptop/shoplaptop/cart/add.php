<?php
include("../conection.php");
session_start();
$id= isset($_GET['id']) ? $_GET['id']: '';
$product="SELECT * FROM product WHERE productID='".$id."' LIMIT 1";
$query=mysqli_query($mysqli,$product);
$row=mysqli_fetch_assoc($query);
if($row){
	if (isset($_SESSION['cart'])) {
		if (isset($_SESSION['cart'][$id])) {
			$_SESSION['cart'][$id]['qty']+=1;
		}else{
			$_SESSION['cart'][$id]['qty']=1;
		}
		$_SESSION['cart'][$id]['productName']=$row['productName'];
		$_SESSION['cart'][$id]['image']=$row['image'];
		$_SESSION['cart'][$id]['price']=$row['price'];
		$_SESSION['cart'][$id]['detail']=$row['detail'];
		header('location:index.php');exit();

	}else{	
		$_SESSION['cart'][$id]['qty']=1;
		$_SESSION['cart'][$id]['productName']=$row['productName'];
		$_SESSION['cart'][$id]['image']=$row['image'];
		$_SESSION['cart'][$id]['price']=$row['price'];
		$_SESSION['cart'][$id]['detail']=$row['detail'];
		header('location:index.php');exit();
	}
}else{
	header('location:../allProduct/index.php');exit();	
}
?>