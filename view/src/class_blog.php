<?php

namespace App\src;

class View_blog extends Post{
    
    /** view front page blog **/
    public $run;
    public function main_page_blog_view(){
        $query = "SELECT * FROM post order by ID desc LIMIT 1,3 ";
        $this->run = mysqli_query($this->link, $query);
        return $this->run;
        
    }
    
    /** site bar recent post view **/
    public function recent_post_view(){
        $query = "SELECT * FROM post order by ID desc LIMIT 1,10 ";
        $this->run = mysqli_query($this->link, $query);
        return $this->run;
    }
    
    /** Comment insert in Database **/
    public $success_mgs;
    public function comments($data,$recieve_id){
         $name = mysqli_real_escape_string($this->link,$data['name']);
         $email = mysqli_real_escape_string($this->link,$data['email']);
         $website = mysqli_real_escape_string($this->link,$data['website']);
         $comment = mysqli_real_escape_string($this->link,$data['comment']);
         
         $post_id = base64_decode($recieve_id);
         
        $query = "INSERT INTO `comments`(`Post_id`, `Name`, `Email`, `Website`, `Comment`) VALUES ('$post_id','$name','$email','$website','$comment')";
        $run = mysqli_query($this->link, $query);
        if($run){
           header("location:../blog/single.php?details=$recieve_id&&success");
        }else{
            echo "Something wents wrong!";
        }
    }
    

}
