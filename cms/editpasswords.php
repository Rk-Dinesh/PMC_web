<?php

 
include('connect.php');


	$email=$_POST['email'];
    $password  = $_POST['password'];
	 $confirmpassword  = $_POST['cpassword'];
	 $pass= md5($password);
		if($password==$confirmpassword){
    
	  $update_query = "UPDATE admin SET password ='$pass'  WHERE email='$email'";
  
      if (mysqli_query($connect,$update_query)) {
		  
		   echo "<script>alert('Password Resetted Successfully.Please Log In!')</script>";
		 
echo "<script>window.open('login.php','_self')</script>";
     
    }
    else
    {
		 echo "<script>alert('Error! Please Try Later')</script>";
       echo "<script>window.open('login.php','_self')</script>";
    }
			
}
		else{
			 echo "<script>alert('Password Mismatch')</script>";
       echo "<script>window.open('resetpassword.php','_self')</script>";
		}
 
 ?>