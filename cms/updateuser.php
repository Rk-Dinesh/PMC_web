<?php

include('connect.php');




    $userid  = $_POST['userid'];
    $name  = $_POST['name'];
    $email  = $_POST['email'];
    $phone = $_POST['phone'];
   
 
 

    $update_query = "UPDATE `user` SET `name`='$name', `email`='$email', `phone`='$phone' WHERE userid='$userid' ";
  
      if (mysqli_query($connect,$update_query)) {
    
         
echo "<script>window.open('viewuser.php?userid=$userid','_self')</script>";
     
 
    }
    else
    {
       echo mysqli_errno;
    }



 ?>