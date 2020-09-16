<?php
require_once '../vendor/autoload.php';
require_once '../config.php';
$category = new \App\src\Category();
$post = new App\src\Post();
$category->category_table_select();
$result = $category->category_query_run;

if (isset($_REQUEST['save'])) {
    $post->insert_post($_POST);
}
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><span  style="font-size:20px;" > <i class= "fas fa-tachometer-alt" ></i>  <a href="index.php?page=front/dashboard"> Dashboard </span></a></li>
        <li class="breadcrumb-item active" aria-current="page"> <span style="font-size:20px;"><i class= "fas fa-plus-circle" ></i> Add Post </span> </li>
    </ol>
</nav>

<br/>
<center> <?= $post->error; ?></center>
<center> <?= $post->err_img; ?></center>
<div class="container col-sm-11">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Through A New Post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" enctype="multipart/form-data" action="" method='post'>
            <div class="card-body">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title :</label>
                    <div class="col-sm-10">
                        <input type="text" required='' name ='Title' class="form-control" id="title" placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="category" name='Category_name' class="col-sm-2 col-form-label">Category :</label>
                    <div class="col-sm-10">
                        <select id='category' required='' name ='Category_id' class='form-control'>
                            <option value=''> Select a category</option>
                            <?php while ($run = mysqli_fetch_array($result)) {
                                if ($run['Status'] == '1') { ?>
                                    <option value="<?= $run['ID']; ?>"><?= $run['Category_name']; ?></option>
    <?php }
} ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="post" class="col-sm-2 col-form-label">Your Post</label>
                    <div class="col-sm-10">

                        <textarea class="textarea" placeholder="What's on your mind..." id='post' name='Content' required=''
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                </div>



                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Thumbnail Photo :</label>
                    <div class="col-sm-10">
                        <div class="btn btn-default btn-file">
                            <i class="fas fa-paperclip"></i> Attachment 
                            <input  type="file" name="attachment">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Tags :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tag" name='Tags' required='' placeholder="Tags">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Author" class="col-sm-2 col-form-label">Author :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" disabled="" id="Author" required='' name='Author' placeholder="Author Name" value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?>">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" name='save' class="btn btn-primary float-right">Save & Publish</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>