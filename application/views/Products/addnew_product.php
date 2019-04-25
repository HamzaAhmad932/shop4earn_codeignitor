<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $("#image").change(function(){
                readImageData(this);
            });
            $('.multiple-select').select2();
        });

        function readImageData(imgData){
            if (imgData.files && imgData.files[0]) {
                var readerObj = new FileReader();
                
                readerObj.onload = function (element) {
                    $('#preview_img').attr('src', element.target.result);
                }
                
                readerObj.readAsDataURL(imgData.files[0]);
            }
        }
        </script>
            <style>
            .form_box{width:500px; margin:0 auto; margin-top:10px; margin-bottom: 40px; text-align: left;}
            .fileinput{margin-left: 10px;}
            .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align: center;}
            .preview_box img{max-width: 100%; max-height: 500px;}
        </style>

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
     

    <form method="post" action="<?php echo site_url('Admin/addnew_product_validate'); ?>" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Product Code</label>
                                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="" name="product_code"  id="example-text-input" required>
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Product Name</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="" name="product_name" id="example-text-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Basic Volume</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="" name="basic_volume" id="example-text-input" required>
                                                </div>
                                            </div>
 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Booster Volume</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="" name="booster_volume" id="example-text-input" required>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Purchase Cost</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="" name="purchase_cost" id="example-text-input" required>
                                                </div>
                                            </div>

 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Product Description</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="" name="product_des" id="example-text-input" required>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Product Category</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="" name="product_cat" id="example-text-input" required>
                                                </div>
                                            </div>
 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Related Product</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="" name="related_products" id="example-text-input" required>
                                                </div>
                                            </div>
       <div class="form-group row">
            <div class="form_box">
            <h1>Preview Selected Image</h1>
            
                <label><b>Select Image : </b></label>
                <input type="file" id="image" name="image" class="fileinput"/>
                <div class="preview_box">
                    <img id="preview_img" name="image" src="" style="width: 50%;height: 50%;" />
                </div>              
            
        </div>
                                              
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Colors</label>
                <div class="col-sm-10">
                    <!-- <input class="form-control" type="text" value="" name="rate" id="example-text-input" required> -->
                    <select multiple class = "form-control select2 multiple-select" name="colors">
                        <?php foreach($colors as $color) :?>
                        <option><?php echo $color->name;?></option>
                    <?php endforeach;?>
                    </select>
                </div>
        </div>
        <div class="form-group row">
        <label for="example-text-input" class="col-sm-2 col-form-label">Size</label>
            <div class="col-sm-10">
                <!-- <input class="form-control" type="text" value="" name="rate" id="example-text-input" required> -->
                <select multiple class = "form-control select2 multiple-select" name="sizes">
                    <?php foreach($sizes as $size) :?>
                        <option><?php echo $size->name;?></option>
                    <?php endforeach;?>
                </select>
            </div>
    </div>
 <div class="form-group row">
        <label for="example-text-input" class="col-sm-2 col-form-label">Rate</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="" name="rate" id="example-text-input" required>
            </div>
    </div>

 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Quantity</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="" name="qty" id="example-text-input" required>
                                                </div>
                                            </div>
 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Discount</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="" name="discount" id="example-text-input" required>
                                                </div>
                                            </div>

 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Net Amount(after discount)</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="" name="net_amount" id="example-text-input" required>
                                                </div>
                                            </div>



                                          
                                                    <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">

                                                       <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                </div>
                                            </div>
                                     

                                      </form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div>
                

</div><!-- container -->