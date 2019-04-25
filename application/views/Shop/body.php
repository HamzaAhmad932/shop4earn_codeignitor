<div id="shopify-section-1495646706337" class="shopify-section index-section"><div class="container " data-sectionname="index_productsfeatured">
  <h1 class="block-title">LATEST PRODUCTS</h1>
  
    <div class="row product-listing products-mobile-arrow carousel-products-mobile">
    
<!--pRODUCT loop sTART==================================================================-->
    
    <div class="container page-wrapper">
      <div class="page-inner">
        <div class="row">
          <?php foreach($products as $r): ?>
          <div class="el-wrapper" style="margin-left: 20px;">
            <div class="box-up">
              <img class="img" src="<?php echo base_url().$r->img_path; ?>" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name"><a href="<?php echo site_url("Home/Product_details");?>/<?php echo $r->id; ?>"><?php echo $r->product_name; ?></a></span>
                  <span class="p-company"><?php echo $r->product_des; ?></span>
                </div>
                <div class="a-size">Available sizes : <span class="size">S , M , L , XL</span></div>
              </div>
            </div>

            <div class="box-down">
              <div class="h-bg">
                <div class="h-bg-inner"></div>
              </div>

              <form id="my_form" action="<?php echo site_url('Home/Add_cart'); ?>" method="post" name="productform" onsubmit="return validateForm()">

                    <input min="1" type="hidden" id="quantity" name="qty" value="1">
                    <input type="hidden" name="product_code" value="<?php echo $r->product_code; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $r->product_name; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $r->product_price; ?>">
                    <input type="hidden" name="product_cat" value="<?php echo $r->product_cat; ?>">
                    <input type="hidden" name="basic_vol" value="<?php echo $r->basic_vol; ?>" />
                    <input type="hidden" name="booster_comission" value="<?php echo $r->booster_vol; ?>" />
                    <input type="hidden" name="product_des" value="<?php echo $r->product_des; ?>">
                    
                  <a class="cart" href="javascript:{}" onclick="document.getElementById('my_form').submit();">
                    <span class="price"><?php echo $r->product_price; ?></span>
                    <span class="add-to-cart">
                      <span class="txt">Add in cart</span>
                    </span>
                  </a>
              </form>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
      
     
    <!--pRODUCT loop eND==================================================================-->
    </div>
  
</div>

</div>