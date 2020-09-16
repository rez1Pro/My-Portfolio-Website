  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- /Left navbar links -->

    <!-- SEARCH FORM -->
    <!-- /SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
<?php require_once 'includes/message.php' ?>
      <!-- Message End -->
          </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
      <!-- Notifications Dropdown Menu -->
  <?php require_once 'includes/notification.php' ?>
       <!-- /Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="index.php?page=front/dashboard" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php" role="button">
          <i class="fas fa-power-off"></i>
        </a>
      </li>
    </ul>
  </nav>