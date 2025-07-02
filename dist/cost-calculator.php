<?php 
include('header.php');
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
    /* Responsive and Modern Cost Calculator Styles */
    .estimation-container {
      display: flex;
      flex-wrap: wrap;
      gap: 24px;
      justify-content: center;
      margin-bottom: 32px;
    }
    .type-of-kitchen-container {
      background: #f8f9fa;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.04);
      padding: 18px 12px 12px 12px;
      margin-bottom: 0;
      min-width: 220px;
      flex: 1 1 220px;
      max-width: 320px;
      list-style: none;
    }
    .type-of-kitchen-container h4 {
      font-size: 1.1rem;
      font-weight: 700;
      margin-bottom: 12px;
      color: #021152;
    }
    .type-of-kitchen-container li {
      margin-bottom: 18px;
    }
    .type-of-kitchen-container img {
      display: block;
      margin: 8px auto 12px auto;
      max-width: 80px;
      border-radius: 8px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.07);
    }
    .type-of-kitchen-container label {
      font-weight: 500;
      color: #333;
    }
    .type-of-kitchen-container input[type="number"] {
      width: 100%;
      padding: 6px 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      margin-top: 4px;
      margin-bottom: 6px;
      font-size: 1rem;
    }
    .getestimate {
      width: 100%;
      padding: 14px 0;
      font-size: 1.2rem;
      font-weight: 700;
      border-radius: 8px;
      background: linear-gradient(90deg, #021152 60%, #4dc247 100%);
      color: #fff;
      border: none;
      box-shadow: 0 2px 8px rgba(33,33,66,0.08);
      margin-top: 12px;
      transition: background 0.2s, box-shadow 0.2s;
    }
    .getestimate:hover, .getestimate:focus {
      background: linear-gradient(90deg, #4dc247 60%, #021152 100%);
      box-shadow: 0 4px 16px rgba(33,33,66,0.12);
    }
    #calculate-area {
      background: #fff;
      border-radius: 14px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.07);
      padding: 24px 18px;
      margin: 24px auto 0 auto;
      max-width: 480px;
      text-align: center;
    }
    #calculate-area h3 {
      color: #021152;
      font-size: 1.3rem;
      font-weight: 700;
      margin-bottom: 10px;
    }
    #calculate-area h4 {
      font-size: 1.1rem;
      margin-bottom: 10px;
    }
    #calculate-area span, #calculate-area b {
      font-size: 1.2rem;
    }
    @media (max-width: 900px) {
      .estimation-container {
        flex-direction: column;
        gap: 0;
      }
      .type-of-kitchen-container {
        max-width: 100%;
        margin-bottom: 18px;
      }
    }
    @media (max-width: 600px) {
      .estimation-container {
        flex-direction: column;
        gap: 0;
        padding: 0 2vw;
      }
      .type-of-kitchen-container {
        padding: 10px 4px 8px 4px;
        min-width: 0;
        font-size: 0.98rem;
      }
      #calculate-area {
        padding: 14px 4px;
        max-width: 98vw;
      }
      .getestimate {
        font-size: 1rem;
        padding: 10px 0;
      }
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
                <div class="estimation-container">
                    <div class="row">
                        <!-- type of kitchen -->
                        <ul class="type-of-kitchen-container col-md-3">
                        <h4> Layout
                            Selection</h4>
                        <li>
                            <div class="radio">
                            <label><input type="radio" name="type_of_kitchen" value="L-shape">L shape kitchen</label>
                            <span>
                                <img src="./img/kitchen/shapes/l-shape.png" alt="L shape kitchen image" style="width: 40%;height: 40%;">
                                <div class="form-group col-md-12">
                                    <label for="usr">Length X (in Feet)*:</label>
                                    <label style="font-size:14px;"><b>(Left To right)*:</b></label>
                                    <input type="number" placeholder="X Value Enter" id="lshapex" class="form-control"style="background-color:#eeeeee;" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="pwd">Length Y (in Feet)*:</label>
                                    <label style="font-size:14px;"><b>(Up To Down)*:</b></label>
                                    <input type="number" placeholder="Y Value Enter" id="lshapey" class="form-control" style="background-color:#eeeeee;">
                                </div>
                            
                            </span>
                            </div>
                        </li>
                        <li>
                            <div class="radio">
                            <label><input type="radio" name="type_of_kitchen" value="stright">Straight Kitchen</label>
                            <span>
                                <img src="./img/kitchen/shapes/straight.png" alt="straight kitchen image" style="width: 40%;height: 40%;">
                                <div class="form-group">
                                <label for="usr">Length X (in Feet)*:</label>
                                <label style="font-size:14px;"><b>(Left To right)*:</b></label>
                                <input type="number" placeholder="X Value Enter" class="form-control" id="sshapex" style="background-color:#eeeeee;">
                                </div>
                            </span>
                            </div>
                        </li>
                        <li>
                            <div class="radio">
                            <label><input type="radio" name="type_of_kitchen" value="U-Shape">U shape kitchen</label>
                            <span>
                                <img src="./img/kitchen/shapes/u-shape.png" alt="U shape kitchen image" style="width: 40%;height: 40%;">
                                <div class="form-group">
                                <label for="usr">Length X (in Feet)*:</label>
                                <label style="font-size:14px;"><b>(Left To right)*:</b></label>
                                <input type="number" placeholder="X Value Enter" class="form-control" id="ushapex" style="background-color:#eeeeee;">
                                </div>
                                <div class="form-group">
                                <label for="pwd">Length Y (in Feet)*:</label>
                                <label style="font-size:14px;"><b>(Up To Down)*:</b></label>
                                <input type="number" placeholder="Y Value Enter" class="form-control" id="ushapey" style="background-color:#eeeeee;">
                                </div>
                                <div class="form-group">
                                <label for="usr">Length Z (in Feet)*:</label>
                                <label style="font-size:14px;"><b>(Front & Back)*:</b></label>
                                <input type="number" placeholder="Z Value Enter" class="form-control" id="ushapez" style="background-color:#eeeeee;">
                                </div>
                            </span>
                            </div>
                        </li>
                        <li>
                            <div class="radio">
                            <label><input type="radio" name="type_of_kitchen" value="Custom">Customized kitchen</label>
                            <span>
                                <img src="./img/kitchen/shapes/custom.jpg" alt="customized kitchen image" style="width: 40%;height: 40%;">
                                <div class="form-group">
                                <label for="usr">X+Y+Z Length (in Feet)*:</label>
                                
                                <label style="font-size:14px;"><b>Total Length (in Feet)*:</b></label>
                                <input type="number" placeholder="Total Value Enter" class="form-control" id="customxyz" style="background-color:#eeeeee;">
                                </div>
                            </span>
                            </div>
                        </li>
                        </ul>
                <!-- quality_of_accessories -->
                        <ul class="type-of-kitchen-container col-md-3">
                        <h4>
                            Design 
                            selection</h4>
                        <li>
                            <div class="radio">
                            <label><input type="radio" name="quality_of_accessories" value="simple">Low</label>
                            <span>
                                <img src="./assets/imag/low.jpg" style="width: 40%;height: 40%;" alt="Simple kitchen image">
                            </span>
                            </div>
                        </li>
                        <li>
                            <div class="radio">
                            <label><input type="radio" name="quality_of_accessories" value="medium">Medium</label>
                            <span>
                                <img src="./assets/imag/medium.jpg" style="width: 40%;height: 40%;" alt="Medium kitchen image">
                            </span>
                            </div>
                        </li>
                        <li>
                            <div class="radio">
                            <label><input type="radio" name="quality_of_accessories" value="high">High</label>
                            <span>
                                <img src="./assets/imag/high.jpg" style="width: 40%;height: 40%;" alt="High kitchen image">
                            </span>
                            </div>
                        </li>
                        </ul>
                <!-- type_of_package -->
                        <ul class="type-of-kitchen-container col-md-3">
                        <h4>Package
                            Select</h4>
                        <li>
                            <div class="radio">
                            <label><input type="radio" name="type_of_package" value="Essential">Essential (₹)</label>
                            <span>
                                <img src="./assets/imag/esstential.jpg" style="width: 40%;height: 40%;" alt="type of material image">
                                <p>A selection of essential units and accessories for a functional modular kitchen.</p>
                                <ul>
                                    <li><b style="color: #021152;"><i class="fa fa-angle-double-right"></i> Cost-effective pricing</li></b>
                                    <li><b style="color: #021152;"><i class="fa fa-angle-double-right"></i> User-friendly designs</li></b>
                                    <li><b style="color: #021152;"><i class="fa fa-angle-double-right"></i> Essential accessories</li></b>
                                </ul>
                            </span>
                            </div>
                        </li>
                        
                        <li>
                            <div class="radio">
                            <label><input type="radio" name="type_of_package" value="Premium">Premium (₹₹)</label>
                            <span>
                                <img src="./assets/imag/premium.jpg" style="width: 40%;height: 40%;" alt="type of material image">
                                <p>A curated set of elegant fixtures, hardware, cabinets, and fittings to enhance your kitchen's style.</p>
                                <ul>
                                    <li><b style="color: #021152;"><i class="fa fa-angle-double-right"></i> Moderate pricing</li></b>
                                    <li><b style="color: #021152;"><i class="fa fa-angle-double-right"></i> High-end designs</li></b>
                                   <li> <b style="color: #021152;"><i class="fa fa-angle-double-right"></i> Extensive range of accessories</li></b>
                                </ul>
                            </span>
                            </div>
                        </li>
                        <li>
                            <div class="radio">
                                <label><input type="radio" name="type_of_package" value="Elite">Elite (₹₹₹)</label>
                                <span>
                                    <img src="./assets/imag/elite.jpg" style="width: 40%;height: 40%;" alt="type of material image">
                                    <p>A contemporary kitchen package that seamlessly integrates stylish design with high performance, complete with elegant units and accessories.</p>
                                    <ul>
                                        <li><b style="color: #021152;"><i class="fa fa-angle-double-right"></i> Premium pricing</li></b>
                                        <li><b style="color: #021152;"><i class="fa fa-angle-double-right"></i> Luxurious designs</li></b>
                                    <li> <b style="color: #021152;"><i class="fa fa-angle-double-right"></i> Broad selection of accessories</li></b>
                                    </ul>
                            
                                </span>
                            </div>
                        </li>
                       
                        </ul>
                <!-- type_of_material -->
                        <ul class="type-of-kitchen-container col-md-3">
                            <h4>Finish
                                Selection</h4>
                            <li>
                                <div class="radio">
                                <label><input type="radio" name="type_of_material" value="Pre">Laminate</label>
                                <span>
                                    <img src="./assets/imag/laminate.jpg" alt="type of material image" style="width: 40%;height: 40%;">
                                    <p>Laminate finishes are resistant to scratches, stains, and moisture, making them a practical choice to withstand everyday wear and tear.</p>
                                </span>
                                </div>
                            </li>
                            <li>
                                <div class="radio">
                                <label><input type="radio" name="type_of_material" value="MDF/HDF">Acrylic</label>
                                <span>
                                    <img src="./assets/imag/acrylic.jpg" alt="type of material image" style="width: 40%;height: 40%;">
                                    <p>Acrylic finish resembles glass in look but is stronger in material. It has a high glossy surface which gives a reflective effect giving a premium look to your kitchen.</p>
                                </span>
                                </div>
                            </li>
                            <li>
                                <div class="radio">
                                <label><input type="radio" name="type_of_material" value="Hardwood"> PU Painted</label>
                                <span>
                                    <img src="./assets/imag/pu-painted.jpg" alt="type of material image" style="width: 40%;height: 40%;">
                                    <p>PU paint finish provides a hard, protective coating that resists scratches, abrasions, and impacts. PU finishes can be applied in various gloss levels, from matte to high gloss.</p>
                                </span>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="radio">
                                <label><input type="radio" name="type_of_material" value="Commercial">Commercial Ply A grade</label>
                                <span>
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/interior-estimate/material-type/commercial-ply.jpg" alt="type of material image">
                                    <p>This is a slightly better variation compared to Hardwood/MDF/HDF with medium maintenance and higher durability.</p>
                                </span>
                                </div>
                            </li>
                            <li>
                                <div class="radio">
                                <label><input type="radio" name="type_of_material" value="Boiling">Boiling water resistant</label>
                                <span>
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/interior-estimate/material-type/bores-water-resistant.jpg" alt="type of material image">
                                    <p>If low maintenance is a key factor, then this is a starting range of wood that you could consider. This is borer/termite free wood.</p>
                                </span>
                                </div>
                            </li>
                            <li>
                                <div class="radio">
                                <label><input type="radio" name="type_of_material" value="Boiling-w">Boiling water proof</label>
                                <span>
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/interior-estimate/material-type/bores-water-proof.jpg" alt="type of material image">
                                    <p>As the name suggests this is boiling water proof, hence lower maintenance. High durability is the key feature. This is also borer/termite proof.</p>
                                </span>
                                </div>
                            </li>
                            <li>
                                <div class="radio">
                                <label><input type="radio" name="type_of_material" value="Marine">Marine ply</label>
                                <span>
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/cdn.getspini.com/interior-estimate/material-type/marine-ply.jpg" alt="type of material image">
                                    <p>As the name suggests this Grade of wood is used in boat construction. This kind of wood warrants the least maintenance possible and is highly durable</p>
                                </span>
                                </div>
                            </li> -->
                        </ul>
                    </div>  
                    <div class="row">
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
                    <div class="row">
                        <div class="d-grid gap-2 col-8 mx-auto">
                            <button type="button" class="btn btn-lg getestimate"  style="color: #fff; background-color: #021152;">Get Estimation</button>
                          </div>
                        
                    </div>
                

                    <!-- Button trigger modal -->


                            <!-- Modal -->
                            <div id="myModal" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" id="estimateForma">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="pbmit-footer-logo">
                                            <img src="assets/img/logo/ihomemasters.webp" style="height:50px" alt="">
                                        </div>
                                    <button type="button"  class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                    <form class="contact-form" onsubmit="submitForm(event)" method="POST">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" style="background-color: #e2e2e2de;" class="form-control" id="estimate_namea" name="estimate_name" placeholder="Enter Your Name" required>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="number" style="background-color: #e2e2e2de;" class="form-control" id="estimate_ph_numbera" name="estimate_ph_number" placeholder="Enter Your Phone Number" required>
                                                </div>
                                                <div class="alerts_page"></div>
                                                <div class="col-md-12">
                                                    <input type="email" style="background-color: #e2e2e2de;" class="form-control" id="estimate_emaila" name="estimate_email" placeholder="Enter Your Email" required>
                                                </div>
                                            
                                                <div class="col-md-12">
                                                <button  id="submit_innerpage" type="submit" class="pbmit-btn pbmit-btn-outline submit_estimation">
                                                        <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                                        <span class="pbmit-button-content-wrapper">
                                                        <span class="pbmit-button-text">Submit Now</span>
                                                        </span>
                                                    </button>
                                            </div>
                                        
                                        </div>
                                    </form>
                                    </div>
                                
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
    include('footer.php');
    ?>

