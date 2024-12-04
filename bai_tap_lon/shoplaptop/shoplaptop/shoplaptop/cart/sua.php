<?php
if(isset($_POST['sua'])) {
  $address = $_POST['address'];
  $city = $_POST['city'];
  $id = $_POST['id'];
  
  if ($address == ""){echo"vui long nhap address!<br />";}
  if ($city == ""){echo"vui long nhap city!<br />";}
  if ( $address!= ""&& $city!= ""){
      
   $sql_fix = "UPDATE customer SET  address = '".$address."',city = '".$city."' WHERE customerID= '$id' ";
   mysqli_query($mysqli,$sql_fix);
   header("location: #");
 }
}
?>