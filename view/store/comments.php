<?php
require_once '../../vendor/autoload.php';
require_once '../../config.php';

$com = new \App\src\View_blog();

/** Data receive from comment form **/
if(isset($_REQUEST['submit']) || isset($_REQUEST['details'])){
  $com->comments($_POST,$_REQUEST['details']);
}
