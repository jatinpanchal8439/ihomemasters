
    <script>
        let step = 1;
        
        function nextStep() {
            if (step === 1) {
                document.getElementById("step1").style.display = "none";
                document.getElementById("step2").style.display = "block";
                step++;
            } else if (step === 2) {
                let username = document.getElementById("username").value;
                let email = document.getElementById("email").value;
                
                if (!username || !email) {
                    alert("Please enter your name and email.");
                    return;
                }
                
                document.getElementById("step2").style.display = "none";
                document.getElementById("step3").style.display = "block";
                step++;
            }
        }

        function calculate() {
            let category = document.getElementById("category").value;
            let measurementType = document.getElementById("measurementType").value;
            let value = parseFloat(document.getElementById("measurementValue").value);
            let pageLink = window.location.href;
            let pageName = document.title;
            let username = document.getElementById("username").value;
            let email = document.getElementById("email").value;
            
            if (!category) {
                alert("Please select a category.");
                return;
            }

            if (isNaN(value) || value <= 0) {
                alert("Please enter a valid measurement value.");
                return;
            }

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "calculate.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("result").innerHTML = xhr.responseText;
                    setTimeout(() => { window.location.href = "index.php"; }, 8000);
                }
            };
            xhr.send("category=" + category + "&measurementType=" + measurementType + "&measurementValue=" + value + "&pageLink=" + encodeURIComponent(pageLink) + "&pageName=" + encodeURIComponent(pageName) + "&username=" + encodeURIComponent(username) + "&email=" + encodeURIComponent(email));
        }
    </script>



	<!-- Contact Form -->
    <section class="pbmit-sticky-section">
				<div class="container">
					<div class="contact-us-bg">
						<div class="row">
							
							
							<div class="col-md-12 col-xl-12 my-5">
								<div class="contact-form-area">
									<div class="pbmit-heading animation-style2">
										<h2 class="pbmit-title">Interior Design Budget & Calculator</h2>
									</div>
									
    <div id="step1" class="text-center">
        <button class="btn btn-primary" onclick="nextStep()">Check Your Budget</button>
    </div>
    
    <div id="step2" class="card p-4 shadow-lg" style="display: none;">
        <h4>Enter Your Details</h4>
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <button class="btn btn-primary w-100" onclick="nextStep()">Proceed to Calculator</button>
    </div>
    
    <div id="step3" class="card p-4 shadow-lg" style="display: none;">
        <h4>Interior Design Measurement Calculator</h4>
        <div class="mb-3">
            <label for="category" class="form-label" required>Select Category:</label>
            <select class="form-select" id="category" required>
                <option value="flooring">Flooring</option>
                <option value="painting">Painting</option>
                <option value="wallpaper">Wallpaper</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="measurementType" class="form-label">Select Measurement Type:</label>
            <select class="form-select" id="measurementType">
                <option value="cm">Centimeter (cm)</option>
                <option value="sqfeet">Square Feet</option>
                <option value="inch">Inch</option>
                <option value="mm">Millimeter (mm)</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="measurementValue" class="form-label" >Enter Value:</label>
            <input type="number" class="form-control" id="measurementValue" required placeholder="Enter measurement value">
        </div>
        <button class="btn btn-primary w-100" onclick="calculate()">Calculate</button>
        <div class="mt-3">
            <h4 id="result"></h4>
        </div>
    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Contact Form -->



            <!-- Ihbox Start -->
            <section class="section-md">
				<div class="container">
					<div class="row">
                    <div class="col-md-8 col-xl-8">
							<div class="pbmit-heading-subheading animation-style2">
								
								<h2 class="pbmit-title">Kitchen Interior Design Budget & Calculator</h2>
							</div>
						</div>
						<div class="col-md-4 col-xl-4">
							<a class="pbmit-btn pbmit-btn-outline" href="../cacl/cost-calculator.php" style="border:1px solid #021152;">
								<span class="pbmit-button-content-wrapper">
									<span class="pbmit-button-text">Coast Calculate Now</span>
								</span>
							</a>
						</div>
					</div>
				</div>
            </section>
            <!-- Ihbox End --> 





			