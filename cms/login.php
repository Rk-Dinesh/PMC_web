<?php
session_start();
?>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Pick My Course</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Pick My Course" name="description" />
        <meta content="Pick My Course" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/Pick_MY_Course_Favicon.png">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-dark">Welcome Back !</h5>
                                            <p class="text-dark">Sign in to continue to Pick My Course.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="auth-logo">
                                    <a href="" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/Pick_MY_Course_Favicon.png" alt="" height="40">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class=" rounded-circle bg-light">
                                                <img src="assets/images/Pick_MY_Course_Favicon.png" alt=""  height="40">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" action="login.php" method="post">
        
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Phone</label>
                                            <input type="number" name="phone" class="form-control" id="username" placeholder="Enter your Phone Number" required>
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" required>
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>

                                       
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" name="login" type="submit">Log In</button>
                                        </div>
            
                                      

                                       
                                    </form>

                                    <?php



if (isset($_POST['login'])) {

    include('connect.php');
   $phone= $_POST['phone'];
   $password = $_POST['password'];
   $password = md5($password);
   
  $admin_query = "select * from user where phone='$phone' AND password='$password'";

  $run = mysqli_query($connect,$admin_query);

    if(mysqli_num_rows($run)>0)
    {

while ($row=mysqli_fetch_array($run)) {
    
    $category=$row['role'];
    $name = $row['name'];
    $userid = $row['userid'];
    $permission = $row['permission'];
}

    if($permission == "on"){

      
        $_SESSION['category']=$category;
        $_SESSION['name'] = $name;
        $_SESSION['PMCuserid'] = $userid;
        echo "<script>window.open('index.php','_self')</script>";
    }
    else
    {
        ?>
       
                                       
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                      <strong>Sorry <?php echo $name; ?>! You don't have permission to Login</strong>  Please contact administrator.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div> 
        <?php 
    }
    }
    else {
        ?>
       
                                       
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                      <strong>Invalid Email/Password </strong>  Please Try Again.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div> 
        <?php

     
    
    


       ?>
       
                                    
        <?php
    
}
}
    
?>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                               
                                <p>© <script>document.write(new Date().getFullYear())</script> Pick My Course.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
</html>
