<?php

namespace App\src;

//*** Database Connection from Mysql Database ***//
class Database {

    private static $host;
    private static $user;
    private static $password;
    private static $database;
    public         $link;
    
    public static function information($db) {

        self::$host = $db['host'];
        self::$user = $db['user'];
        self::$password = $db['pwd'];
        self::$database = $db['name'];
    }

    public function __construct() {
        $link = mysqli_connect(self::$host, self::$user, self::$password, self::$database);

        if (mysqli_connect_errno()) {
            echo "<h2>Error Estabilishing Database Connection!</h2>";
        } else {
            return $this->link = $link;
        }
    }

}


