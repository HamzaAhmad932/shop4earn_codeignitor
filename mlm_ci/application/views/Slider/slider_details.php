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
     
 
                                             
 
                    <?php foreach($slider as $r): ?>                         
 
       <div class="form-group row">
            <div class="form_box">
            <h1>Preview Selected Image</h1>
            
                 
                <div class="preview_box">
                    <img id="preview_img" name="image" src="<?php echo base_url().$r->img_path; ?>" />
                </div>              
            
        </div>
                                              
                                            </div>
                                        <?php endforeach; ?>
 

 
 



                                          
                                                     
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div>
                

</div><!-- container -->