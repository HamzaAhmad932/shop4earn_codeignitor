<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $("#image").change(function(){
                readImageData(this);
            });
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
     

    <form method="post" action="<?php echo site_url('Slider/Update_edit_slider'); ?>" enctype="multipart/form-data">
                                             
 
                      <?php foreach($slider as $r): ?>                       
 <input type="hidden" name="hidden" value="<?php echo $r->id; ?>">
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
 <?php endforeach; ?>

 
 



                                          
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