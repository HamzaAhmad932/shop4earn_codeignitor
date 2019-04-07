<div id="shopify-section-1495646706337" class="shopify-section index-section"><div class="container " data-sectionname="index_productsfeatured">
  <h1 class="block-title">LATEST PRODUCTS</h1>
  
    <div class="row product-listing products-mobile-arrow carousel-products-mobile">
    
<!--pRODUCT loop sTART==================================================================-->
    
  <?php foreach($products as $r): ?>
    <div class="col-xs-6 col-sm-4 col-md-3">
        <div class="product">
          <div class="product_inside">
            <div class="image-box">
              <img class="" width="60px" height="60px" src="<?php echo base_url().$r->img_path; ?>" alt=""/>
            </div>
          <h2 class="title"><a href="<?php echo site_url("Home/Product_details");?>/<?php echo $r->id; ?>"><?php echo $r->product_name; ?></a></h2>
          <div class="price"><span><span class=money><?php echo $r->product_price; ?></span></span><span class="old-price hide"></span></div>
            <div class="description"><?php echo $r->product_des; ?></div>
            <!-- <span class="money">PV: <?php echo $r->basic_vol; ?> | BV:  <?php echo $r->booster_vol; ?> </span> -->
            <div class="product_inside_hover">
            <div class="product_inside_info">
            </div>
               
              <form action='http://shop4earn.com/cart/add' method='post' name='productformcart' id='addcartform'>
              <input type='hidden' name='id'  value=2>
              <input type='hidden' name='name'  value=Cigarette Pant>
              <input type='hidden' name='price' value=1000>
              <input type='hidden' name='image' value=>
              <input min='1' type='number' id='quantity' name='qty' value='1' class='form-control input-small' style='width:60px;display:none;'>
                                             
              <button type='submit'  class='btn btn-product_addtocart' name='action'><span class='icon icon-shopping_basket'></span> ADD TO CART</button>
              </form>             </div>
            </div>
        </div>
    </div>
      
  <?php endforeach; ?>
     
    <!--pRODUCT loop eND==================================================================-->
    </div>
  
</div>

</div>