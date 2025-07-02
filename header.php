<?php require_once 'config.php'; ?>
<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      
      <!-- Dynamic SEO Meta Tags -->
      <?php
      $current_page = basename($_SERVER['PHP_SELF'], '.php');
      $page_title = '';
      $page_description = '';
      $page_keywords = '';
      
      switch($current_page) {
          case 'index':
              $page_title = 'iHome Master Interior Designers | Modular Kitchens & Interiors in Noida & Delhi NCR';
              $page_description = 'iHome Master Interior Designers: Modern modular kitchens, home & office interiors, 2D/3D design, and turnkey solutions in Noida & Delhi NCR. Get free consultation today!';
              $page_keywords = 'interior design, modular kitchen, office interiors, Noida, Delhi NCR, 3D design, home renovation, turnkey projects, space planning, bespoke furniture, iHome Master';
              break;
          case 'about-us':
              $page_title = 'About iHome Master | Leading Interior Design Company in Noida';
              $page_description = 'Learn about iHome Master - the leading interior design company in Noida & Delhi NCR. 10+ years of experience in modular kitchens and home interiors.';
              $page_keywords = 'about iHome Master, interior design company Noida, modular kitchen designers, home interior experts';
              break;
          case 'services':
              $page_title = 'Interior Design Services | Modular Kitchen & Home Interiors';
              $page_description = 'Complete interior design services including modular kitchens, bedroom design, living room interiors, office design, and turnkey solutions in Noida.';
              $page_keywords = 'interior design services, modular kitchen design, bedroom interior, living room design, office interior';
              break;
          case 'kitchen':
              $page_title = 'Modular Kitchen Design | Modern Kitchen Interiors in Noida';
              $page_description = 'Professional modular kitchen design services in Noida. L-shape, U-shape, straight kitchen designs with modern appliances and storage solutions.';
              $page_keywords = 'modular kitchen design, kitchen interior Noida, L-shape kitchen, U-shape kitchen, modern kitchen';
              break;
          case 'contact':
              $page_title = 'Contact iHome Master | Interior Design Consultation Noida';
              $page_description = 'Contact iHome Master for free interior design consultation in Noida & Delhi NCR. Get expert advice for your home and office interior projects.';
              $page_keywords = 'contact iHome Master, interior design consultation, Noida interior designer, free consultation';
              break;
          default:
              $page_title = 'iHome Master Interior Designers | Modular Kitchens & Interiors';
              $page_description = 'iHome Master Interior Designers: Modern modular kitchens, home & office interiors, 2D/3D design, and turnkey solutions in Noida & Delhi NCR.';
              $page_keywords = 'interior design, modular kitchen, office interiors, Noida, Delhi NCR, 3D design, home renovation';
      }
      ?>
      
      <title><?php echo $page_title; ?></title>
      <meta name="description" content="<?php echo $page_description; ?>">
      <meta name="keywords" content="<?php echo $page_keywords; ?>">
      <meta name="author" content="iHome Master Interior Designers">
      <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
      
      <!-- Open Graph Meta Tags -->
      <meta property="og:type" content="website">
      <meta property="og:title" content="<?php echo $page_title; ?>">
      <meta property="og:description" content="<?php echo $page_description; ?>">
      <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
      <meta property="og:site_name" content="iHome Master Interior Designers">
      <meta property="og:image" content="<?php echo SITE_URL; ?>/img/logo/ihomemasters.webp">
      <meta property="og:image:width" content="1200">
      <meta property="og:image:height" content="630">
      <meta property="og:locale" content="en_US">
      
      <!-- Twitter Card Meta Tags -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="<?php echo $page_title; ?>">
      <meta name="twitter:description" content="<?php echo $page_description; ?>">
      <meta name="twitter:image" content="<?php echo SITE_URL; ?>/img/logo/ihomemasters.webp">
      
      <!-- Additional SEO Meta Tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
      <meta name="theme-color" content="#dc5f00">
      <meta name="msapplication-TileColor" content="#dc5f00">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
      
      <!-- Canonical URL -->
      <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
      
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="img/logo/fav-icon.png">
      <link rel="apple-touch-icon" href="img/logo/fav-icon.png">
      
      <!-- Preconnect to external domains -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      
      <!-- Structured Data -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "iHome Master Interior Designers",
        "description": "Professional interior design and modular kitchen services in Noida and Delhi NCR",
        "url": "<?php echo SITE_URL; ?>",
        "logo": "<?php echo SITE_URL; ?>/img/logo/ihomemasters.webp",
        "image": "<?php echo SITE_URL; ?>/img/logo/ihomemasters.webp",
        "telephone": "+91-9876543210",
        "email": "info@ihomemasters.com",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Sector 62",
          "addressLocality": "Noida",
          "addressRegion": "Uttar Pradesh",
          "postalCode": "201301",
          "addressCountry": "IN"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": "28.6139",
          "longitude": "77.2090"
        },
        "openingHours": "Mo-Su 09:00-18:00",
        "priceRange": "₹₹",
        "serviceArea": {
          "@type": "GeoCircle",
          "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": "28.6139",
            "longitude": "77.2090"
          },
          "geoRadius": "50000"
        },
        "sameAs": [
          "https://www.facebook.com/ihomemasters",
          "https://www.instagram.com/ihomemasters",
          "https://www.linkedin.com/company/ihomemasters"
        ]
      }
      </script>
      
      <!-- CSS
         ============================================ -->
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Fontawesome -->
      <link rel="stylesheet" href="css/fontawesome.css">
      <!-- Flaticon -->
      <link rel="stylesheet" href="css/flaticon.css">
      <!-- Base Icons -->
      <link rel="stylesheet" href="css/pbminfotech-base-icons.css">
      <!-- Themify Icons -->
      <link rel="stylesheet" href="css/themify-icons.css">
      <!-- Slick -->
      <link rel="stylesheet" href="css/swiper.min.css">
      <!-- Magnific -->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <!-- AOS -->
      <link rel="stylesheet" href="css/aos.css">
      <!-- Shortcode CSS -->
      <link rel="stylesheet" href="css/shortcode.css">
      <!-- Base CSS -->
      <link rel="stylesheet" href="css/base.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
	  
      
      <style>
          
          #demo{
     
                max-width: 50%;
                padding: 20px 0px 20px 20px !important;
                  background: rgb(0 0 0 / 62%);
                box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
                backdrop-filter: blur( 2px );
                -webkit-backdrop-filter: blur( 11px );
                border-radius: 10px;
                border: 1px solid rgba( 255, 255, 255, 0.18 );

          }
          
             #demo h1{
     
                 color: var(--pbmit-white-color);

          }
          
          #hello{
              
              position: fixed;
              top: 0;
              background-color:#ffffff;
              width:100%;
          }
          

    .contact-p,.contact-e{
    font-size: 4.5vh;
    font-weight: 700;
    color: #dc5f00;
    }

    /* Add avatar styling for chat icons */
    .chat-avatar {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: #f3f3f3;
      margin-right: 8px;
      font-size: 1.3em;
    }
    .chat-message.user .chat-avatar {
      background: #e0f7fa;
      color: #00796b;
    }
    .chat-message.bot .chat-avatar {
      background: #fff3e0;
      color: #ff9800;
    }
    .chat-bubble {
      display: flex;
      align-items: center;
    }
    .chat-icon {
        position: fixed;
        bottom: 40px;
        right: 20px;
        width: 68px;
        height: 68px;
        background: linear-gradient(135deg, #ffb347 40%, #ffcc33 100%);
        color: #fff;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2.2rem;
        box-shadow: 0 6px 32px 0 rgba(255, 188, 66, 0.25), 0 0 0 6px #fff8e1;
        border: 3px solid #fff;
        z-index: 1003;
        cursor: pointer;
        transition: transform 0.18s, box-shadow 0.18s;
        animation: iconBounce 1.8s infinite;
    }
    .chat-icon:hover, .chat-icon:focus {
        transform: scale(1.12) rotate(-6deg);
        box-shadow: 0 10px 40px 0 rgba(255, 188, 66, 0.35), 0 0 0 10px #fffde7;
    }
    @keyframes iconBounce {
        0%, 100% { transform: translateY(0);}
        20% { transform: translateY(-8px);}
        40% { transform: translateY(0);}
        60% { transform: translateY(-4px);}
        80% { transform: translateY(0);}
    }
    .chat-popup {
        display: none;
        flex-direction: column;
        height: 520px;
        width: 360px;
        max-width: 98vw;
        position: fixed;
        bottom: 40px;
        right: 20px;
        background: #fff;
        border-radius: 22px;
        box-shadow: 0 12px 40px rgba(0,0,0,0.22);
        z-index: 1002;
        overflow: hidden;
    }
    .chat-popup.active { display: flex; }
    .chat-header { background: linear-gradient(135deg, #25D366 60%, #128C7E 100%); color: #fff; padding: 16px 20px; border-radius: 28px 28px 0 0; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; position: relative; }
    .chat-messages { flex: 1 1 0%; min-height: 0; max-height: 100%; overflow-y: auto; padding: 16px; background: #f7f7f7; font-size: 1rem; box-sizing: border-box; }
    .chat-message { margin-bottom: 12px; display: flex; flex-direction: column; }
    .chat-message.user { align-items: flex-end; }
    .chat-message.bot { align-items: flex-start; }
    .chat-bubble { padding: 10px 16px; border-radius: 18px; max-width: 80%; word-break: break-word; margin-bottom: 2px; font-size: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.04); display: flex; align-items: center; }
    .chat-message.user .chat-bubble { background: #25D366; color: #fff; border-bottom-right-radius: 4px; }
    .chat-message.bot .chat-bubble { background: #e9ecef; color: #222; border-bottom-left-radius: 4px; }
    .chat-message.user .chat-avatar { background: #e0f7fa; color: #00796b; margin-left: 8px; margin-right: 0; }
    .chat-message.bot .chat-avatar { background: #fff3e0; color: #ff9800; margin-right: 8px; margin-left: 0; }
</style>

   </head>
   <body>

	<!-- page wrapper -->
	<div class="page-wrapper">
		
        <!-- Header Main Area -->
        <header class="site-header header-style-1">
			<div class="pbmit-header-overlay">
				<div class="pbmit-main-header-area" id="hello">
					<div class="container">
						<div class="pbmit-header-content d-flex justify-content-between align-items-center">
							<div class="pbmit-logo-button-area d-flex justify-content-between align-items-center">
								<div class="site-branding">
									<h1 class="site-title">
										<a href="index.php">
											<img class="logo-img" src="img/logo/ihomemasters.webp" alt="">
										</a>
									</h1>
									
								</div>
								<div class="pbmit-button-box">
									<div class="pbmit-header-button">
										<a href="tel:+91-9990123151">
											<span class="pbmit-header-button-text-1">+91-9990123151  </span>
										</a>
									
									</div>
								</div>
							</div>
							<div class="site-navigation">
								<nav class="main-menu navbar-expand-xl navbar-light">
									<div class="navbar-header">
										<!-- Toggle Button --> 
										<button class="navbar-toggler" type="button">
											<i class="pbmit-base-icon-menu-1" style="color:red;"></i>
										</button>
									</div>
									<div class="pbmit-mobile-menu-bg"></div>
									<div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
										<div class="pbmit-menu-wrap">
											<span class="closepanel">
												<svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
													<rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
													<rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
												</svg>
											</span>
											<ul class="navigation clearfix">
												<li>
													<a href="index.php">Home</a>
												</li>
												<li>
													<a href="about-us.php">About us</a>
												</li>
												<li class="dropdown" >
													<a href="residence.php">Residence</a>
													<ul>
    												        <li>
    												        	<a href="balcony.php">Balcony</a>
    												        </li>
    												        <li>
    												        	<a href="bathroom.php">Bathroom</a>
    												        </li>
    												        <li>
												            	<a href="bedroom.php">Bedroom</a>
												            </li>
												            <li>
												            	<a href="dinning-room.php">Dinning Area</a>
												            </li>
												           
															<li class="dropdown">
																<a href="kid-room.php">Kids Room</a>
																<ul>
																	<li>
																		<a href="girl.php">Girls Room</a>
																	</li>
																	<li>
																		<a href="boy.php">Boys Room</a>
																	</li>
																
																</ul>
															</li>
															<li class="dropdown">
																<a href="kitchen.php">Kitchen</a>
																<ul>
																	<li>
																		<a href="l-shape.php">L Shape</a>
																	</li>
																	<li>
																		<a href="u-shape.php">U Shape</a>
																	</li>
																	<li>
																		<a href="parallel-shape.php">Parallel Shape</a>
																	</li>
																	<li>
																		<a href="straight-shape.php">Straight Shape</a>
																	</li>
																	
																</ul>
															</li>
												            <li>
												            	<a href="living-room.php">Living Room</a>
												            </li>
												            <li>
												            	<a href="tv-unit.php">TV Unit</a>
												            </li>
												            <li>
												            	<a href="walking-closet.php">Walking Closet</a>
												            </li>
												            <li>
												            	<a href="wall-design.php">Wall Design</a>
												            </li>
												        </ul>
												</li>
												<li class="dropdown">
													<a href="commercial.php">Commercial</a>
														<ul>
    												        <li>
    												        	<a href="restaurant.php">Cafe & Restaurants</a>
    												        </li>
															<li>
    												        	<a href="workstation.php">Workstations</a>
    												        </li>
															<li>
    												        	<a href="reception.php">Receptions</a>
    												        </li>
															<li>
    												        	<a href="storage.php">Storages</a>
    												        </li>
															<li>
    												        	<a href="director-table.php">Director Tables</a>
    												        </li>
															<li class="dropdown">
																<a href="#">Partitions</a>
																	<ul>
																		<li>
																			<a href="glass-partition.php">Glass Partitions</a>
																		</li>
																		<li>
																			<a href="wooden-partition.php">Wooden Partitions</a>
																		</li>
																		
																	</ul>
															</li>
					
												            
												        </ul>
												</li>
												
												<li>
													<a href="contact.php">Contact us</a>
												</li>
									
												<li class="dropdown">
													<a href="#">Projects</a>
													<ul>
														<li>
															<a href="going-project.php">Ongoing Projects</a>
														</li>
														<li>
															<a href="our-project.php">Complete Projects</a>
														</li>
														<li>
															<a href="gallery.php">Gallery</a>
														</li>
														<li>
															<a href="team.php">Our Team</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</nav>
							</div>
							<div class="pbmit-right-box d-flex align-items-center">
								<div class="pbmit-button-box-second">
									<a class="pbmit-btn" style="border:1px solid #021152;">
										<span class="pbmit-button-content-wrapper">
											<span class="pbmit-button-text" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enquiry Now</span>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
        </header>
        <!-- Header Main Area End Here -->
        
<script>
function appendMessage(sender, message) {
    const chatMessages = document.getElementById('chatMessages');
    const msgDiv = document.createElement('div');
    msgDiv.className = 'chat-message ' + (sender === 'You' ? 'user' : 'bot');
    let iconClass = sender === 'You' ? 'pbmit-base-icon-user' : 'pbmit-base-icon-chat';
    let iconHtml = `<span class='chat-avatar'><i class='${iconClass}'></i></span>`;
    msgDiv.innerHTML = `<div class=\"chat-bubble\">${iconHtml}<span>${message}</span></div>`;
    chatMessages.appendChild(msgDiv);
    setTimeout(() => {
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }, 0);
}
</script>
        
<div class="chat-icon" id="chatIcon" tabindex="0" aria-label="Open chat">
    <i class="pbmit-base-icon-chat"></i>
</div>
<div class="chat-popup" id="chatPopup" role="dialog" aria-modal="true" aria-label="Chat window">
    <div class="chat-header">
        <span>Chat with us</span>
        <span style="cursor: pointer; font-size: 1.5rem;" id="closeChat" tabindex="0" aria-label="Close chat">&times;</span>
    </div>
    <div class="chat-messages" id="chatMessages"></div>
    <div class="chat-input">
        <input type="text" id="userMessage" placeholder="Type your message..." autocomplete="off" aria-label="Type your message">
        <button onclick="sendMessage()" aria-label="Send message">Send</button>
    </div>
</div>
<script>
function appendMessage(sender, message) {
    const chatMessages = document.getElementById('chatMessages');
    const msgDiv = document.createElement('div');
    msgDiv.className = 'chat-message ' + (sender === 'You' ? 'user' : 'bot');
    let iconClass = sender === 'You' ? 'pbmit-base-icon-user' : 'pbmit-base-icon-chat';
    let iconHtml = `<span class='chat-avatar'><i class='${iconClass}'></i></span>`;
    msgDiv.innerHTML = `<div class=\"chat-bubble\">${iconHtml}<span>${message}</span></div>`;
    chatMessages.appendChild(msgDiv);
    setTimeout(() => {
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }, 0);
}
function openChat() {
    document.getElementById('chatPopup').classList.add('active');
    document.getElementById('userMessage').focus();
}
function closeChatPopup() {
    document.getElementById('chatPopup').classList.remove('active');
}
document.getElementById('chatIcon').onclick = openChat;
document.getElementById('closeChat').onclick = closeChatPopup;
window.sendMessage = function() {
    const userMessageInput = document.getElementById('userMessage');
    const message = userMessageInput.value.trim();
    if (message === '') return;
    appendMessage('You', message);
    userMessageInput.value = '';
    fetch('chatbot.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ message: message })
    })
    .then(response => response.json())
    .then(data => {
        appendMessage('Bot', data.response);
    })
    .catch(() => {
        appendMessage('Bot', 'Sorry, something went wrong.');
    });
};
document.getElementById('userMessage').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') sendMessage();
});
// Initial welcome
appendMessage('Bot', '👋 Hi! I\'m your assistant. How can I help you today?');
</script>
        
<!-- Open Graph / Facebook -->
<meta property="og:title" content="iHome Master Interior Designers | Modular Kitchens & Interiors" />
<meta property="og:description" content="Transforming spaces with modern interiors, modular kitchens, and more." />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://ihomemasters.com/" />
<meta property="og:image" content="https://ihomemasters.com/assets/img/logo/ihomemasters.webp" />
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="iHome Master Interior Designers | Modular Kitchens & Interiors" />
<meta name="twitter:description" content="Transforming spaces with modern interiors, modular kitchens, and more." />
<meta name="twitter:image" content="https://ihomemasters.com/assets/img/logo/ihomemasters.webp" />
<!-- Canonical -->
<link rel="canonical" href="https://ihomemasters.com/" />
<!-- Schema.org JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "iHome Master Interior Designers",
  "url": "https://ihomemasters.com/",
  "logo": "https://ihomemasters.com/assets/img/logo/ihomemasters.webp",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-8506052612",
    "contactType": "customer service"
  },
  "sameAs": [
    "https://www.linkedin.com/in/ihome-masters-8b5578371/"
  ]
}
</script>
        