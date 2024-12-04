<?php
  include("../conection.php");
  session_start();
  if(isset($_SESSION['customerID'])){
    $id=$_SESSION['customerID'];
    $get_date=date("Y-m-d H:i:s");
    if (isset($_SESSION['cart'])) {
      $allMoney=0;
      foreach ($_SESSION['cart'] as $value) {
        $Money =$value['qty']*$value['price'];
        $allMoney +=$Money;
      }
    }
    $note="";
    if (isset($_POST['submit'])) {
      // foreach ($_SESSION['cart'] as $key => $value){
        $aa = $value['productName'];
      $sql_add="INSERT INTO orders(id_customers,created_at,total,note) VALUE('".$id."','".$get_date."','".$allMoney."','".$aa."')";
      $order_query=mysqli_query($mysqli,$sql_add);
    // } 
  }
    $sql_customer = "SELECT * FROM customer WHERE customerID='".$id."'";
    $query_customer = mysqli_query($mysqli,$sql_customer);
    $row= mysqli_fetch_array($query_customer);
    $sql_getOrder="SELECT * FROM orders WHERE id_customers='$id'";
    $query_getOrder=mysqli_query($mysqli,$sql_getOrder);
  }else{
    echo "loiiiiiiiiiiii";
  }
  
?>