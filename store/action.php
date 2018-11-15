<?php  
 //action.php  
 if(isset($_POST["action"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "crud");  
      if($_POST["action"] =="Add")  
      {  
           $first_name = mysqli_real_escape_string($connect, $_POST["firstName"]);  
           $last_name = mysqli_real_escape_string($connect, $_POST["lastName"]);  
             
              
            
                     $query = "CALL insertUser('".$first_name."', '".$last_name."')";  
                     mysqli_query($connect, $query);  
                     echo 'Data Inserted';  
             
      }  
      if($_POST["action"] == "Update")  
      {  
           $first_name = mysqli_real_escape_string($connect, $_POST["firstName"]);  
           $last_name = mysqli_real_escape_string($connect, $_POST["lastName"]);  
            
           
                     $query = "CALL updateUser('".$_POST["id"]."', '".$first_name."', '".$last_name."')";  
                     mysqli_query($connect, $query);  
                     echo 'Data Updated';  
             
      }  
      if($_POST["action"] == "Delete")  
      {  
            
                     $query = "CALL deleteUser('".$_POST["id"]."')";  
                     mysqli_query($connect, $query);  
                     echo 'Data Deleted';  
            
      }  
 }  
 ?>  