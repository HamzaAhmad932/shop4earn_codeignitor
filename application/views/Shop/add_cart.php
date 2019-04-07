<!-- checkout -->
<div class="content">
<div class="cart-items">
	<div class="container">

            	
                                            <h2>My Shopping Bag ( 1)</h2>
                                            <?php foreach($cart as $r): ?>
                        <form action="http://shop4earn.com/cart/update_cart" method="post" accept-charset="utf-8">

<input type="hidden" name="cart[2][id]" value="2" />

<input type="hidden" name="cart[2][rowid]" value="c81e728d9d4c2f636f067f89cc14862c" />

<input type="hidden" name="cart[2][name]" value="Cigarette Pant" />

<input type="hidden" name="cart[2][price]" value="1000" />

<input type="hidden" name="cart[2][qty]" value="1" />
			 <div class="cart-header">
                                <a href="http://shop4earn.com/cart/remove/c81e728d9d4c2f636f067f89cc14862c"><div class='close1'></div></a>				 
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
						     						</div>
					   <div class="cart-item-info">
                                               <h3><a   style="text-transform: capitalize; cursor: pointer;"><?php echo $r->product_name; ?></a></h3>
                                               <br>
						<ul class="qty">
							<li><p>Qty: <span> <input type="text" name="qty" value="<?php echo $r->qty; ?>"  maxlength="3" size="1" style="text-align: right" />
</span></p></li>
							<li><p>FREE delivery</p></li>
							<li><p> 
                                                            </p></li>
							<li><p> 
                                                            </p></li>
						</ul>
							 <div class="delivery">                                                                                                                    <p style="color: #333333;"><?php echo $r->product_price; ?> </p>
                                                        <br>
                                                        <br>
                                                        
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
                                <?php echo $r->product_price; ?>                           </div>   
                         </div>
                         <div class="col-md-12">
                             <div class="col-md-8" style="text-align: right;">
                                <!--Sub Total--> 
                            </div>   
                            <div class="col-md-2" style="text-align: left;">
                                <b>Total:</b>
                            </div>   
                            <div class="col-md-2" style="text-align: right;">
                                <?php echo $r->product_price; ?>                          </div>   
                         </div>
                         <br>
                         <br>
                         <br>
                         <div class="col-md-12" style="text-align: right;">
                                          <button type="submit" class="btn btn-danger my-cart-btn my-cart-b" >Update Cart</button>
                                            <button type="button" class="btn btn-danger my-cart-btn my-cart-b" onclick="clear_cart()" >Clear Cart</button>
                                            <a href="<?php echo site_url('Shop/checkout'); ?>" type="button" class="btn btn-danger my-cart-btn my-cart-b" >Checkout</a>
                                            </form>  
                                            <?php endforeach; ?>
                                             </div>
                               
                                  
                 
		 </div>
		 </div>
<!-- checkout -->	

</div>
 <div class="modal fade" id="header-modal" aria-hidden="true"></div>
