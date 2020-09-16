<?php
require_once '../vendor/autoload.php';
require_once '../config.php';

/** Data Select from Database and Data Update in Database  * */
$call = new \App\src\Category();

if (isset($_REQUEST['id'])) {


    $call->category_data_select($_REQUEST['id']);
}
if (isset($_REQUEST['submit'])) {
    $call->category_table_data_update($_REQUEST['id'], $_POST);
}
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item active" aria-current="page"><span  style="font-size:20px;" > <i class= "fas fa-tachometer-alt" ></i>  <a href="index.php?page=front/dashboard"> Dashboard </span></a></li>
  <li class="breadcrumb-item active" aria-current="page"> <span style="font-size:20px;"><i class= "fas fa-list-alt" ></i><a href="index.php?page=front/blog/manage_category"> Manage Category</a> </span> </li>
  <li class="breadcrumb-item active" aria-current="page"> <span style="font-size:20px;"><i class= "fas fa-edit" ></i>Update Category </span> </li>
  </ol>
 </nav>
<br/>
<!-- <center> <?= $call->success_update; ?> </center>
<center> <?= $call->error_update; ?> </center> -->

<div class="container col-sm-8">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Update Category</h3>
        </div>
        <!-- /.card-header -->
        
        <!-- form start -->
        <form action="" method="post" class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="<?= $call->category_select['Category_name'];?>" required="" name="Category_name" placeholder="example : HTML">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Slug :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" value="<?= $call->category_select['Slug'];?>" required="" name="Category_slug" placeholder="example : category_html">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <div class="form-check">
                            <input type="checkbox" <?= $call->category_select['Status'] == '1' ? 'checked' : ''; ?> class="form-check-input" name='Category_status' id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">Active</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-info float-right">Update Category</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>


