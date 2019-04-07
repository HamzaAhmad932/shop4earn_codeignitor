 <div id="wrapper">  <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <!--<a href="index.html" class="logo text-center">Admiria</a>-->
                        <a href="#" class="logo"><!-- <img src="https://www.easylifecard.com/resources/admin/assets/images/logo-sm.png" height="36" alt="logo"> -->Logo</a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    <div id="sidebar-menu">
                        <ul>


                            <li class="">
                                <a href="<?php echo site_url('Users'); ?>" class="waves-effect"><i class="fa fa-dashboard"></i> <span> Dashboard</span> </a>
                               
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-envelope"></i><span>Payments<span class="pull-right"><i class="fa fa-angle-right"></i></span> </span></a>
                                <ul class="list-unstyled" style="display: none;">
                                    <li><a href="<?php echo site_url('Users/withdraw_payment'); ?>">Withdraw Payments</a></li>
                                    <li><a href="<?php echo site_url('Users/pending_payments'); ?>">Pending Payments</a></li>
                                    <li><a href="<?php echo site_url('Users/approved_payments'); ?>">Approved Payments</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('Users/view_profile'); ?>" class="waves-effect"><i class="fa fa-user"></i> <span>Go To Website</span> </a>
                               
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('Users/view_profile'); ?>" class="waves-effect"><i class="fa fa-user"></i> <span>Request Payout</span> </a>
                               
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('Users/view_profile'); ?>" class="waves-effect"><i class="fa fa-user"></i> <span>Purchase History</span> </a>
                               
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('Users/view_profile'); ?>" class="waves-effect"><i class="fa fa-user"></i> <span>My Tree</span> </a>
                               
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('Users/view_profile'); ?>" class="waves-effect"><i class="fa fa-user"></i> <span>My References</span> </a>
                               
                            </li>
                 
                             <li class="">
                                <a href="<?php echo site_url('Home/Login');?>" class="waves-effect"><i class="fa fa-key"></i></i> <span> Logout</span> </a>
                               
                            </li>

                         
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->