<?php 
require_once("includes/header.php");
if (!isset($_SESSION['c_user']) && !isset($_COOKIE['c_user'])) {
    header('location:../login.php');
} 

$link = $_SERVER['PHP_SELF'];
$end_link = explode("/", $link);
$link_target = end($end_link);
if(isset($_REQUEST['page'])){$page=$_REQUEST['page'];
$final_link = $link_target."?page=".$page;
}

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 
     <!-- Navbar -->
<?php require_once'includes/navbar.php'; ?>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <!-- Admin introduce -->
    <?php require_once "includes/admin.php";?>
    <!-- /Admin introduce -->


      <!-- Sidebar Menu -->
    <?php require_once "includes/sitebar_menu.php";?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

       <?php if(isset($_REQUEST['page'])){
		 $page = $_REQUEST['page'].".php" ;
	   } else{$page="front/dashboard.php" ;}
	   
	   if(file_exists($page)){
	    require_once($page);
	   }else{require_once("404.php");}
	   
	   ?>
	   
  </div>
  <!-- /.content-wrapper -->
<?php require_once("includes/copyright.php");?>
<!-- ./wrapper -->
<?php require_once("includes/footer.php");?>