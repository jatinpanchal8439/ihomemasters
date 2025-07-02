<?php 
include('../cacl/header.php')
?>
        
   <!-- css files ends -->
   <script type="text/javascript">
     var index_page = false;
     var categoryName = "Interior/Renovation/Modular Kitchen";
   </script> 
        

    
<style>
    .pbmit-title-bar-wrapperswt{
        position: relative;
        z-index: 1;
        background-color: #0e1e68;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        background-attachment: scroll;
    }
    </style>
   
           
    
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapperswt">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title"> Kitchen Cost Calculate</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span>
                                    <a title="" href="index.php" class="home"><span style="color: white;">Home</span></a>
                                </span>
                                <span class="sep">
                                    <i class="pbmit-base-icon-angle-right" style="color: white;"></i>
                                </span>
                                <span><span class="post-root post post-post current-item" style="color: white;">Calculate Area</span></span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
        <!-- Title Bar End-->
 
         




<!-- Contact Form -->
<section class="pbmit-sticky-section">
    <div class="container">
        <div class="contact-us-bg">
            <div class="row mt-5">              
                
                    
                <div class="col-md-12 col-xl-12 my-5">
                    <div class="contact-form-area">
                        <div id="calculate-area">
                            <h3>
                                Summary
                                & Quote</h3>
                            <h4>Hi <span id="uname"></span> Your Estimated Cost is Between:</h4>
                            <span style="font-weight: 900;font-size: 24px;">Rs.</span><span style="font-weight: 900;font-size: 24px;" id="estimatedcost"></span><b style="font-weight: 900;font-size: 24px;"> to</b> <span id="rangecost" style="font-weight: 900;font-size: 24px;"></span>
                            <h6>*Does not include cost of hood,hob and other appliances</h6>
                    
                        </div>
                    </div>
                </div>
                 
                                      
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form -->
 
   

    <script src="assets/script.js"></script>
    <script src="assets/v1.30.59/script.js"></script>
 
 
    <?php 
    include('../cacl/footer.php')
    ?>