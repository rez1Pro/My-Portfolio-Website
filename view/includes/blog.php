<?php
require_once 'vendor/autoload.php';
require_once 'config.php';
$post = new App\src\View_blog();
$post->main_page_blog_view();
?>
<section id="blog" class="scroll-section root-sec grey lighten-5 padd-tb-120 blog-wrap">
    <div class="container">
        <div class="row">
            <div class="blog-inner">
                <div class="col-sm-12 card-box-wrap">
                    <div class="row">
                        <div class="clearfix section-head blog-text">
                            <div class="col-sm-10">
                                <h2 class="title">Blog</h2>
                                <p class="regular-text">A Web page that serves as a publicly accessible personal journal
                                    for an individual. Typically updated daily, blogs often reflect the personality of
                                    the author.</p>
                            </div>
                        </div>
                        <div class="clearfix card-element-wrapper" id="blog-posts">
                            <?php while ($row = mysqli_fetch_array($post->run)) {
    if ($row['Status'] == '1') {?>
                            <article class="col-sm-6 col-md-4 single-card-box single-post">
                                <div class="card wow fadeInUpSmall" data-wow-duration=".7s">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                <a href="view/blog/single.php?details=<?=base64_encode($row['ID']);?>"><img
                                                        width="350" height="200" class="activator"
                                                        src="admin/images/<?=$row['Thumbnail'];?>"
                                                        alt="<?=$row['Thumbnail'];?>">
                                                </a>
                                            </div>
                                            <div class="post-body">
                                                <a href="view/blog/single.php?details=<?=base64_encode($row['ID']);?>"
                                                    class="post-title-link brand-text">
                                                    <h2 class="post-title"><?=substr($row['Title'], 0, 200);?>...</h2>
                                                </a>
                                                <p class="post-content">
                                                    <?php echo "View Details by Clicking Read More button"; //substr($row['Content'],0,500);   ?>....
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="#" class="left js-favorite" title="Love this"><i
                                                class="mdi-action-favorite"></i><span class="numb">15</span></a>
                                        <a href="view/blog/single.php?details=<?=base64_encode($row['ID']);?>"
                                            class="brand-text right waves-effect">Read More</a>
                                    </div>
                                </div>
                            </article> <!-- ./single blog post end -->
                            <?php }}?>
                        </div>
                        <div class="clearfix left-align">
                            <div class="col-sm-12">
                                <a href="view/blog/index.php" class="waves-effect waves-light btn-large load-more">See
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ./container -->
</section>