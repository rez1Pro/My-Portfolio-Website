<?php
require_once '../vendor/autoload.php';
require_once '../config.php';
$cat = new \App\src\Category();
$post = new App\src\Post();
/** this is the condition system of delete **/
if(isset($_REQUEST['delete']) && $_REQUEST['image']){
    $post->delete_post($_REQUEST['delete'],$_REQUEST['image']);
}
    
/** this is the condition section of update system **/
$post->manage_post();
if (isset($_REQUEST['id']) && isset($_REQUEST['approved'])) {
    $id = $_REQUEST['id'];
    if ($data = 'approved') {
        $post->update_post_status($id, $data);
    }
}
if (isset($_REQUEST['id']) && isset($_REQUEST['unapproved'])) {
    $id = $_REQUEST['id'];
    if ($data = 'unapproved') {
        $post->update_post_status($id, $data);
    }
}
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><span  style="font-size:20px;" > <i class= "fas fa-tachometer-alt" ></i>  <a href="index.php?page=front/dashboard"> Dashboard </span></a></li>
        <li class="breadcrumb-item active" aria-current="page"> <span style="font-size:20px;"><i class= "fas fa-tasks" ></i> Manage Post </span> </li>
    </ol>
</nav>
<center> <?= isset($_REQUEST['success']) ? "<font color='lime' font-size='3px' > Successfully Saved The Post! Now You Should Manage Your Status (Publish/Unpublish) </font>" : ""; ?></center>
<center> <?= isset($_REQUEST['edit_success']) ? "<font color='lime' font-size='3px' > Successfully Updated The Post!!!</font>" : ""; ?></center>
<center> <?= isset($_REQUEST['published']) ? "<font color='lime' font-size='3px' > Congratulation! Your post is successfully Published Now.</font>" : ""; ?></center>
<center> <?= isset($_REQUEST['unpublished']) ? "<font color='tomato' font-size='3px' > Sorry! Your Post is not Published.</font>" : ""; ?></center>
<center> <font color='tomato' font-size='3px' ><?= $post->del_mgs_success; ?> </font></center>
<center> <font color='tomato' font-size='3px' ><?= $post->del_mgs_error; ?> </font></center>
<section>
    <div class="container small">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Manange Your All Post</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="manage_post" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Categories</th>
                            <th>Tags</th>
                            <th>Likes</th>
                            <th>Comments</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sl = 1;
                        while ($select = mysqli_fetch_array($post->run)) {
                            ?>


                            <tr>
                                <td><?= $select['Title']; ?></td>
                                <td><?= $select['Author']; ?></td>
                                <td>
                                    <?php
                                    $cat->category_data_select($select['Category_id']);
                                    echo $cat->category_select['Category_name'];
                                    ?> 
                                </td>

                                <td><?= $select['Tags']; ?></td>
                                <td class="text-center py-0 align-middle"> <span><i style="color:lime" class="fas fa-thumbs-up fa-2x"></i><sub><?= $select['Likes']; ?></sub></span>
                                </td>
                                <td class="text-center py-0 align-middle"> <a href="index.php?page=front/blog/manage_comment&id=<?= $select['ID']; ?>"><i class=" fas fa-comment fa-2x"></i><sub>29</sub></a>
                                </td>
                                <td> <?php if ($select['Status'] == '1') { ?>
                                        <a href="index.php?page=front/blog/manage_post&id=<?= $select['ID']; ?>&approved" class="btn btn-light"><font color="lime">Approved</a></font></a>
    <?php } else { ?>
                                        <a href="index.php?page=front/blog/manage_post&id=<?= $select['ID']; ?>&unapproved" class="btn btn-default"><font color="tomato">Unapproved</a></font></a>
                                    <?php } ?>
                                    <br/> 
                                    at <?= $select['Update_Date']; ?>
                                </td>

                                <td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="index.php?page=front/blog/update_post&edit=<?= $select['ID']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                       <a href="index.php?page=front/blog/manage_post&delete=<?= $select['ID']; ?>&image=<?= $select['Thumbnail']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
<?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>

