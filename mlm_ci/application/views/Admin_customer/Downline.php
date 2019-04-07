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

                                  <div class="table-responsive">
  <table class="table">
         <tr>
              <th>SR</th>
              <th>Full Name</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Password</th>
 
             
         </tr>
          <?php $serial=0;
          if($row > 0){
            foreach($row as $r):                                     
                                    $serial++;
                                        ?>
            <tr>
                <td><?php echo $serial; ?></td>
                <td><?php echo $r->full_name; ?></td>
                <td><?php echo $r->mobile; ?></td>
                <td><?php echo $r->email; ?></td>
                <td><?php echo $r->password; ?></td>
      
               
               
 
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


                            </div>

                            
                            </div>


                        </div><!-- container -->
