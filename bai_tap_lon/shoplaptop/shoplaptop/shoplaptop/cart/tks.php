<?php 
include("../conection.php");
if(isset($_GET['partnerCode'])){
    $partnerCode = $_GET['partnerCode'];
    $orderId = $_GET['orderId'];
    $amount = $_GET['amount'];
    $orderInfo = $_GET['orderInfo'];
    $orderType = $_GET['orderType'];
    $transId = $_GET['transId'];
    $payType = $_GET['payType'];
    $code_order = rand(0,9999);
    $get_date=date("Y-m-d H:i:s");
    $id='quangopi2501@gmail.com';




    $sql_add="INSERT INTO orders(id_customers,created_at,total,note,order_type) VALUE('".$id."','".$get_date."','".$amount."','".$orderInfo."','".$orderType."')";
    $order_query=mysqli_query($mysqli,$sql_add);

    $insert_atm = "INSERT INTO ordersmomo( partner_code,order_id,amount,order_info,order_type,trans_id,pay_type,code_cart) VALUE 
    ('".$partnerCode."','".$orderId."','".$amount."','".$orderInfo."','".$orderType."','".$transId."','".$payType."','".$code_order."')";
    
    $cart_query = mysqli_query($mysqli,$insert_atm);
    if ($cart_query) {
        echo '<h3>Giao dịch thanh toán MoMo ATM thành công!</h3>';
    }else 
        echo '<h3>Giao dịch thất bại!</h3>';








}









?>