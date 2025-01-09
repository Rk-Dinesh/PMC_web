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
        <link rel="shortcut icon" href="assets/images/aicon.png">

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
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                       
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            
                            <div class="col-xl-12">
                                <div class="row">
                                <?php
include('connect.php');

$select_query = "select * from contact";

$run = mysqli_query($connect,$select_query);

$c=0;

while ($row = mysqli_fetch_array($run)) {

$c = $c+1;
}

?>
                                    <div class="col-md-6">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Total Contact Enquiry's</p>
                                                        <h4 class="mb-0"><?php echo $c; ?></h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<?php
include('connect.php');

$select_query = "select * from newsletter";

$run = mysqli_query($connect,$select_query);

$c=0;

while ($row = mysqli_fetch_array($run)) {

$c = $c+1;
}

?>
                                    <div class="col-md-6">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Total News Letter Subscribers</p>
                                                        <h4 class="mb-0"><?php echo $c; ?></h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center ">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-user font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                     
                                </div>
                                <!-- end row -->

                                
                            </div>
                        </div>
                        <!-- end row -->

                      
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Recently Contact Enquirys</h4>
                                        <div class="table-responsive">
                                             <table class="table align-middle table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        
                                                        <th class="align-middle">#</th>
                                                        <th class="align-middle">Date</th> 
                                                        <th class="align-middle">Name</th>
                                                        <th class="align-middle">Phone</th>
                                                        <th class="align-middle">Email</th>
                                                        <th class="align-middle">Subject</th>
                                                        
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
include('connect.php');

$select_query = "select * from contact order by id desc";

$run = mysqli_query($connect,$select_query);

$c=0;

while ($row = mysqli_fetch_array($run)) {

$c = $c+1;


?>
                                                    <tr>
                                                       
                                                       
                                                        <td><?php echo $c; ?></td>
                                                        <td>
                                                            <?php echo $row['datetime']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['phone']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['email']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['subject']; ?>
                                                        </td>
                                                       
                                                       
                                                          
                                                      
                                                    </tr>
<?php 
if($c == 10){
    break;
}

} ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>




                        </div>
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