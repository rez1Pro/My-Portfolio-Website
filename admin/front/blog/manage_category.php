<?php
require_once '../vendor/autoload.php';
require_once '../config.php';

$call = new \App\src\Category();
$call->category_table_select();

if (isset($_REQUEST['id'])) {
    $call->category_delete($_REQUEST['id']);
}
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><span  style="font-size:20px;" > <i class= "fas fa-tachometer-alt" ></i>  <a href="index.php?page=front/dashboard"> Dashboard </span></a></li>
        <li class="breadcrumb-item active" aria-current="page"> <span style="font-size:20px;"><i class= "fas fa-list-alt" ></i> Manage Category </span> </li>
    </ol>
</nav>
<br/>
<section>
    <center><?php if (isset($_REQUEST['show'])) {
    echo "<font color='lime'> Successfully Updated! </font>";
} ?></center>
    <center><?php if (isset($_REQUEST['show_delete'])) {
    echo "<font color='tomato'> Successfully Deleted! </font>";
} ?></center>
    <div class="container col-sm-11">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Manage Your Category</h3>
                    </div>
                    <hr/>
                    <!-- /.card-header -->
                    <table id="manage_category" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Slug</th>
                                <th>Active/Inactive</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
<?php
$sl = '1';
while ($data = mysqli_fetch_array($call->category_query_run)) {
    ?>
                                <tr>
                                    <td><?= $sl; $sl++ ;?></td>
                                    <td><?= $data['Category_name'] ?></td>
                                    <td><?= $data['Slug'] ?></td>
                                    <td><div class="custom-control custom-switch">
                                            <input type="checkbox" <?= $data['Status'] == '1' ? 'checked' : ''; ?> class="custom-control-input" id="<?= $data['ID'] ?>"> 
                                            <label  class="custom-control-label" for="<?= $data['ID'] ?>"> Active </label> 
                                        </div></td>
                                    <td> <a href="index.php?page=front/blog/category_update&&id=<?= $data['ID'] ?>"> <span class="btn-sm btn-primary" ><i class="fas fa-edit"></i>Edit</span> </a> || <a href="index.php?page=front/blog/manage_category&&id=<?= $data['ID'] ?>"> <span class="btn-sm btn-danger" ><i class="fas fa-trash"> </i>Delete</span> </a></td>
                                </tr>
<?php } ?>
                        </tbody>

                    </table>
                    </form>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
