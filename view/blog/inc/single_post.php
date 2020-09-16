<?php
require_once '../../vendor/autoload.php';
require_once '../../config.php';
$post = new App\src\Post();

if(isset($_REQUEST['details'])){
$post->select_post(base64_decode($_REQUEST['details']));
}
?>     

<div class="col-sm-8">
              <article class="single-post-page">
                <div class="thumb-slides-container">
                    <img width="750px" height="400px" src="admin/images/<?= $post->post_select['Thumbnail']; ?>">
                </div>
                <div class="single-post-content">
                <?= $post->post_select['Content']; ?>
                </div>
                <div class="clearfix post-footer">
                  <a href="#" class="left post-like js-favorite" title="Love this"><i class="mdi-action-favorite"></i> <span class="numb">109</span></a>
                  <ul class="clearfix right share-post">
                    <li><a href="#"><i class="fa fa-facebook"></i> <span>SHARE</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> <span>TWEET</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus"></i> <span>PLUS</span></a>
                    </li>
                  </ul>
                </div>