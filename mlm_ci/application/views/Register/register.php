<div class="content">
 <!-- registration -->
  <div class="main-1">
    <div class="container">
      <div class="register">
        <div class="form_error" style="color: red;font-weight: bold;">
         <center><?php echo validation_errors(); ?></center>
        </div>
        
          <form method="post"  action="<?php echo site_url('Home/register_validate'); ?>">
          <input type="hidden" name="parent_id" value="<?php print_r($parent_id); ?>">
         <div class="register-top-grid">
          <h3>PERSONAL INFORMATION</h3>
          <div class="wow fadeInLeft" data-wow-delay="0.4s">
            <span>Sponser ID<label>*</label></span>
            <input  type="text"  name="referal_id" value="" placeholder="Sponser ID">
                                               <div style="margin-top: 0px; color: red;"></div>  
           </div>
           <div class="wow fadeInLeft" data-wow-delay="0.4s">
            <span>User Name<label>*</label></span>
           <input  type="text" placeholder="Complete Name" name="full_name" required="" value="<?php print_r($user_id); ?>" readonly>
           <div style="margin-top: 0px; color: red;"></div>  
           </div>
           <div class="wow fadeInRight" data-wow-delay="0.4s">
            <span>Mobile<label>*</label></span>
             <input  type="text"  name="mobile" value="" placeholder="Phone" required="">
                                                 <div style="margin-top: 0px; color: red;"></div>
           </div>
           <div class="wow fadeInRight" data-wow-delay="0.4s">
             
            <input  type="hidden" value="" name="lastname"  placeholder="Last Name">
                                                <div style="margin-top: 0px; color: red;"></div>
           </div>
           <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>Email Address<label></label></span>
             <input  type="text" name="email" value="" placeholder="Email" >
                                                 <div style="margin-top: 0px; color: red;"></div>
           </div>
           <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>Provience<label>*</label></span>
             <input  type="text"  name="provience" value="" placeholder="Provience" required="">
                                                 <div style="margin-top: 0px; color: red;"></div>
           </div>
           <div class="wow fadeInRight" data-wow-delay="0.4s">
             <span>City<label></label></span>
             <input  type="text" name="city" value="" placeholder="City" >
                                                 <div style="margin-top: 0px; color: red;"></div>
           </div>
            
           <div class="register-bottom-grid" style="margin:0px;">
               
               <div class="wow fadeInLeft" data-wow-delay="0.4s">
                <span>Create Password<label>*</label></span>
                <input  type="password" placeholder="Password"  value="" name="password" required="">
                                                                <div style="margin-top: 0px; color: red;"></div>
               </div>
               <div class="wow fadeInRight" data-wow-delay="0.4s">
                <span>Confirm Password<label>*</label></span>
                <input  type="password" name="cpassword" value=""  placeholder="Confirm Password" required="">
                                                                <div style="margin-top: 0px; color: red;"></div>
               </div>
           </div>
                              <div class="register-but">
        <input  style="    background-color: #fff;
                    border: 2px solid #000;
                    color: #000;
                    display: inline-block;
                    font-size: 1.2em;
                    outline: medium none;
                    padding: 0.6em 2em;
                    text-transform: uppercase;
                    transition: all 0.5s ease 0s;" type="submit" value="submit">
                              </div>
        </form>
      
       </div>
     </div>
  </div>
<!-- registration -->

</div>

   
 