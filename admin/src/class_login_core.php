<?php

namespace App\src;

 class Login extends Database{
     
    /** This is the function of User_info Table **/
    public $select;


    public function user_info_table_select() {
        $run = mysqli_query($this->link, "SELECT* FROM user_info");
        $selected_data = mysqli_fetch_array($run);
        return $this->select = $selected_data;
    }


   public function user_info_select($data){
            $username = $data['username'];
            $password = $data['password'];
            $login_token = md5(sha1($username.$password));
 
        if (isset($data['remember'])) {
            $remember = $data['remember'];
        } else {
            $remember = "off";
        }
        
        $this->user_info_table_select();
           $db_username = $this->select['username'];
           $db_pwd = $this->select['password'];
           $db_authen = $this->select['authentication'];

        if ($username == $db_username && $password == $db_pwd && $db_authen == $login_token) {
            session_start();
            $_SESSION['c_user'] = $db_authen;
            $_SESSION['username'] = $db_username;
            if ($remember == 'on') {
                setcookie("c_user", $db_authen, time() + (3600 * 24),'/');
                header('location:admin/index.php');
            } else {
                header('location:admin/index.php');
            }
        }else{
            echo "<h5 style='color:red'>UserName or Password wrong!</h5>";
        }
    }

}
