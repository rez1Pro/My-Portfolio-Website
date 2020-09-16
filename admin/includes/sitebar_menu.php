      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href='index.php?page=front/dashboard' class="nav-link <?php if($final_link == 'index.php?page=front/dashboard'){echo 'active';} ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p> 
                Dashboard
              </p>
            </a>
          </li>
<!-- About menubar section --->
<?php require_once "includes/about.php" ;?>
<!-- About menubar section --->

<!-- About menubar section --->
<?php require_once "includes/blog.php" ;?>
<!-- About menubar section --->

      </nav>