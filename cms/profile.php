<?php
session_start();

if (!isset($_SESSION['PMCuserid'])) {
    
    header("location:login.php");
}
else{
    
    $category=$_SESSION['category'];
    
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

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <?php include('header.php'); ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include('menu.php'); ?>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">User Profile</h4>

                                    <div class="page-title-right">
                                        
                                    </div>

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Update Profile</h4>


             <?php
include('connect.php');

$userid = $_SESSION['PMCuserid'];

$query = "select * from user where userid = '$userid'";

$run = mysqli_query($connect,$query);
$c=0;
while ($row=mysqli_fetch_array($run)) {
    $c=$c+1;
   ?>

                                        <form action="editprofile.php" method="POST">
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">User Id</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="userid" value="<?php echo $row['userid']; ?>" readonly>
                                                </div>
                                            </div>
                                           
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Phone</label>
                                                <div class="col-sm-9">
                                                  <input type="number" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                  <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                                                </div>
                                            </div>
                                            
                                           

                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                    

                                                    <div>
                                                        <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    <?php } ?>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Change Password</h4>




                                        <form action="editpassword.php" method="POST">
                                            <p align="justify">Important Note: <br>Password must contain atleast one Captial letter, one small letter, one number, one special character and it should be minimum 9 character<br>
                                Example: Pass@2020</p>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">New Password</label>
                                                <div class="col-sm-9">
                                                  <input type="password" id="txtPassword" onkeyup="CheckPasswordStrength(this.value)" class="form-control" name="password"  required>
                                                   <span id="password_strength"></span>
                                                   <input type="hidden" name="userid" value="<?php echo $userid; ?>">
                                                </div>
                                            </div>

                                            <script type="text/javascript">

    function CheckPasswordStrength(password) {
        var password_strength = document.getElementById("password_strength");
 
        //TextBox left blank.
        if (password.length == 0) {
            password_strength.innerHTML = "";
            return;
        }
 
        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.
 
        var passed = 0;
 
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }
 
        //Validate for length of Password.
        if (passed > 2 && password.length > 8) {
            passed++;
        }
 
        //Display status.
        var color = "";
        var strength = "";
        switch (passed) {
            case 0:
            case 1:
                strength = "Weak";
                color = "red";
                document.getElementById("myBtn").disabled = true;
                break;
            case 2:
                strength = "Weak";
                color = "red";
                document.getElementById("myBtn").disabled = true;
                break;
            case 3:
            case 4:
                strength = "Weak";
                color = "red";
                document.getElementById("myBtn").disabled = true;
                break;
            case 5:
                strength = "Strong";
                color = "darkgreen";
                document.getElementById("myBtn").disabled = false;
                break;
        }
        password_strength.innerHTML = strength;
        password_strength.style.color = color;
    }
</script>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Confirm Password</label>
                                                <div class="col-sm-9">
                                                  <input type="password" class="form-control" name="cpassword"  required>
                                                </div>
                                            </div>
                                           
                                           

                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                    

                                                    <div>
                                                        <button type="submit" id="myBtn" disabled="true" name="updatepassword" class="btn btn-primary w-md">Change Password</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                   
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div> <!-- end row -->
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <!-- end modal -->

                <!-- subscribeModal -->
              
                <!-- end modal -->
<?php include('footer.php') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
       
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
      
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard init -->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>
<?php } ?>