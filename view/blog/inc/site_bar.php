<?php
require_once '../../vendor/autoload.php';
require_once '../../config.php';
/** Category show up in sidebar * */
$cat = new App\src\Category();
$cat->category_table_select();

/** post title show up in sidebar * */
$post = new App\src\View_blog();
$post->recent_post_view();
?>
<br/>
<br/>
<div class="col-sm-4">
    <div class="primary-sidebar">
        
        <!------------------------------ Post Title start here ----------------->
        <aside class="single-widget">
            <h2 class="widget-title">RECENT POSTS</h2>
            <ul>
                <?php while ($row = mysqli_fetch_array($post->run)) {
                    if ($row['Status'] == '1') { ?>
                        <li>
                            <a href="view/blog/single.php?details=<?= base64_encode($row['ID']); ?>"><?= substr($row['Title'], 0, 100); ?>...</a>
                            <span><?= $row['Update_Date']; ?></span>
                        </li>
    <?php }} ?>
            </ul>
        </aside>
                <!------------------------------/ Post Title end here ---------------------->

                        <!------------------------------ Post Category start here ----------------->

        <aside class="single-widget">
            <h2 class="widget-title">CATEGORIES</h2>
            <ul>
           <?php
            while ($result = mysqli_fetch_array($cat->category_query_run)) {
                    if ($result['Status'] == '1') { ?>
                <li><a href="view/blog/index.php?category=<?= base64_encode($result['ID']); ?>&view=<?= $result['Slug']; ?> "> <?= $result['Category_name']; ?> </a>
                        </li>
                    <?php }} ?>
            </ul>

        </aside>
                <!------------------------------ /Post Category end here ----------------->

        
        <!--- Tag section is going here --->
<?php
/** Tag select * */
if (isset($_REQUEST['details'])) {
    $post->select_post(base64_decode($_REQUEST['details']));
    ?>

            <aside class="single-widget">
                <h2 class="widget-title">TAGS</h2>
                <div class="widget-text">
                    <?php
                    $tag = explode(',', $post->post_select['Tags']);
                    $i = 0;
                    while ($i < count($tag)) {
                        ?>

                        <a class='tags'> <?= $tag[$i] ?> </a>

             <?php $i++; } ?>
                </div>
            </aside>
<?php } ?>
        <!----/ Tag section end here ---->
        
        
    </div>
</div> <!-- ./sidebar end -->
</div>
</div>
</div> <!-- ./container end -->
</section> <!-- ./Blog Post container end-->