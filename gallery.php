<?php include('header.php'); ?>

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
  <div class="container">
    <div class="pbmit-title-bar-content">
      <div class="pbmit-title-bar-content-inner">
        <div class="pbmit-tbar">
          <div class="pbmit-tbar-inner container">
            <h1 class="pbmit-tbar-title">Gallery</h1>
          </div>
        </div>
        <div class="pbmit-breadcrumb">
          <div class="pbmit-breadcrumb-inner">
            <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
            <span class="sep"><i class="pbmit-base-icon-angle-right"></i></span>
            <span><span class="post-root post post-post current-item">Gallery</span></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Title Bar End -->

<!-- ✅ Dynamic Gallery Section -->
<style>
.dynamic-gallery-section {
  padding: 60px 20px;
  text-align: center;
  background: #ffffff;
}
.dynamic-gallery-section h2 {
  font-size: 2.5rem;
  margin-bottom: 10px;
  color: #2d2d2d;
}
.dynamic-gallery-section p {
  color: #777;
  margin-bottom: 40px;
}
.dynamic-gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 20px;
  max-width: 1200px;
  margin: auto;
}
.dynamic-gallery-item {
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  background: #fff;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.dynamic-gallery-item img {
  width: 100%;
  height: auto;
  transition: transform 0.4s ease;
  display: block;
}
.dynamic-gallery-item:hover {
  transform: scale(1.03);
  box-shadow: 0 12px 28px rgba(0, 0, 0, 0.15);
}
.dynamic-gallery-item:hover img {
  transform: scale(1.08);
}
</style>

<section class="dynamic-gallery-section">
  <h2>Explore Our Designs</h2>
  <p>Elegant interiors crafted by iHome Masters</p>
  <div class="dynamic-gallery-grid">
    <!-- High Quality Kitchen Images -->
    <div class="dynamic-gallery-item"><img src="img/kitchen/shapes/l-shape.png" alt="High Quality Kitchen L-Shape"></div>
    <div class="dynamic-gallery-item"><img src="img/kitchen/shapes/u-shape.png" alt="High Quality Kitchen U-Shape"></div>
    <div class="dynamic-gallery-item"><img src="img/kitchen/shapes/straight.png" alt="High Quality Kitchen Straight"></div>
    <div class="dynamic-gallery-item"><img src="img/kitchen/shapes/custom.jpg" alt="High Quality Kitchen Custom"></div>
    <!-- High Quality Office Images -->
    <div class="dynamic-gallery-item"><img src="img/commercial/offices/img-99.jpg" alt="High Quality Office 1"></div>
    <div class="dynamic-gallery-item"><img src="img/commercial/offices/img-98.jpg" alt="High Quality Office 2"></div>
    <div class="dynamic-gallery-item"><img src="img/commercial/offices/img-97.jpg" alt="High Quality Office 3"></div>
    <!-- High Quality Door/Wall Images -->
    <div class="dynamic-gallery-item"><img src="img/residence/wall-design/img-422.jpg" alt="High Quality Door/Wall 1"></div>
    <div class="dynamic-gallery-item"><img src="img/residence/wall-design/img-421.jpg" alt="High Quality Door/Wall 2"></div>
    <div class="dynamic-gallery-item"><img src="img/residence/wall-design/img-418.jpg" alt="High Quality Door/Wall 3"></div>
    <!-- Existing dynamic PHP images -->
    <?php
      $folder = "images/gallery/";
      $images = glob($folder . "*.{jpg,jpeg,png,webp}", GLOB_BRACE);
      $count = 0;
      if (!empty($images)) {
          foreach ($images as $image) {
              echo '<div class="dynamic-gallery-item">';
              echo '<img src="' . $image . '" alt="Gallery Image">';
              echo '</div>';
              $count++;
              if ($count >= 20) break;
          }
      } else {
          echo "<p>No gallery images found.</p>";
      }
    ?>
  </div>
</section>

<!-- ✅ Static Portfolio Section (Optional 8 Cards) -->
<div class="page-content">
  <section class="section-md">
    <div class="container-fluid px-4">
      <div class="row pbmit-element-posts-wrapper">
        <?php
          $staticImages = [
            ["kitchhh.jpg", "Bedroom", "Innovation"],
            ["kitchhh.jpg", "Furniture", "Minimalism"],
            ["kitchhh.jpg", "Interior", "Lighting"],
            ["kitchhh.jpg", "Kitchen", "Bold Tiles"],
            ["kitchhh.jpg", "Bedroom", "Clean lines"],
            ["kitchhh.jpg", "Architecture", "Integral"],
            ["kitchhh.jpg", "Interior", "Functionality"],
            ["kitchhh.jpg", "Furniture", "Terracotta"]
          ];
          foreach ($staticImages as $img) {
            echo '
            <article class="pbmit-ele-portfolio pbmit-portfolio-style-2 col-md-6 col-lg-3">
              <div class="pbminfotech-post-content">
                <div class="pbmit-featured-img-wrapper">
                  <img src="images/portfolio/' . $img[0] . '" class="img-fluid" alt="">
                </div>
                <div class="pbminfotech-box-content">
                  <div class="pbminfotech-titlebox">
                    <div class="pbmit-port-cat">
                      <a href="#">' . $img[1] . '</a>
                    </div>
                    <h3 class="pbmit-portfolio-title">
                      <a href="#">' . $img[2] . '</a>
                    </h3>
                  </div>
                </div>
              </div>
            </article>';
          }
        ?>
      </div>
    </div>
  </section>
</div>

<?php include('footer.php'); ?>
