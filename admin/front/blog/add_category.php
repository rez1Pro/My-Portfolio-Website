<?php
require_once '../vendor/autoload.php';
require_once '../config.php';

$call = new \App\src\Category();

if (isset($_REQUEST['submit'])) {
  
    if(isset($_REQUEST['status']) == 'on'){
        $status = '1';
    }else {
        $status = '0';
    }

    $call->category($_REQUEST['category'], $_REQUEST['slug'], $status);
}
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item active" aria-current="page"><span  style="font-size:20px;" > <i class= "fas fa-tachometer-alt" ></i>  <a href="index.php?page=front/dashboard"> Dashboard </span></a></li>
  <li class="breadcrumb-item active" aria-current="page"> <span style="font-size:20px;"><i class= "fas fa-tags" ></i> Add Category </span> </li>
  </ol>
 </nav>
<br/>
<center> <?= $call->success; ?> </center>
<center> <?= $call->error; ?> </center>
<div class="container col-sm-8">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Create A New Category</h3>
        </div>
        <!-- /.card-header -->
        
        <!-- form start -->
        <form action="" method="post" class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" required="" name="category" placeholder="example : HTML">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Slug :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" required="" name="slug" placeholder="example : category_html">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name='status' id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">Active</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-info float-right">Save A New Category</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>
