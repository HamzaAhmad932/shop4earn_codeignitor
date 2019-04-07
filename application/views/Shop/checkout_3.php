<!-- checkout -->
<div class="content">
<div class="cart-items">
	<div class="container">
            <h2>3. Confirm Orded</h2>
			<form class="checkout_form clearfix" action="<?php echo site_url('Shop/finish_order')?>" method="post"> 
                <?php foreach($cart as $r): ?>
                                    
<input type="hidden" name="product_name" value="<?php echo $r->product_name; ?>" />
<input type="hidden" name="product_des" value="<?php echo $r->product_des; ?>" />
<input type="hidden" name="qty" value="<?php echo $r->qty; ?>" />
<input type="hidden" name="product_price" value="<?php echo $r->product_price; ?>" />
<input type="hidden" name="basic_vol" value="<?php echo $r->basic_vol; ?>" />
<input type="hidden" name="booster_comission" value="<?php echo $r->booster_com; ?>" />
<input type="hidden" name="payment_method" value="<?php print_r($payment_method); ?>" />


			 <div class="cart-header">
                              
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
						    						</div>
					   <div class="cart-item-info">
                                               <h3><a style="text-transform: capitalize; cursor: pointer;"><?php echo $r->product_name; ?></a></h3>
                                               <br>
						<ul class="qty">
							<li><p>Qty: <span><?php echo $r->qty; ?></span></p></li>
							<li><p>FREE delivery</p></li>
                                                        
						</ul>
							 <div class="delivery">
                                                            
                                                        <p style="color: #333333;"><?php echo $r->product_price; ?> </p>
							 <span  style="color: #333333;"><?php echo $r->product_price; ?></span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
                         
                         
                                             <div class="col-md-12" >
                            <div class="col-md-8" style="text-align: right;">
                                <!--Sub Total--> 
                            </div>   
                            <div class="col-md-2" style="text-align: left;">
                                <b>Sub Total:</b>
                            </div>   
                            <div class="col-md-2" style="text-align: right;">
                            <?php echo $r->product_price; ?>                          </div>   
                         </div>
                         <div class="col-md-12">
                             <div class="col-md-8" style="text-align: right;">
                                <!--Sub Total--> 
                            </div>   
                            <div class="col-md-2" style="text-align: left;">
                                <b>Total:</b>
                            </div>   
                            <div class="col-md-2" style="text-align: right;">
                               <?php echo $r->product_price; ?>                           </div>   
                         </div>
                         <br>
                         <br>
                         <br>
                         <div class="col-md-12" style="text-align: right;">
                                             <input style="background: #333333; color: #ffffff;" class="btn btn-danger my-cart-btn my-cart-b" type="submit" name="confirm" value="Confirm">
                                            
                                          
                         </div>
                     <?php endforeach; ?>
                        </form>
                               
                                  </div>
		 </div>
<!-- checkout -->	

</div>