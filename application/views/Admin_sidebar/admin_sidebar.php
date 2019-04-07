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
                                <a href="<?php echo site_url('Admin'); ?>" class="waves-effect"><i class="fa fa-dashboard"></i> <span> Dashboard</span> </a>
                               
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-envelope"></i><span>Products<span class="pull-right"><i class="fa fa-angle-right"></i></span> </span></a>
                                <ul class="list-unstyled" style="display: none;">
                                    <li><a href="<?php echo site_url('Admin/Products'); ?>">All Products</a></li>
                                    <li><a href="<?php echo site_url('Admin/addnew_product'); ?>">Create Product</a></li>
                                    <!-- <li><a href="#">Withdraw Payments</a></li> -->
                                </ul>
                            </li>
                       
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-envelope"></i><span>Category<span class="pull-right"><i class="fa fa-angle-right"></i></span> </span></a>
                                <ul class="list-unstyled" style="display: none;">
                                    <li><a href="<?php echo site_url('Admin/Category'); ?>">All Category</a></li>
                                    <li><a href="<?php echo site_url('Admin/addnew_category'); ?>">Create Category</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-envelope"></i><span>Customer<span class="pull-right"><i class="fa fa-angle-right"></i></span> </span></a>
                                <ul class="list-unstyled" style="display: none;">
                                    <li><a href="<?php echo site_url('Admin/customer_list'); ?>">Customer List</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-envelope"></i><span>Sales<span class="pull-right"><i class="fa fa-angle-right"></i></span> </span></a>
                                <ul class="list-unstyled" style="display: none;">
                                    <li><a href="<?php echo site_url('Admin/All_orders'); ?>">All Orders</a></li>
                                    <li><a href="<?php echo site_url('Admin/Deliver_orders'); ?>">Delivered Orders</a></li>
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-envelope"></i><span>Payments<span class="pull-right"><i class="fa fa-angle-right"></i></span> </span></a>
                                <ul class="list-unstyled" style="display: none;">
                                    <li><a href="<?php echo site_url('Admin/pending_payments'); ?>">Pending Payments</a></li>
                                    <li><a href="<?php echo site_url('Admin/approve_payments'); ?>">Approved Payments</a></li>
                                     
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-envelope"></i><span>Settings<span class="pull-right"><i class="fa fa-angle-right"></i></span> </span></a>
                                <ul class="list-unstyled" style="display: none;">
                                    <li><a href="<?php echo site_url('Admin/comission_setting'); ?>">Comission Settings</a></li>
                                    <li><a href="<?php echo site_url('Admin/level_criteria_se'); ?>">Level Criteria Settings</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('Slider'); ?>" class="waves-effect"><i class="fa fa-envelope"></i><span>Slider</span></a>  
                                 
                            </li>
                            <li class="">
                                <a href="#" class="waves-effect"><i class="fa fa-lock"></i><span>Change Password</span> </a>
                               
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