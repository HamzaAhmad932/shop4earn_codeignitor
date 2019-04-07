<div class="content-page">
                <!-- Start content -->
                <div class="content">
<div class="page-content-wrapper">

                        <div class="container">
<a href="<?php echo site_url('Admin/addnew_product'); ?>" class="btn btn-primary">Add New Product</a>
                            <div class="row card">
                                
                                <div class="card-block">


<div class="container pull-right">
  <div class="row">
        <div class="span12">
            <form id="custom-search-form" class="form-search form-horizontal pull-right">
                <div class="input-append span12">
                    <input type="text" class="search-query" placeholder="Search">
                    <button type="submit" class="btn"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
  </div>
</div>

                                  <div class="table-responsive">
  <table class="table">
         <tr>
              <th>SR</th>
              <th>Product Image</th>
              <th>Name</th>
              <th>Category</th>
              <th>Description</th>
              <th>Price</th>
               <th>Created</th>
               <th>Modified</th>
               <th>Status</th>
               <th>Action</th>
             
             
         </tr>
 <?php $serial=0;
          if($row > 0){
            foreach($row as $r):                                     
                                    $serial++;
                                        ?>
            <tr>
                <td><?php echo $serial; ?></td>
                <td> <img class="" width="60px" height="60px" src="<?php echo base_url().$r->img_path; ?>" alt=""/></td>
                <td><?php echo $r->product_name; ?></td>
                <td><?php echo $r->product_cat; ?></td>
                <td><?php echo $r->product_des; ?></td>
                <td><?php echo $r->product_price; ?></td>
                <td><?php echo $r->c_date; ?></td>
                <td><?php echo $r->m_date; ?></td>
                <td><?php $status= $r->status;
                 
                  if($status=='0'){ ?>
                  <a class="btn btn-warning btn-sm" href="<?php echo site_url("Admin/approve_products");?>/<?php echo $r->id; ?>" onclick="clickAndDisable(this);">Approve</a></td>
                <?php  }
                  else{ ?>
                 
                  <a class="btn btn-success btn-sm disabled" style="color: white;">Approve</a>
                 <?php } ?>
                </td>
               
                <td>
                   <a class="btn btn-warning btn-sm" href="<?php echo site_url("Admin/products_view");?>/<?php echo $r->id; ?>">View</a>
                   <a class="btn btn-primary btn-sm" href="<?php echo site_url("Admin/products_edit");?>/<?php echo $r->id; ?>">Edit</a>
                   <a class="btn btn-danger btn-sm" href="<?php echo site_url("Admin/products_delete");?>/<?php echo $r->id; ?>">Delete</a>
                </td>
               
 
            </tr>
                  <?php endforeach;
                }else { ?>
                <tr>
                  <td></td>
                  <td></td>
                <td>No Record Found</td>
                <td></td>
                <td></td>
              </tr>

                <?php } ?>       
               
  
                  
  </table>
</div>
<div class="text-center">
                                </div>

                            </div>

                            
                            </div>


                        </div><!-- container -->



                                                </div>
