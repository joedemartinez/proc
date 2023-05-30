<!-- loader -->
<div class="loader" id="loader"></div>

<header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MELR</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?php echo 'assets/images/icon.png'; ?>" class="user-image" alt="Logo" style="height:40px"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span style="padding: 15px"><?php date_default_timezone_set("GMT"); echo date('D, M-j-Y h:i:s a');?></span>

      </a>
      

      <div class="navbar-custom-menu" title="Profile">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown-toggle">
            <?php if ($password['user_type'] == 'user') :?>
              <a>User Dashboard</a>
            <?php elseif ($password['user_type'] == 'admin') :
            ?>
              <a>Admin Dashboard</a>
            <?php else :?>
              <a>Dashboard</a>
            <?php endif ;?>
          </li>
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo (!empty($user['photo'])) ? 'assets/images/'.$user['photo'] : 'assets/images/profile.jpg'; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user['full_name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo (!empty($user['photo'])) ? 'assets/images/'.$user['photo'] : 'assets/images/profile.jpg'; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $user['full_name']; ?>
                  <small>Member since <?php echo $user['CreatedOn']; ?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" title="Profile" id="admin_profile">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php include 'includes/profile_modal.php'; ?>