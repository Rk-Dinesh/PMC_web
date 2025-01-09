<?php

include('connect.php');

if (isset($_POST['update'])) {

    $id  = $_POST['id'];
    $name  = $_POST['name'];
    $email  = $_POST['email'];
    $phone = $_POST['phone'];
    $designation = $_POST['designation'];
    $category = $_POST['category'];

    $update_query = "UPDATE `admin` SET `name`='$name', `email`='$email', `phone`='$phone', `designation`='$designation', `category`='$category' WHERE id='$id' ";
  
      if (mysqli_query($connect,$update_query)) {
    
          
echo "<script>window.open('users.php','_self')</script>";
     
   
     
    }
    else
    {
       echo mysqli_errno;
    }

}

 ?>