<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "nhom6-front-end-2");  
 
 $data = json_decode(file_get_contents("php://input"));  
 
 if(count(array($data)) > 0)  
 
 {  
     $id_received = mysqli_real_escape_string($connect, $data->id_for_update);
     $name_received = mysqli_real_escape_string($connect, $data->name_for_update);       
     $phone_received = mysqli_real_escape_string($connect, $data->phone_for_update);
     $mssv_received = mysqli_real_escape_string($connect, $data->msvv_for_update);
     $address_received = mysqli_real_escape_string($connect, $data->address_for_update);
     $majors_received = mysqli_real_escape_string($connect, $data->majors_for_update);

     $query = "UPDATE sinhvien SET name = '$name_received', phone = '$phone_received',mssv = '$mssv_received', address = ' $address_received', majors ='$majors_received' WHERE id = '$id_received'";  

  
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Updates...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?>  
