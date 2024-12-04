<?php  
include('../conection.php');

//export.php  
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM orders";
 $result = mysqli_query($mysqli, $query);
 
 $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID khach hang</th>  
                         <th>Ten SP</th>  
                         <th>Gia</th>  
       <th>Ngay dat</th>
       <th>Tra truoc</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["id_customers"].'</td>  
                         <td>'.$row["note"].'</td>  
                         <td>'.$row["total"].'</td>  
                        <td>'.$row["created_at"].'</td>  
                        <td>'.$row["order_type"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=danhsachdathang.xls');
  echo $output;
 }

?>