<!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
<div class="page-content-wrapper">
  
  <div class="container">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">
    

                        

                       
    <form method="post" action="<?php echo site_url('Admin/update_default_id'); ?>">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Default ID</label>
                                                
                                                <div class="col-sm-4">
                                    <input class="form-control" type="number" value="<?php print_r($default_parent_id); ?>" name="default_parent_id"  id="example-text-input" required>
                                                </div>
                                           
                                            </div>                         
                                          
                                                    <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                       <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Update
                                                        </button>
                                                </div>
                                            </div>
                                          </form>
     <div class="container">

                            <div class="row card">
                                
                                <div class="card-block">

                                  <div class="table-responsive">
<form method="post" action="<?php echo site_url('Admin/update_criteria_settings'); ?>">
  <table class="table">
         <tr>
              <th>Level Number</th>
              <th>Refferals For Level</th>
              <th>Package</th>
             
         </tr>
        <?php 
                                    for($x=0; $x < count($levels); $x++)
                                    {
                                    ?> 
                                   <tr>
                                        <td><?=$levels[$x]['level_number'];?><input type="hidden" value="<?=$levels[$x]['level_number'];?>" name="level_number[]"></td>
                                        <td><input type="text" value="<?=$levels[$x]['refer_for_level'];?>" name="refer_for_level[]"></td>
                                        <td><input type="text" value="<?=$levels[$x]['package'];?>" name="package[]"></td>
                                    </tr>
                                    <?php } ?>
              </table>
</div>
 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-9 col-form-label"></label>
                                                <div class="col-sm-2">
                                                       <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">
                                                            Update
                                                        </button>
                                                </div>
                                            </div>
</form>

                            </div>

                            
                            </div>


                        </div><!-- container -->


                                   
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div>
                

</div><!-- container -->