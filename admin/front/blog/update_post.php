<?php
require_once '../vendor/autoload.php';
require_once '../config.php';
/** Category class code * */
$cat = new \App\src\Category();
$cat->category_table_select();

/** Post class code * */
$post = new \App\src\Post();
if (isset($_REQUEST['edit'])) {
    $post->select_post($_REQUEST['edit']);
    $post->post_select['Category_id'];
}
If (isset($_REQUEST['update']) && isset($_REQUEST['edit'])) {
    $post->update_post($_POST, $_REQUEST['edit']);
}
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"> <span style="font-size:20px;" > <i class= "fas fa-tachometer-alt" ></i>  <a href="index.php?page=front/dashboard"> Dashboard </span></a></li>
        <li class="breadcrumb-item active" aria-current="page"> <span style="font-size:20px;"><i class= "fas fa-tasks" ></i><a href="index.php?page=front/blog/manage_post"> Manage Post</a> </span> </li>
        <li class="breadcrumb-item active" aria-current="page"> <span style="font-size:20px;"><i class= "fas fa-edit" ></i>Update Post </span> </li>
    </ol>
</nav>
<div class="container col-sm-11">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Update Your Post from here</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="" enctype="multipart/form-data" method='post'>
            <div class="card-body">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title :</label>
                    <div class="col-sm-10">
                        <input type="text" required='' value='<?= $post->post_select['Title']; ?>' name ='Title' class="form-control" id="title" placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="category" name='Category_name' class="col-sm-2 col-form-label">Category :</label>
                    <div class="col-sm-10">
                        <select id='category' required='' name ='Category_id' class='form-control'>
                            <option value="0"> Uncategories </option>
                            <?php
                            while ($run = mysqli_fetch_array($cat->category_query_run)) {
                                if ($run['Status'] == '1') {
                                    ?>
                                    <option <?= $run['ID'] == $post->post_select['Category_id'] ? 'selected' : '' ?> value="<?= $run['ID']; ?>" > <?= $run['Category_name']; ?></option>

                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="post" class="col-sm-2 col-form-label">Your Post</label>
                    <div class="col-sm-10">

                        <textarea class="textarea" placeholder="What's on your mind..." id='post' name='Content' required=''
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                      <?= $post->post_select['Content']; ?>
                        </textarea>


                    </div>
                </div>
                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Thumbnail Photo :</label>
                    <div class="col-sm-5">

                        <div class="btn btn-default btn-file">
                            <i class="fas fa-paperclip"></i> Attachment 
                            <input  type="file" name="attachment">
                        </div>
                    </div>
                    <div class="com-sm-5"><img width="100px" class="img-bordered" src="images/<?= $post->post_select['Thumbnail']; ?>"</div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Tags :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tag" name='Tags' required='' value='<?= $post->post_select['Tags']; ?>' placeholder="Tags">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Author" class="col-sm-2 col-form-label">Author :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Author" required='' value='<?= $post->post_select['Author']; ?>' name='Author' placeholder="Author Name">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" name='update' class="btn btn-primary float-right">Update Now</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>