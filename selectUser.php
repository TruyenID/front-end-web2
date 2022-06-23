<?php  
 //select.php  
 $connect = mysqli_connect("127.0.0.1:3306", "root", "", "nhom6-front-end-2");  
 $output = array();  
  $queryUser = "SELECT * FROM user";
  $resultUser = mysqli_query($connect, $queryUser);
  if(mysqli_num_rows($resultUser) > 0)  
  {  
       while($row = mysqli_fetch_array($resultUser))  
       {  
            $output[] = $row;  
       }  
       echo json_encode($output);  
  }  
 ?>  
