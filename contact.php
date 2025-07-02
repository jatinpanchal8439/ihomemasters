<?php include('header.php')?>


<style>
.pbmit-title-bar-wrapperswt{
	position: relative;
	z-index: 1;
    background-image: url(all-img/banner-page/contact.png);
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
							<h1 class="pbmit-tbar-title"> Contact Us</h1>
						</div>
					</div>
					<div class="pbmit-breadcrumb">
						<div class="pbmit-breadcrumb-inner">
							<span>
								<a title="" href="index.php" class="home"><span>Home</span></a>
							</span>
							<span class="sep">
								<i class="pbmit-base-icon-angle-right"></i>
							</span>
							<span><span class="post-root post post-post current-item"> Contact Us</span></span>
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
            <div class="row">
                <div class="col-md-12 col-xl-5">
                    <div class="pbmit-sticky-col">
                        <div class="contact-us-left-area">
                            <div class="pbmit-heading-subheading animation-style2">
                                <h4 class="pbmit-subtitle">Contact Us</h4>
                                <h2 class="pbmit-title">Let's Talk</h2>
                                <div class="pbmit-heading-desc">
                                    For all your inquiries, ihomemasters is here to assist you. Whether you need information about our products or services, our dedicated team is ready to provide prompt and professional support. Feel free to contact us anytime!
                                </div>
                                <div>
                                    <p class="contact-p"><i class="fa fa-phone fab-icon"></i> +91-8506052612</p>
                                </div>
                                <div>
                                    <p class="contact-e"><i class="fa fa-envelope fab-icon"></i> interiors@ihomemasters.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-12 col-xl-7 my-5">
                    <div class="contact-form-area">
                        <div class="pbmit-heading animation-style2">
                            <h2 class="pbmit-title">Contact Us</h2>
                        </div>
                        <form class="contact-form" method="post" id="contact-form" action="contact_process.php">
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Your Name *" name="yname" required>
        </div>
        <div class="col-md-6">
            <input type="email" class="form-control" placeholder="Your Email *" name="yemail" required>
        </div>
        <div class="col-md-6">
            <input type="tel" class="form-control" placeholder="Your Phone *" name="yphone" required>
        </div>
        <div class="col-md-6">
            <select class="form-control" name="ycategory">
                <option value="">--Select Your Category--</option>
                <option value="Residence">Residence</option>
                <option value="Commercial">Commercial</option>
                <option value="Services">Others</option>
            </select>
        </div>
        <div class="col-md-12">
            <textarea name="message" cols="40" rows="10" class="form-control" placeholder="Message" required></textarea>
        </div>
        <div class="col-md-12">
            <button class="pbmit-btn pbmit-btn-outline" type="submit" name="contact">
                <span class="pbmit-button-content-wrapper">
                    <span class="pbmit-button-text">Submit</span>
                </span>
            </button>
        </div>
        <div class="col-md-12 col-lg-12 message-status"></div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form -->

            <!-- Client --> 

            <!-- Client end --> 

            <!-- Iframe -->
            <section class="section-xl">
                <div class="container-fluid">
                    <div class="iframe-area">
                        
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1750.9780522750325!2d77.27561384420854!3d28.631077658409154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd005a461763%3A0x117e05eaa256faee!2sPrakashvati%20and%20Sons%20Pvt%20Ltd.!5e0!3m2!1sen!2sin!4v1727683726646!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>
            <!-- Iframe End-->



      

<?php include('footer.php')?>