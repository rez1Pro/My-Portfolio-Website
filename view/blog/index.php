<?php require_once "../includes/header.php" ;?>
<body>
  <!-- Preloader ---
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>    
    </div> 
  -preloader end-->
  <div id="app">
<!--Header section--->
<?php require_once 'inc/navbar.php' ?>
<!--/Header section--->

    <!-- Blog Banner -->
    <section id="banner" class="root-sec brand-bg padd-tb-73 blogpage-banner-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix blog-banner-text">
            <div class="col-sm-8 col-md-8 col-lg-8">
              <h2 class="title">BLOG</h2>
              <p style='color:white ; ' >The section is containing all the tips & tricks about Freelancing and Programming life. Let's go to know about this topic. I will share some experience about 3 marketplace (Fiverr,Freelancer & Upwork) and Developer/Programmer Career.</p>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- Banner end -->

    <!-- Blog Post Container -->
<?php require_once "inc/post.php"; ?>
    <!-- /Blog Post Container -->

            <!-- Sidebar -->
<?php require_once "inc/site_bar.php"; ?>
            <!-- /Sidebar -->


<?php require_once "../includes/footer.php" ;?>