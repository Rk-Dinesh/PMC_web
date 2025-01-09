<div class="vertical-menu">
                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li>
                                <a href="index.php" class="waves-effect">
                                    <i class="bx bx-home"></i>
                                    <span key="t-chat">Dashboard</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="contact.php" class="waves-effect">
                                <i class='bx bxs-user-detail'></i>
                                    <span key="t-chat">Contact </span>
                                </a>
                            </li>
                            <li>
                                <a href="newsletter.php" class="waves-effect">
                                <i class='bx bx-list-check'></i>
                                    <span key="t-chat">News Letter</span>
                                </a>
                            </li>
                            
                              
                            <?php 
                            
                            if($_SESSION['category']=="Admin"){ ?>
                            <li>
                                <a href="user.php" class="waves-effect">
                                    <i class="bx bx-smile"></i>
                                    <span key="t-chat">Users</span>
                                </a>
                            </li>
                            <?php } ?>

                           
                            
                            
                            

                            


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>