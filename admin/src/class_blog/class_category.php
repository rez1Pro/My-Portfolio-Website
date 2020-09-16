<?php

namespace App\src;

class Category extends Database {
    
    
    /** This is the function of category table **/
    public $category_select;
    public $category_query_run;


    public function category_table_select() {
        $this->category_query_run = mysqli_query($this->link, "SELECT* FROM category");
        return $this->category_query_run;
    }

    /** Specific category table function by id **/
    public function category_data_select($category_id) {
        $run = mysqli_query($this->link, "SELECT* FROM category WHERE ID = '$category_id' ");
        $this->category_select = mysqli_fetch_array($run);
        return $this->category_select;
    }
    
        public function category_delete($indicator){
        $query = "DELETE FROM `category` WHERE ID='$indicator' ";
        $run = mysqli_query($this->link, $query);
        if($run){
             header('location:index.php?page=front/blog/manage_category&&show_delete');
        }
    }
    
    public $success;
    public $error;
    public function category($name,$slug,$status){

        $query = "INSERT INTO category ( `Category_name`, `Slug`, `Status`) VALUES ('$name','$slug','$status')";
        $run = mysqli_query($this->link, $query);
        if($run){
           return $this->success = "<font color='lime'> Successfully Saved Your Category! </font>";
        }else{
           return $this->error = "<font color='tomato'> Already Have a Category! </font>";
        }
    }
    
    
    public $success_update;
    public $error_update;

    /** Category table data update **/
    public function category_table_data_update($indicator, $data_array) {
        $this->category_name = $data_array['Category_name'];
        $this->category_slug = $data_array['Category_slug'];

        if (isset($data_array['Category_status'])) {
            $this->category_status = '1';
        } else {
            $this->category_status = '0';
        }
        $query = "UPDATE `category` SET `Category_name`='$this->category_name',`Slug`='$this->category_slug',`Status`='$this->category_status' WHERE ID = '$indicator' ";
        $run = mysqli_query($this->link, $query);

        if ($run) {
            header('location:index.php?page=front/blog/manage_category&&show');
        } else {
            return $this->error = "<font color='tomato'> Already Have a Category! </font>";
        }
    }
}
