<?php require_once 'vendor/autoload.php';
// Your Database information.The information must be changed by real info.
// ** MySQL settings - You can get this info from your web host ** //

/** MySQL hostname **/
 define("DB_HOST", "localhost");
 
 /** MySQL database username */
 define("DB_USER", "Rezwan");
 
 /** MySQL database password */
 define("DB_PASSWORD", "Rez1rez1");
 
 /** The name of the database for Website **/
 define("DB_NAME", "portfolio");

 
 
 
 // You cannot change of the information of this section ...
 use \App\src\Database;
 $db = array(
    'host' => DB_HOST,
    'user' => DB_USER,
    'pwd'  => DB_PASSWORD,
    'name' => DB_NAME
);
 Database::information($db);
 
?>