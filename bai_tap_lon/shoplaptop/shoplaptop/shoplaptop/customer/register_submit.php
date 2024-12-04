<?php 
    include("../conection.php");
    // nhận dữ liệu từ người dùng  md5()
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password-repeat'];
    $address = $_POST['address'];
    $city = $_POST['city'];




    if(isset($_POST['submit']) && $_POST['fullname'] != "" && $_POST['password']!= ""  && $_POST['password-repeat'] != "" && $_POST['address'] != "" && $_POST['city'] != ""){
        if($password !=$password_repeat){
            echo("Mat khau nhap lai khong dung");
       }else {
        $password = md5($password);
        $sql_add = "INSERT INTO customer(fullname,password,address,city) VALUE('".$fullname."','".$password."','".$address."','".$city."')";
        mysqli_query($mysqli,$sql_add);
        $sql_lietke_customer = "SELECT *FROM customer ORDER BY customerID DESC";
        $query_lietke_customer = mysqli_query($mysqli,$sql_lietke_customer);
        $row = mysqli_fetch_array($query_lietke_customer);
            
            
            $success = "";
        $error_message = "";
       
                // generate OTP
                $otp = rand(100000,999999);
                // Send OTP
                require_once("mail.php");
                
            
                    $result = mysqli_query($mysqli,"INSERT INTO otp_expiry(otp,is_expired) VALUES ('" . $otp . "', 0)");
                    $current_id = mysqli_insert_id($mysqli);
                
           
        
        
        ?>

                    <?php
                }
                
             
            $password = md5($password);

                }        ?>




