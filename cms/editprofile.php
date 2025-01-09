<?php
session_start();
include('connect.php');




    $userid  = $_POST['userid'];
    $name  = $_POST['name'];
    $email  = $_POST['email'];
    $phone = $_POST['phone'];
   



    $update_query = "UPDATE `user` SET `name`='$name', `email`='$email', `phone`='$phone' WHERE userid='$userid' ";
  
      if (mysqli_query($connect,$update_query)) {
      $_SESSION['name'] = $name;
         
      echo "<script>window.open('profile.php','_self')</script>";
     
 
    }
    else
    {
       echo mysqli_errno;
    }



 ?>