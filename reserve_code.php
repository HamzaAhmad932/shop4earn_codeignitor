<div class="col-xs-6 col-sm-4 col-md-3">
        <div class="product">
          <div class="product_inside">
            <div class="image-box">
              <img class="" width="60px" height="60px" src="<?php echo base_url().$r->img_path; ?>" alt=""/>
            </div>
          <h2 class="title"><a href="<?php echo site_url("Home/Product_details");?>/<?php echo $r->id; ?>"><?php echo $r->product_name; ?></a></h2>
          <div class="price"><span><span class=money><?php echo $r->product_price; ?></span></span><span class="old-price hide"></span></div>
            <div class="description"><?php echo $r->product_des; ?></div>
            <span class="money">PV: <?php echo $r->basic_vol; ?> | BV:  <?php echo $r->booster_vol; ?> </span>
            <div class="product_inside_hover" style="position: relative !important;">
            <div class="product_inside_info">
              
            </div>
            <form action="<?php echo site_url('Home/Add_cart'); ?>" method="post" name="productform" onsubmit="return validateForm()">

                <input min="1" type="hidden" id="quantity" name="qty" value="1">
                                          
                                                    <!--<input type="text" class="item_quantity" name="qty" value="1" />-->
                <input type="hidden" name="product_code" value="<?php echo $r->product_code; ?>">
                <input type="hidden" name="product_name" value="<?php echo $r->product_name; ?>">
                <input type="hidden" name="product_price" value="<?php echo $r->product_price; ?>">
                <input type="hidden" name="product_cat" value="<?php echo $r->product_cat; ?>">
                <input type="hidden" name="basic_vol" value="<?php echo $r->basic_vol; ?>" />
                <input type="hidden" name="booster_comission" value="<?php echo $r->booster_vol; ?>" />
                <input type="hidden" name="product_des" value="<?php echo $r->product_des; ?>">
                 
                <!-- <button type="submit" class="add-cart item_add" name="action">ADD TO CART</button> -->
                                             
              <button type='submit'  class='btn btn-product_addtocart' name='action'><span class='icon icon-shopping_basket'></span> ADD TO CART</button>
            </form>
          </div>
            </div>
        </div>
    </div>