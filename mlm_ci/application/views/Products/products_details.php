<!-- stuck nav -->
  <div class="stuck-nav">
    <div class="container">
      <div class="pull-left">
        <div class="stuck-menu-parent-box"></div>
      </div>
      <div class="pull-right">
        <div class="stuck-cart-parent-box"></div>
      </div>
    </div>
  </div>
  <!-- /stuck nav -->
</header>			<!--header-->
	<div class="content">
		<?php foreach($products as $r): ?>
		<div class="single">
			<div class="container">
				<div class="single-grids">
					 
                    <div class="col-md-4 single-grid">	
                    <img class="" width="350px" height="200px" src="<?php echo base_url().$r->img_path; ?>" alt=""/>	
						<div class="flexslider">
							<ul class="slides">
							   							</ul>
						</div>
					</div>	
					<div class="col-md-4 single-grid simpleCart_shelfItem">		
                                            <h3 style="text-transform: capitalize;"><?php echo $r->product_name; ?></h3>
                                                <p><?php echo $r->product_des; ?></p>
                        <script>
      
      
        </script>
                                                   
                                                
	
                                                        
                                                
                                                	<div class="galry">
								<div class="prices">
									<h5 class="item_price"><?php echo $r->product_price; ?></h5>
								</div>
								
								<div class="clearfix"></div>
							</div>
								
							<div class="btn_form">
                                                            
     <form action="<?php echo site_url('Home/Add_cart'); ?>" method="post" name="productform" onsubmit="return validateForm()">
                                                       <p class="qty"> Qty :  </p>
                                                        <input min="1" type="number" id="quantity" name="qty" value="1" class="form-control input-small">
                                          
                                                    <!--<input type="text" class="item_quantity" name="qty" value="1" />-->
<input type="hidden" name="product_code" value="<?php echo $r->product_code; ?>">
<input type="hidden" name="product_name" value="<?php echo $r->product_name; ?>">
<input type="hidden" name="product_price" value="<?php echo $r->product_price; ?>">
<input type="hidden" name="product_cat" value="<?php echo $r->product_cat; ?>">
<input type="hidden" name="basic_vol" value="<?php echo $r->basic_vol; ?>" />
<input type="hidden" name="booster_comission" value="<?php echo $r->booster_vol; ?>" />
<input type="hidden" name="product_des" value="<?php echo $r->product_des; ?>">
 
                                                    <button type="submit" class="add-cart item_add" name="action">ADD TO CART</button>
                                                                    
                                                                                                               </form>
                                                            
                                                            
                                                            
								<!--<a href="#" class="add-cart item_add">ADD TO CART</a>-->	
                                                                <br>
							</div>
							<div class="tag">
                                                            <p>Category : <a style="text-transform: capitalize; cursor: pointer;"> 
                                                                                <?php echo $r->product_cat; ?>                                                                                 </a></p>
								<!--<p>Tag : <a href="#"> Lorem ipsum </a></p>-->
							</div>
					</div>
                                 
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
<!-- collapse -->
		<div class="collpse">
		<div class="container">
		<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingOne">
			  <h4 class="panel-title">
				<a style="color:#000;"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				  Description
				</a>
			  </h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			  <div class="panel-body">
				Cigarette Pant			  </div>
			</div>
		  </div>
		   
		</div>   	</div>
</div>
<!-- collapse -->
		<div class="related-products">
			<div class="container">
				<h3>Related Products</h3>
				<div class="product-model-sec single-product-grids">
                                     No Item Found!!					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
                        <div class="modal fade" id="header-modal" aria-hidden="true" ></div>
	<!--footer-->
		<footer data-nomargin>
  <div class="container-fluid">
  <div class="row">
    
  </div>
</div>