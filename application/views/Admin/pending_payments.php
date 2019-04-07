<script type="text/javascript">
 
   function clickAndDisable(link) {
     // disable subsequent clicks
     link.onclick = function(event) {
        event.preventDefault();
     }
   }   
 
</script>
<div class="content-page">
                <!-- Start content -->
                <div class="content">
<div class="page-content-wrapper">

                        <div class="container">

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
              <th>Full Name</th>
              <th>Amount</th>
              <th>Method</th>
              <th>Account</th>
              <th>Date Time</th>
               <th>Status</th>
             
             
         </tr>
 <?php $serial=0;
          if($row > 0){
            foreach($row as $r):                                     
                                    $serial++;
                                        ?>
            <tr>
                <td><?php echo $serial; ?></td>
                <td><?php echo $r->full_name; ?></td>
                <td><?php echo $r->withdraw_amount; ?></td>
                <td><?php echo $r->account_type; ?></td>
                <td><?php echo $r->selected_bank; ?></td>
                <td><?php echo $r->date_time; ?></td>
                <td>
                  <?php 
                  $status=$r->status;
                  if($status=='0'){ ?>
                  <a class="btn btn-danger btn-sm" href="<?php echo site_url("Admin/admin_approved_payments");?>/<?php echo $r->id; ?>" onclick="clickAndDisable(this);">Approve</a></td>
                <?php  }else{ ?>
                  <a class="btn btn-success btn-sm disabled" style="color: white;">Approve</a></td>
                <?php }  ?>
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
