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
/* Director special styling */
.director-card {
  max-width: 400px;
  flex: 1 1 350px;
  background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
  border: 2px solid #4dc247;
}
.director-img {
  width: 150px;
  height: 150px;
  object-fit: cover;
  border-radius: 50%;
  margin: 0 auto 20px auto;
  box-shadow: 0 4px 16px rgba(77,194,71,0.25);
  border: 6px solid #4dc247;
  background: #e3e6f3;
}
.director-role {
  color: #4dc247;
  font-size: 1.2rem;
  font-weight: 700;
  margin-bottom: 8px;
  letter-spacing: 0.8px;
  text-transform: uppercase;
}
.director-name {
  font-size: 1.4rem;
  font-weight: 800;
  color: #021152;
  margin-bottom: 12px;
}
.director-description {
  color: #666;
  font-size: 0.95rem;
  line-height: 1.6;
  margin-top: 8px;
  font-style: italic;
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
  .director-card { max-width: 98vw; }
}
@media (max-width: 600px) {
  .team-section { padding: 28px 0 12px 0; }
  .team-section-title { font-size: 1.4rem; margin-bottom: 18px; }
  .team-card { padding: 16px 6px 12px 6px; }
  .team-img { width: 80px; height: 80px; }
  .director-img { width: 120px; height: 120px; }
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
			<div class="team-card director-card">
				<img src="director.jpg" class="team-img director-img" alt="Mr Guddu Aalam">
				<div class="team-role director-role">Director & CEO</div>
				<div class="team-name director-name">Mr Guddu Aalam</div>
				<div class="director-description">Leading our company with over 15 years of experience in interior design and construction. Passionate about creating beautiful spaces that transform lives.</div>
			</div>
		
			<div class="team-card">
				<img src="mi.png" class="team-img" alt="Mikhael William">
				<div class="team-role">Director IT & Marketing</div>
				<div class="team-name">Mikhael William</div>
			</div>
			
			<div class="team-card">
				<img src="vinod.png" class="team-img" alt="Vinod Chandiramani">
				<div class="team-role">Director Marketing & Sales</div>
				<div class="team-name">Vinod Chandiramani</div>
			</div>
		
			<div class="team-card">
				<img src="saleshead.jpg" class="team-img" alt="Mr Neeraj Kumar">
				<div class="team-role">Sales Head</div>
				<div class="team-name">Mr Neeraj Kumar</div>
			</div>
			
			<div class="team-card">
				<img src="d.png" class="team-img" alt="Interior Designer">
				<div class="team-role">Interior Designer</div>
				<div class="team-name">Yashika</div>
			</div>
			
			<div class="team-card">
				<img src="s2.png" class="team-img" alt="Interior Designer">
				<div class="team-role">Interior Designer</div>
				<div class="team-name">Senior Designer</div>
			</div>
			
			<div class="team-card">
				<img src="d3.png" class="team-img" alt="Parul Saxena">
				<div class="team-role">Interior Designer</div>
				<div class="team-name">Parul Saxena</div>
			</div>	
			
			<div class="team-card">
				<img src="hr.jpg" class="team-img" alt="Ms Shweta Rani">
				<div class="team-role">HR Manager</div>
				<div class="team-name">Ms Shweta Rani</div>
			</div>
			
			<div class="team-card">
				<img src="salesmanager.jpg" class="team-img" alt="Mr Viraj Chaudhary">
				<div class="team-role">Senior Sales Manager</div>
				<div class="team-name">Mr Viraj Chaudhary</div>
			</div>
		</div>
	</div>
</section>
<!-- Our Team End --> 

</div>
<!-- Page Content End -->
           
      
   


<?php include('footer.php')?>