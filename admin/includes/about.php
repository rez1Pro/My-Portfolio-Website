          <li class="nav-item has-treeview">
            <a href="index.php?page=front/about/edit" class="nav-link <?php if($final_link == 'index.php?page=front/about/edit' || $final_link == 'index.php?page=front/about/profile' ){echo 'active';} ?>">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=front/about/edit" class="nav-link ">
                  <i class="fas fa-edit"></i>
                  <p> Edit</p>
                </a>
              </li>
	      <li class="nav-item">
                <a href="index.php?page=front/about/profile" class="nav-link">
                  <i class="fas fa-user"></i>
                  <p> Profile</p>
                </a>
              </li>	 
            </ul>
          </li>