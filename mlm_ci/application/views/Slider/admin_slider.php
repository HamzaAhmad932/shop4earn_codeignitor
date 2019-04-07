<div class="content-page">
                <!-- Start content -->
                <div class="content">
<div class="page-content-wrapper">

                        <div class="container">
<a href="<?php echo site_url('Slider/Addnew_image'); ?>" class="btn btn-primary">Add New Slider</a>
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
              <th>Image Name</th>
              <th>Image</th>
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
 
                <td><?php echo $r->img_name; ?></td>
                <td><img src="<?php echo base_url().$r->img_path; ?>" width="50" height="50"></td>
                <td><?php echo $r->c_date; ?></td>
                
                
               
                <td>
                   <a class="btn btn-warning btn-sm" href="<?php echo site_url("Slider/Slider_detail");?>/<?php echo $r->id; ?>">View</a>
                   <a class="btn btn-primary btn-sm" href="<?php echo site_url("Slider/Slider_edit");?>/<?php echo $r->id; ?>">Edit</a>
                   <a class="btn btn-danger btn-sm" href="<?php echo site_url("Slider/Slider_delete");?>/<?php echo $r->id; ?>">Delete</a>
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
