<?php require_once("../includes/header.php");?>
<?php require_once 'inc/navbar.php' ?> 
<body>
 <!-- Banner start -->
 <?php require_once 'inc/banner.php' ?> 
<!-- ./Banner end -->

     <!-- Blog Post Container-->
    <section id="all-posts" class="root-sec grey lighten-5 blogpage-posts-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix all-blog-post blog-inner with-sidebar">

          <!-- post container start-->
      <?php require_once 'inc/single_post.php'; ?> 
          <!-- post container start-->

<!-- Comment Section-->
<?php require_once 'inc/comment.php'; ?>
<!-- /Comment Section-->

<!-- Send Message-->
<?php require_once 'inc/message.php'; ?>
<!-- Send Message-->
              </article>
            </div> 
            <!-- ./post container end-->

            <!-- Sidebar start-->
     <?php require_once 'inc/site_bar.php'; ?>
           <!-- ./sidebar end-->
          </div>
        </div>
      </div> <!-- ./container end-->
    </section>  <!-- ./Blog Post Container end-->
	
<?php require_once("../includes/footer.php");?>