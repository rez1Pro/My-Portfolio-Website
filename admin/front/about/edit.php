<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><span  style="font-size:20px;" > <i class= "fas fa-tachometer-alt" ></i>  <a href="index.php?page=front/dashboard"> Dashboard </span></a></li>
        <li class="breadcrumb-item active" aria-current="page"> <span style="font-size:20px;"><i class= "fas fa-address-card" ></i> About </span> </li>
    </ol>
</nav>

<section class="content" >
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Update About Section</h3>
        </div>  
        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="card-body">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6"> 

                            <div class="form-group row">
                                <label for="inputEmail0" class="col-sm-2 col-form-label">Title :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Title" class="form-control" id="inputEmail0" required="" placeholder="PERSONAL INFORMATION">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail1" class="col-sm-2 col-form-label">Name :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Name" required="" class="form-control" id="inputEmail1" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail2" class="col-sm-2 col-form-label">Age :</label>
                                <div class="col-sm-10">
                                    <input type="number" name="Age" required="" class="form-control" id="inputEmail22" placeholder="Your Age">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Phone :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Phone" required="" class="form-control" id="inputEmail3" placeholder="Your Phone Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail4" class="col-sm-2 col-form-label">Email :</label>
                                <div class="col-sm-10">
                                    <input type="email" name="Email" required="" class="form-control" id="inputEmail4" placeholder="Your E-mail">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail5" class="col-sm-2 col-form-label">Address :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Address" required="" class="form-control" id="inputEmail5" placeholder="Your Address">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"> 
                            <div class="form-group row">
                                <label class = "col-sm-2" >My Story</label>
                                <textarea class=" col-sm-10 form-control" name="Story" required="" rows="9" placeholder="Enter Your Story..."></textarea>
                            </div>
                            <div class="row container-fluid col-sm-12">
                                <div class="form-group col-sm-4" style="margin: 0 0 0 65px;" >                                
                                    <div class="btn btn-default btn-file">
                                        <i class="fa fa-paperclip"></i> Attachment
                                        <input type="file" name="Photo" required="" name="attachment">
                                    </div>
                                    <p class="help-block">Upload a Image</p>
                                </div>
                                <div class="form-group col-sm-4" style="margin: 0 0 0 83px;" >                                
                                    <div class="btn btn-default btn-file">
                                        <i class="fa fa-paperclip"></i> Attachment
                                        <input type="file" name="CV" name="attachment">
                                    </div>
                                    <p class="help-block">Upload a CV</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 row">
                <div class="col-sm-4"> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class = "fab fa-facebook-f" ></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="https://facebook.com/">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class = "fab fa-twitter" ></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="https://twitter.com/">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class = "fab fa-google-plus-g" ></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="https://google.com/">
                    </div><div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class = "fab fa-linkedin-in" ></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="https://linkedin.com/">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class = "fab fa-pinterest-p" ></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="https://pinterest.com/">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class = "fab fa-reddit-alien" ></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="https://reddit.com/">
                    </div>
                </div>
            </div>
            <div class="float-right" > 
                <a href="view/admin/front/index.php?page=about/profile" class= "btn btn-primary" > Profile </a>
                <input class= "btn btn-success" type="submit" value="Success" name="submit" />
            </div>
            <br />
        </form>
    </div>
</section>