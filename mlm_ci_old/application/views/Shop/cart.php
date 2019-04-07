<!-- checkout -->
<div class="content">
<div class="cart-items">
	<div class="container">
 
                    <?php
                    if($cart = $this->cart->contents()){  ?>
                        <h2>My Shopping Bag ( <?php $ocartbag = $this->cart->contents(); if(!empty($ocartbag))
                                                    {
                                                        echo $this->cart->total_items();
                                                    }
                                                    else
                                                    {
                                                        echo "0";
                                                    }
                        ?>)</h2>
                        <?php
                            echo form_open('Home/update_cart');
                            $grand_total = 0;
                            $i = 1;
                            foreach ($cart as $item)
                            {
                                echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                                echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                                echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                                echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                                echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                    ?>
			 <div class="cart-header">
                                <?php
                                        $path = "<div class='close1'></div>";
                                         echo anchor('cart/remove/' . $item['rowid'], $path); 
                                    ?>
				 
				 <div class="cart-sec simpleCart_shelfItem">
						 
					   <div class="cart-item-info">
                                               <h3><a   style="text-transform: capitalize; cursor: pointer;"><?php echo $item['name']; ?></a></h3>
                                               <br>
						<ul class="qty">
							<li><p>Qty: <span> <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?></span></p></li>
							<li><p>FREE delivery</p></li>
							<li><p> 
                                                            </p></li>
							<li><p> 
                                                            </p></li>
						</ul>
							 <div class="delivery">
                                                             <?php $grand_total = $grand_total + $item['subtotal']; ?>
                                                        <p style="color: #333333;">Rs. <?php echo number_format($item['price'], 2); ?> </p>
                                                        <br>
                                                        <br>
                                                        
							 <span  style="color: #333333;">Rs. <?php echo number_format($item['subtotal'], 2) ?></span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
                         
                         
                    <?php } 
                    ?>
                         <div class="col-md-12" >
                            <div class="col-md-8" style="text-align: right;">
                                <!--Sub Total--> 
                            </div>   
                            <div class="col-md-2" style="text-align: left;">
                                <b>Sub Total:</b>
                            </div>   
                             <div class="col-md-2" style="text-align: right;">
                                Rs. <?= number_format($grand_total,2)?>
                            </div>   
                         </div>
                         <div class="col-md-12">
                             <div class="col-md-8" style="text-align: right;">
                                <!--Sub Total--> 
                            </div>   
                            <div class="col-md-2" style="text-align: left;">
                                <b>Total:</b>
                            </div>   
                            <div class="col-md-2" style="text-align: right;">
                                Rs. <?= number_format($grand_total,2)?>
                            </div>   
                         </div>
                         <br>
                         <br>
                         <br>
                         <div class="col-md-12" style="text-align: right;">
                                          <button type="submit" class="btn btn-danger my-cart-btn my-cart-b" >Update Cart</button>
                                            <button type="button" class="btn btn-danger my-cart-btn my-cart-b" onclick="clear_cart()" >Clear Cart</button>
                                            <a href="<?=site_url('Shop/checkout');?>" type="button" class="btn btn-danger my-cart-btn my-cart-b" >Checkout</a>
                                            <?php echo form_close(); ?>
                         </div>
                               
                 <?php }
                   else
                    { ?>
                         
                   <?php }
                    ?>
                 
                 
		 </div>
		 </div>
<!-- checkout -->
<script type="text/javascript">
        function clear_cart() {
            var result = confirm('Are you sure want to clear all Shopping?');
            if (result) {
                window.location = "<?php echo site_url('Shop/remove_cart'); ?>";
            } else {
                return false; // cancel button
            }
        }
</script>