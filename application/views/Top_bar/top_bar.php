 <div class="top-line" >
    <div class="container">
    <div class="pull-left">
        <!-- logo -->
        <div class="logo" itemscope itemtype="http://schema.org/Organization">
          <a href="http://shop4earn.com/" itemprop="url">
            <img src="http://shop4earn.com/images/logo.png" alt="logo" itemprop="logo"/>
            
          </a>
        </div>
        <!-- /logo -->
    </div>
    <div class="pull-right">
      <div class="account dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">
          <span class="icon icon-person "></span>
          <span class="dropdown-label hidden-sm hidden-xs">My Account</span>
        </a>
        <ul class="dropdown-menu">
            <?php if(isset($this->session->userdata['logged_in'])){?>
                <li>
                    <a href="<?php echo site_url('Users'); ?>">
                        <span class="icon icon-person"></span>
                        Account
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Home/Login'); ?>">
                        <span class="icon icon-check"></span>
                        Checkout
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Home/logout'); ?>">
                        <span class="icon icon-lock_outline"></span>
                        Log Out
                    </a>
                </li>

        <?php }else{?>
                <li>
                    <a href="<?php echo site_url('Home/Login'); ?>">
                        <span class="icon icon-lock_outline"></span>
                        Sign In
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Home/Register'); ?>">
                        <span class="icon icon-person_add"></span>
                        Register
                    </a>
                </li>
        <?php }?>
        </ul>
    </div>
        <!-- cart -->
    <div class="main-parent-cart">
        <div class="cart">
      <div class="dropdown">
        <a class="dropdown-toggle">
            <span class="icon icon-shopping_basket"></span>
               <span class="badge badge-cart empty">0   
                                                    <!--<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)-->
              </span>
               <!--div class="dropdown-label hidden-sm hidden-xs">YOUR BAG</div-->
        </a>
        <div class="dropdown-menu slide-from-top">
            <div class="container">
                <div class="top-title">RECENTLY ADDED ITEM(S)</div>
                <a href="#" class="icon icon-close cart-close"></a>
                <ul></ul>
                <!--h4 class="text-center empty-cart-js">Your Cart is Empty</h4-->
                <div class="cart-bottom">
                    <div class="pull-right">
                      <div class="pull-left">
                        <div class="cart-total">TOTAL: <span> <span class=money>0   </span></span></div>
                      </div>
                      <a href="http://shop4earn.com/checkout" class="btn icon-btn-left"><span class="icon icon-check_circle"></span>CHECKOUT</a>
                  </div>
                <div class="pull-left">
                     <a href="http://shop4earn.com/cart" class="btn icon-btn-left"><span class="icon icon-shopping_basket"></span> VIEW CART</a>
                </div>
                </div>
                <ul class='item-html-js hide'>
                <li class="item">
                  <div class="img">
                    <a href="#">img</a>
                  </div>
                <div class="info">
                    <div class="title-col">
                      <h2 class="title">
                        <a href="#">title</a>
                      </h2>
                    <div class="details">
                      details
                    </div>
                  </div>
                  <div class="price">price</div>
                  <div class="qty">
                    <div class="qty-label">Qty:</div>
                    <div class="style-2 input-counter text-center">
                      <input type="text" value="1" disabled/>
                    </div>
                  </div>
                </div>
                <div class="item-control">
                  <div class="delete"><a href="cart/changee74d.html?id=0&amp;quantity=0" class="icon icon-delete header_delete_cartitem_js" title="Delete"></a></div>
                  <div class="edit"><a href="#" class="icon icon-edit" title="Edit"></a></div>
                </div>
              </li>
            </ul>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /cart -->
      </div>
    </div>
  </div>