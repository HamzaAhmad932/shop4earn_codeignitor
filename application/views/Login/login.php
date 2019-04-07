<!--contact-->
			<div class="content">
 <div class="main-1">
		<div class="container">
<div class="login-page">
			   <div class="account_grid">
			   <div class="col-md-6 login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                 <a class="acount-btn" href="<?php echo site_url('Home/Register'); ?>">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
                   <form action="<?php echo site_url('Home/login_validate'); ?>" method="post">
				  <div>
                                      <span>User Name <label style="color: #ff3333;">*</label></span>
                                        <input type="text" required="" name="username" placeholder="username" > 
				  </div>
				  <div>
					<span>Password <label style="color: #ff3333;    ">*</label></span>
                                        <input type="password" name="password" required="" placeholder="Password"> 
				  </div>
				  <input type="submit" value="Login">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
		   </div>
	</div>
	</div>

</div>