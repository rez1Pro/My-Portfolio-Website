<?php

namespace App\src;

class Post extends Database {

    /** This is the function of insert post * */
    public $error;
    public $err_img;

    public function insert_post($data) {
        $title = mysqli_real_escape_string($this->link, $data['Title']);
        $cat_id = mysqli_real_escape_string($this->link, $data['Category_id']);
        $post = mysqli_real_escape_string($this->link, $data['Content']);
        $author = mysqli_real_escape_string($this->link, $_SESSION['username']);
        $tag = mysqli_real_escape_string($this->link, $data['Tags']);
        $status = '1';
        $img_name = $_FILES['attachment']['name'];
        $img_tmp = $_FILES['attachment']['tmp_name'];
        $up_folder = "images/";
        $extension = pathinfo($img_name, PATHINFO_EXTENSION);


        if (!getimagesize($img_tmp)) {
            $this->err_img = "<font color='tomato'> Sorry, Only  JPG , JPEG , PNG , GIF Files are Allowed. </font>";
        } else {
            $thumbnail = "image-" . rand(0, 999) . "." . $extension;
        }



        $query = "INSERT INTO `post`(`Category_id`, `Title`, `Content`, `Author`, `Tags`,`Thumbnail`,`Status`) VALUES ('$cat_id','$title','$post','$author','$tag','$thumbnail','$status')";
        $run = mysqli_query($this->link, $query);
        if ($run) {
            move_uploaded_file($img_tmp, $up_folder . $thumbnail);
            header('location:index.php?page=front/blog/manage_post&&success');
        } else {
            return $this->error = "<font color='tomato'> Already Have The Post! </font>";
        }
    }

    /** this is the function of manage post select and show in table* */
    public $run;

    public function manage_post() {

        $this->run = mysqli_query($this->link, "SELECT* FROM post order by Update_Date desc");
        return $this->run;
    }

    /** This is the function of Update post status * */
    public function update_post_status($id, $data) {
        if ($data == 'approved') {
            $query = "UPDATE `post` SET `Status`='0' WHERE ID ='$id' ";
            $run = mysqli_query($this->link, $query);
            if ($run) {
                header('location:index.php?page=front/blog/manage_post&unpublished');
            }
        } else {
            $query = "UPDATE `post` SET `Status`='1' WHERE ID ='$id' ";
            $run = mysqli_query($this->link, $query);
            if ($run) {
                header('location:index.php?page=front/blog/manage_post&published');
            }
        }
    }

    /** This is the function of Post update system * */
    public $post_select;

    public function select_post($id) {
        $query = "SELECT * FROM `post` WHERE ID = '$id' ";
        $run = mysqli_query($this->link, $query);
        $this->post_select = mysqli_fetch_array($run);
        return $this->post_select;
    }

    /** This is the function of Delete system * */
    public $del_mgs_success;
    public $del_mgs_error;

    public function delete_post($del_id, $del_img) {

        $query = "DELETE FROM `post` WHERE ID = '$del_id'";
        $run = mysqli_query($this->link, $query);
        if ($run) {
            $this->del_mgs_success = "Data successfully Deleted!!!";
            unlink("images/" . $del_img);
        } else {
            $this->del_mgs_error = "Data Failed to Delete!!!";
        }
    }

    /** this is the function of Update data * */
    public function update_post($data, $id) {
        $title = mysqli_real_escape_string($this->link, $data['Title']);
        $cat_id = mysqli_real_escape_string($this->link, $data['Category_id']);
        $post = mysqli_real_escape_string($this->link, $data['Content']);
        $author = mysqli_real_escape_string($this->link, $data['Author']);
        $tag = mysqli_real_escape_string($this->link, $data['Tags']);
        $img_name = $_FILES['attachment']['name'];
        $img_tmp = $_FILES['attachment']['tmp_name'];

        $up_folder = "images/";
        $extension = pathinfo($img_name, PATHINFO_EXTENSION);

        if (!empty($img_name)) {
            if (getimagesize($img_tmp)) {
                $thumbnail = "image-" . rand(0, 999) . "." . $extension;
                move_uploaded_file($img_tmp, $up_folder . $thumbnail);
                unlink("images/".$this->post_select['Thumbnail']);
            } else {
                $this->err_img = "<font color='tomato'> Sorry, Only  JPG , JPEG , PNG , GIF Files are Allowed. </font>";
            }
        } else {
            $thumbnail = $this->post_select['Thumbnail'];
        }

        $query = "UPDATE `post` SET `Category_id`='$cat_id',`Title`='$title',`Content`='$post',`Author`='$author',`Tags`='$tag',`Thumbnail`='$thumbnail' WHERE ID = '$id'";
        $run = mysqli_query($this->link, $query);
        if ($run) {
            header('location:index.php?page=front/blog/manage_post&edit_success');
        }
    }

}
