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
    

                        

                          
                                          
                                                     
     <div class="container">

                            <div class="row card">
                                
                                <div class="card-block">

                                  <div class="table-responsive">
<form method="post" action="<?php echo site_url('Admin/update_levels_settings'); ?>">
  <table class="table">
         <tr>
              <th  style="width: 150px;">Level Number</th>
              <th style="width: 67px;">Basic %</th>
              <th style="width: 67px;">Standard %</th>
              <th style="width: 67px;">Silver %</th>
              <th style="width: 67px;">Gold %</th>
              <th style="width: 67px;">Diamond %</th>
               <th style="width: 100px;"> Total % Per Level</th>
             
         </tr>
           <?php //foreach($comission as $r):                                  
                 for($x=0; $x < count($comission); $x++)
                                    {
                                    ?>                      
           <tr>
                                        <td><?=$comission[$x]['level_number'];?><input type="hidden" value="<?=$comission[$x]['level_number'];?>" name="level[]" style="width: 67px;"></td>
                                        <td><input type="text" value="<?=$comission[$x]['basic'];?>" name="basic[]" style="width: 67px;"></td>
                                        <td><input type="text" value="<?=$comission[$x]['standard'];?>" name="standard[]" style="width: 67px;"></td>
                                        <td><input type="text" value="<?=$comission[$x]['silver'];?>" name="silver[]" style="width: 67px;"></td>
                                        <td><input type="text" value="<?=$comission[$x]['gold'];?>" name="gold[]" style="width: 67px;"></td>
                                        <td><input type="text" value="<?=$comission[$x]['diamond'];?>" name="diamond[]" style="width: 67px;"></td>
                                        <td> </td>
                                    </tr>
                                    <?php } ?>
              </table>
</div>
 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-9 col-form-label"></label>
                                                <div class="col-sm-2">
                                                       <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Update
                                                        </button>
                                                </div>
                                            </div>
</form>

                            </div>

                            
                            </div>


                        </div><!-- container -->


                                      </form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div>
                

</div><!-- container -->