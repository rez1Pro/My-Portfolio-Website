
<?php require_once("view/includes/header.php");?>
<body>

  <!-- Preloader
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>    
    </div> 
  preloader end-->

  <!-- Main Container -->
  <main id="app" class="main-section">

    <!--- Navbar section--->
<?php require_once "view/includes/navbar.php" ?>
    <!--- /Navbar section--->

    <!-- Home Section start -->
<?php require_once "view/includes/home.php" ?>
    <!-- #home Section end -->

    <!-- resume Section end -->
    <!-- About Section start -->
<?php require_once "view/includes/about.php" ?>
    <!-- #about Section end -->

    <!-- Resume Section start -->
<?php require_once "view/includes/resume.php" ?>
    <!-- /Resume Section start -->

    <!-- experience Section start -->   
<?php require_once "view/includes/experience.php" ?>
    <!-- experience Section start -->
 
    <!-- education Section start --> 
<?php require_once "view/includes/education.php" ?>
    <!-- education Section start --> 

    <!-- #resume Section end -->

    <!-- Portfolio Section start -->
<?php require_once "view/includes/portfolio.php" ?>
    <!-- #portfolio Section end -->

    <!-- Team Section end -->
 <?php require_once "view/includes/team.php" ?>
    <!-- #team Section end -->

    <!-- Funfacts Section end -->
 <?php require_once "view/includes/funfact.php" ?>
    <!-- #funfacts Section end -->

    <!-- Testimonial Section end -->
 <?php require_once "view/includes/testimonial.php" ?>
    <!-- #testimonial Section end -->

    <!-- Blog Section end -->
 <?php require_once "view/includes/blog.php" ?>
    <!-- #blog Section end -->

    <!-- Contact Section end -->
 <?php require_once "view/includes/contact.php" ?>
    <!-- #contact Section end -->

<?php require_once("view/includes/footer.php");?>