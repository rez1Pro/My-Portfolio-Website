<?php
namespace App\src;

class About extends Database{
    public function insert_data($data){
        
        $query = "UPDATE `about` SET 'Title'='$Title','Name'='$Name','Age'='$Age','Phone'='$Phone','Email'='$Email','Address'='$Address','Story'='$Story','Photo'='$Photo','CV'='$CV' WHERE ID=1)";
        $run = mysqli_query($this->link, $query);
    }
}
