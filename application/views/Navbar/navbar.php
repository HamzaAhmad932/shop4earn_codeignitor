   <style>
    .active1
    {
        border: 2px solid #0000ff;
    }
    .modal-header {
    border-bottom: 0px solid #e5e5e5;
    min-height: 16.4286px;
    padding: 15px;
}
    </style>
  <div class="top-line" style="background-color:#F5F5F7;">
    <div class="container">
      <div class="pull-left">
        <div class="menu-parent-box">
          <!-- header-menu -->
<nav class="header-menu">
  <ul>
    
    <li>
      <a href="<?php echo site_url('Home'); ?>" class="active">HOME</a>
    </li>
    <li class="" >
      <a href="<?php echo site_url('Home/about'); ?>">ABOUT</a>
    </li>
    <li class="" >
      <a href="http://shop4earn.com/Products">PRODUCTS</a>
    </li>
     
    <li class="dropdown multicolumn" >
      <a href="#">CATEGORIES</a>      
        <div class="dropdown-menu one-col">
        <ul>
            <li>
                <a href="http://shop4earn.com/ProductList/1">men</a>
            </li>
            <li>
                <a href="http://shop4earn.com/ProductList/3">almon</a>
            </li>
        </ul>
    </div>
  </li>
    
  <li>
      <a href="http://shop4earn.com/contact">CONTACT</a>
      
      
    </li> 
  </ul>
</nav>
<!-- /header-menu -->
        </div>
      </div>
      <div class="pull-right">
        <!-- search -->
<div class="search">
  <a href="#" class="search-open"><span class="icon icon-search"></span></a>
  <div class="search-dropdown">
    <form>
      <div class="input-outer">
        <input type="hidden" name="type" value="product" />
        <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search" >
        <button type="submit" class="btn-search"><span>Search</span></button>
      </div>
      <a href="#" class="search-close"><span class="icon icon-close"></span></a>
    </form>
  </div>
</div>
<!-- search-scripts -->
          <script src="http://shop4earn.com/js/classie.js"></script>
          <script src="http://shop4earn.com/js/uisearch.js"></script>
            <script>
              new UISearch( document.getElementById( 'sb-search' ) );
            </script>
          <!-- //search-scripts -->
<!-- /search -->
      </div>
    </div>
  </div>
</div>
<!-- /desktop-header -->