<script>
// --- Cost Calculator Functionality ---
function getSelectedRadio(name) {
    const radios = document.getElementsByName(name);
    for (let i = 0; i < radios.length; i++) {
        if (radios[i].checked) return radios[i].value;
    }
    return null;
}

function showEstimate() {
    // Get kitchen type and measurements
    let type_of_kitchen = getSelectedRadio('type_of_kitchen');
    let type_of_kitchenvalue = 0;
    if (type_of_kitchen === 'L-shape') {
        let x = parseInt(document.getElementById('lshapex').value);
        let y = parseInt(document.getElementById('lshapey').value);
        if (isNaN(x) || isNaN(y)) return showError('Please enter both X and Y for L-shape.');
        type_of_kitchenvalue = x + y;
    } else if (type_of_kitchen === 'stright') {
        let x = parseInt(document.getElementById('sshapex').value);
        if (isNaN(x)) return showError('Please enter X for Straight kitchen.');
        type_of_kitchenvalue = x;
    } else if (type_of_kitchen === 'U-Shape') {
        let x = parseInt(document.getElementById('ushapex').value);
        let y = parseInt(document.getElementById('ushapey').value);
        let z = parseInt(document.getElementById('ushapez').value);
        if (isNaN(x) || isNaN(y) || isNaN(z)) return showError('Please enter X, Y, Z for U-shape.');
        type_of_kitchenvalue = x + y + z;
    } else if (type_of_kitchen === 'Custom') {
        let xyz = parseInt(document.getElementById('customxyz').value);
        if (isNaN(xyz)) return showError('Please enter total length for Custom kitchen.');
        type_of_kitchenvalue = xyz;
    } else {
        return showError('Please select a kitchen layout.');
    }

    // Get material
    let type_of_material = getSelectedRadio('type_of_material');
    let type_of_materialvalue = 0;
    if (type_of_material === 'Pre') type_of_materialvalue = 6000;
    else if (type_of_material === 'MDF/HDF') type_of_materialvalue = 8000;
    else if (type_of_material === 'Hardwood') type_of_materialvalue = 8000;
    else if (type_of_material === 'Commercial') type_of_materialvalue = 9000;
    else if (type_of_material === 'Boiling') type_of_materialvalue = 10000;
    else if (type_of_material === 'Boiling-w') type_of_materialvalue = 12500;
    else if (type_of_material === 'Marine') type_of_materialvalue = 16000;
    else return showError('Please select a material finish.');

    // Get accessories
    let quality_of_accessories = getSelectedRadio('quality_of_accessories');
    let quality_of_accessoriesvalue = 0;
    if (quality_of_accessories === 'simple') quality_of_accessoriesvalue = 15000;
    else if (quality_of_accessories === 'medium') quality_of_accessoriesvalue = 30000;
    else if (quality_of_accessories === 'high') quality_of_accessoriesvalue = 60000;
    else return showError('Please select a design quality.');

    // Calculate
    let estimatedcost = type_of_kitchenvalue * type_of_materialvalue + quality_of_accessoriesvalue;
    let rangecost = Math.round((estimatedcost * 0.3) + estimatedcost);

    // Format with commas
    function addCommas(nStr) {
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }

    document.getElementById('estimatedcost').innerHTML = addCommas(estimatedcost);
    document.getElementById('rangecost').innerHTML = addCommas(rangecost);
    document.getElementById('uname').innerHTML = 'Customer';
    hideError();
    // Optionally scroll to result
    document.getElementById('calculate-area').scrollIntoView({behavior: 'smooth'});
}

function showError(msg) {
    let err = document.getElementById('calc-error-msg');
    if (!err) {
        err = document.createElement('div');
        err.id = 'calc-error-msg';
        err.style.color = 'red';
        err.style.fontWeight = 'bold';
        err.style.margin = '10px 0';
        let btn = document.querySelector('.getestimate');
        btn.parentNode.insertBefore(err, btn);
    }
    err.innerText = msg;
}
function hideError() {
    let err = document.getElementById('calc-error-msg');
    if (err) err.innerText = '';
}
// Attach to button
window.addEventListener('DOMContentLoaded', function() {
    let btn = document.querySelector('.getestimate');
    if (btn) btn.onclick = showEstimate;
});
</script>