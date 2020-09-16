          <li class="nav-item has-treeview">
            <a href="index.php?page=front/blog/add_category" class="nav-link <?php if($final_link == 'index.php?page=front/blog/add_category' || $final_link == 'index.php?page=front/blog/manage_category' || $final_link == 'index.php?page=front/blog/manage_post' || $final_link == 'index.php?page=front/blog/add_post'|| $final_link == 'index.php?page=front/blog/update_post' ){echo 'active';} ?> ">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=front/blog/add_category" class="nav-link">
                  <i class="fas fa-tag"></i>
                  <p> Add Category</p>
                </a>
              </li>
	      <li class="nav-item">
                <a href="index.php?page=front/blog/manage_category" class="nav-link">
                  <i class="fas fa-list-alt"></i>
                  <p> Manage Category</p>
                </a>
              </li>	 
              	  <li class="nav-item">
                <a href="index.php?page=front/blog/add_post" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p> Add Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=front/blog/manage_post" class="nav-link">
                  <i class="fas fa-tasks"></i>
                  <p> Manage Post</p>
                </a>
              </li>
            </ul>
          </li>