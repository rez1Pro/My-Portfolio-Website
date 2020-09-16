<?php
require_once '../../vendor/autoload.php';
require_once '../../config.php';
/** Category show up in sidebar * */
$cat = new App\src\Category();

/** Post information select **/
$post = new App\src\Post();
if(isset($_REQUEST['details'])){
$post->select_post(base64_decode($_REQUEST['details']));
$cat->category_data_select($post->post_select['Category_id']);
}
?>  
<section id="banner" class="root-sec brand-bg padd-tb-55 single-banner blogpage-banner-wrap">
    <div class="container">
        <div class="row">
            <div class="clearfix blog-banner-text blog-single-banner">
                <div class="col-md-12">
                    <h3 style="font-size: 30px" class=""><?= $post->post_select['Title'] ;?></h3>
                    <ul class="clearfix blog-post-meta">
                        <li>By <a href="#"><?= $post->post_select['Author'] ;?></a>
                        </li>
                        <li><?= $post->post_select['Update_Date'] ;?></li>
                        <li><a href="#">5 Comments</a>
                        </li>
                        <li><a href="#"><?= $cat->category_select['Category_name'] ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> 