<?php
require_once '../../vendor/autoload.php';
require_once '../../config.php';
/** Category show up in sidebar * */
$cat = new App\src\Category();
$cat->category_table_select();

/** post title show up in sidebar * */
$post = new App\src\Post();
$post->manage_post();
?>
<header id="navigation" class="root-sec white nav">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="nav-inner">
                    <nav class="primary-nav">
                        <div class="clearfix nav-wrapper">
                            <a href="#!" class="left brand-logo"><img src="view/assets/images/logo.png" alt="">
                            </a>
                            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                            <ul class="right static-menu">
                                <li class="search-form-li">
                                    <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                                    <div class="search-form-wrap hide">
                                        <form action="#" class="">
                                            <input type="search" class="search">
                                            <button type="submit"><i class="mdi-action-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1">
                                        Categories
                                    </a>
                                </li>
                            </ul>
                            <ul class="inline-menu side-nav" id="mobile-demo">

                                <!-- Mini Profile // only visible in Tab and Mobile -->
                                <li class="mobile-profile">
                                    <div class="profile-inner">
                                        <div class="pp-container">
                                            <img src="view/assets/images/person.png" alt="">
                                        </div>
                                        <h3>John Doe</h3>
                                        <h5>Creative UI/UX Expert</h5>
                                    </div>
                                </li><!-- mini profile end-->

                                <li><a href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                                </li>
                                <li><a href="view/blog/index.php"><i class="fa fa-pencil fa-fw"></i> All Blog</a>
                                </li>
                            </ul>
                            <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                                <?php
                                while ($result = mysqli_fetch_array($cat->category_query_run)) {
                                    if ($result['Status'] == '1') {
                                        ?>
                                        <li><a href="view/blog/index.php?category=<?= base64_encode($result['ID']); ?>&view=<?= $result['Slug']; ?> "> <?= $result['Category_name']; ?> </a>
                                        </li>
                                    <?php }
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header> <!-- header navigation end -->