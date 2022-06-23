 <?php  
 //delete.php  
 $connect = mysqli_connect("localhost", "root", "", "nhom6-front-end-2");  
 $data = json_decode(file_get_contents("php://input"));  

 if(count(array($data)) > 0)  
 {  
      $id = $data->send_id;  
      $query = "DELETE FROM sinhvien WHERE id='$id'";  
      if(mysqli_query($connect, $query))  
      {  
           echo 'Data Deleted';  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?>  
