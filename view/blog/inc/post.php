<?php
require_once '../../vendor/autoload.php';
require_once '../../config.php';
$post = new App\src\Post();
$post->manage_post();
?>

<section class="bottom-50 root-sec grey lighten-5 blogpage-posts-wrap">
    <div class="container">
        <div class="row">
            <div class="clearfix all-blog-post blog-inner with-sidebar">
                <div class="col-sm-8">
                    <div class="row" id="blog-posts">


                        <!--- Category wise post view --->
                        <?php
if (isset($_REQUEST['view']) && isset($_REQUEST['category'])) {
    while ($row = mysqli_fetch_array($post->run)) {
        if ($row['Status'] == '1' && $row['Category_id'] == base64_decode($_REQUEST['category'])) {
            ?>
                        <article class="col-xs-12 col-sm-12 col-md-6 single-card-box single-post">
                            <div class="card">
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
                                                <h3 style="font-size: 20px"><?=substr($row['Title'], 0, 100);?>....</h3>
                                            </a>
                                            <p class=post-content><?php echo substr($row['Content'], 0, 400) ?>.... </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix card-content">
                                    <a href="#" class="left js-favorite" title="Love this"><i
                                            class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                    <a href="view/blog/single.php?details=<?=base64_encode($row['ID']);?>"
                                        class="brand-text right waves-effect">read more</a>
                                </div>
                            </div>
                        </article>
                        <!--./single post-->
                        <?php }
    }
} else {?>

                        <!---- PHP code start from here and view all the post ----->
                        <?php while ($row = mysqli_fetch_array($post->run)) {
    if ($row['Status'] == '1') {
        ?>
                        <article class="col-xs-12 col-sm-12 col-md-6 single-card-box single-post">
                            <div class="card">
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
                                                <h3 style="font-size: 20px"><?=substr($row['Title'], 0, 200);?>....</h3>
                                            </a>
                                            <p class="post-content">
                                                <?php echo "Click The Read Mor Button To View Details" //substr($row['Content'], 0, 400);        ?>...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix card-content">
                                    <a href="#" class="left js-favorite" title="Love this"><i
                                            class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                    <a href="#" class="left js-favorite" title="Love this"><i
                                            class="mdi-action-massage"></i><span class="numb">Comments 27</span></a>
                                    <a href="view/blog/single.php?details=<?=base64_encode($row['ID']);?>"
                                        class="brand-text right waves-effect">read more</a>
                                </div>
                            </div>
                        </article>
                        <!--./single post-->
                        <?php }
}?>
                        <!---/PHP code end here ---->
                        <?php }?>
                        <!--- /Category wise post view --->

                    </div>
                </div>