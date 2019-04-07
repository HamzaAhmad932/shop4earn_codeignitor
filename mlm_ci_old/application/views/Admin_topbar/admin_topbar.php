       <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">
                           

                            <ul class="list-inline float-right mb-0">
                      
             
                             
                         
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="https://www.easylifecard.com/resources/admin/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                 
                                       
                                        <a class="dropdown-item" href="<?php echo site_url('Login');?>"><i class="fa fa-lock"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Dashboard</h3>
                                    
                                </li>
                                 <li class="hide-phone list-inline-item app-search pull-right">
                                    <h3 class="page-title">Welcome <?php print_r($full_name['full_name']); ?></h3>
                                    
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>

                    </div>
                    <!-- Top Bar End -->