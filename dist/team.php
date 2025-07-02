<?php include('header.php')?>



<style>
.pbmit-title-bar-wrappersw{
	position: relative;
	z-index: 1;
	background-image: url(img/banner/balcony.png);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    background-attachment: scroll;
}
/* Modern Team Section Styles */
.team-section {
  background: #f7f9fc;
  padding: 48px 0 32px 0;
}
.team-section-title {
  text-align: center;
  font-size: 2.2rem;
  font-weight: 800;
  color: #021152;
  margin-bottom: 36px;
  letter-spacing: 1px;
}
.team-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 32px 24px;
  justify-content: center;
}
.team-card {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 4px 18px rgba(33,33,66,0.08);
  padding: 28px 18px 22px 18px;
  text-align: center;
  max-width: 320px;
  flex: 1 1 260px;
  transition: transform 0.18s, box-shadow 0.18s;
  position: relative;
}
.team-card:hover {
  transform: translateY(-8px) scale(1.03);
  box-shadow: 0 8px 32px rgba(33,33,66,0.16);
}
.team-img {
  width: 110px;
  height: 110px;
  object-fit: cover;
  border-radius: 50%;
  margin: 0 auto 18px auto;
  box-shadow: 0 2px 8px rgba(33,33,66,0.10);
  border: 4px solid #fff;
  background: #e3e6f3;
}
.team-role {
  color: #4dc247;
  font-size: 1.05rem;
  font-weight: 600;
  margin-bottom: 6px;
  letter-spacing: 0.5px;
}
.team-name {
  font-size: 1.25rem;
  font-weight: 700;
  color: #021152;
  margin-bottom: 0;
}
@media (max-width: 900px) {
  .team-grid { gap: 18px 0; }
  .team-card { max-width: 98vw; }
}
@media (max-width: 600px) {
  .team-section { padding: 28px 0 12px 0; }
  .team-section-title { font-size: 1.4rem; margin-bottom: 18px; }
  .team-card { padding: 16px 6px 12px 6px; }
  .team-img { width: 80px; height: 80px; }
}
</style>

		  <!-- Title Bar -->
		<div class="pbmit-title-bar-wrappersw">
			<div class="container">
				<div class="pbmit-title-bar-content">
					<div class="pbmit-title-bar-content-inner">
						<div class="pbmit-tbar">
							<div class="pbmit-tbar-inner container" id="demo">
								<h2 class="pbmit-tbar-title">Our Team</h2>
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
								<span>
									<a title="" href="#" class="home"><span> Our Team</span></a>
								</span>
							
							</div>
						</div>
					</div>
				</div> 
			</div> 
		</div>
        <!-- Title Bar End-->

        
		 <!-- Page Content -->
		 <div class="page-content">

<!-- Our Team Start --> 
<section class="team-section">
	<div class="container">
		<div class="team-section-title">Meet Our Creative Team</div>
		<div class="team-grid">		
			<div class="team-card">
				<img src="director.jpg" class="team-img" alt="Jane Smith">
				<div class="team-role">Director </div>
				<div class="team-name">Mr Guddu Aalam</div>
			</div>
		
		
			<div class="team-card">
				<img src="saleshead.jpg" class="team-img" alt="Sales Head">
				<div class="team-role">Sales Head</div>
				<div class="team-name"> Mr Neeraj kumar</div>
			</div>
			
			<div class="team-card">
				<img src="hr.jpg" class="team-img" alt="Jane Smith">
				<div class="team-role">HR</div>
				<div class="team-name">Ms Shweta Rani</div>
			</div>
			
			
		</div>
	</div>
</section>
<!-- Our Team End --> 

</div>
<!-- Page Content End -->
           
      
   


<?php include('footer.php')?>