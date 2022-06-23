 <?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "nhom6-front-end-2");  
 
 $data = json_decode(file_get_contents("php://input"));  
 
 if(count(array($data)) > 0)  
 
 {  
      $name_received = mysqli_real_escape_string($connect, $data->send_name);       
      $phone_received = mysqli_real_escape_string($connect, $data->send_phone);
      $status_received = mysqli_real_escape_string($connect, $data->send_status);
      $mssv_received = mysqli_real_escape_string($connect, $data->send_mssv);
      $address_received = mysqli_real_escape_string($connect, $data->send_address);
      $majors_received = mysqli_real_escape_string($connect, $data->send_majors);
      $btnname_received = mysqli_real_escape_string($connect, $data->send_btnName);
     
   
	  if($btnname_received == 'ADD'){
      $query = "INSERT INTO sinhvien(name, phone, status, MSSV, address, majors) VALUES ('$name_received', '$phone_received','$status_received',' $mssv_received','$address_received','$majors_received')";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Inserted...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
     }



     if($btnname_received == 'Update'){
          $id_received = mysqli_real_escape_string($connect, $data->send_id);

          $query = "UPDATE sinhvien SET name = '$name_received', phone = '$phone_received', status = '$status_received', mssv = '$mssv_received', address = '$address_received', majors ='$majors_received' WHERE id = '$id_received'";  

  
          if(mysqli_query($connect, $query))  
          {  
               echo 'Data Updated';  
          }  
          else  
          {  
               echo 'Error';  
          }  
     }




 }  
 ?>  
