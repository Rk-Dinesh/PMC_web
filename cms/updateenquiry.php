<?php

include('connect.php');

    $id  = $_POST['id'];
    $note  = $_POST['note'];

    $update_query = "UPDATE `enquiry` SET `note`='$note'WHERE id='$id' ";
  
      if (mysqli_query($connect,$update_query)) {
    
         
echo "<script>window.open('enquiry.php','_self')</script>";
     
 
    }
    else
    {
       echo mysqli_errno;
    }



 ?>