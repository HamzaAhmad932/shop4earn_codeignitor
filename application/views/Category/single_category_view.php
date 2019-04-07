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
     

 <?php foreach($category as $r):?>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Product Code</label>
                                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $r->cat_name; ?>" name="cat_name"  id="example-text-input" readonly="">
                                                </div>
                                            </div>

                                              


                                          
                                                    
                                     

                                    <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div>
                

</div><!-- container -->