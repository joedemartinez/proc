<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav sidebar-menu">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="<?php echo (!empty($user['photo'])) ? 'uploads/images/'.$user['photo'] : 'assets/images/profile.jpg'; ?>" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2"><?php echo $user['full_name']; ?></span>
          <span class="text-secondary text-small"><?php echo $user['user_type']; ?></span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="dashboard.php">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item sidebar-actions" style="margin-top: 0;">
      <span class="nav-link">
        <div class="border-bottom">
          <h6 class="font-weight-normal mb-2">Categories</h6>
        </div>
      </span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="goods.php?id=<?= base64_encode(1)?>&page=<?= base64_encode('goods.php')?>">
        <span class="menu-title">Goods</span>
        <i class="mdi mdi-archive menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="works.php?id=<?= base64_encode(2)?>&page=<?= base64_encode('works.php')?>">
        <span class="menu-title">Works</span>
        <i class="mdi mdi-archive menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="normalServices.php?id=<?= base64_encode(3)?>&page=<?= base64_encode('normalServices.php')?>">
        <span class="menu-title">Construction</span>
        <i class="mdi mdi-archive menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link border-bottom" href="technical.php?id=<?= base64_encode(4)?>&page=<?= base64_encode('technical.php')?>">
        <span class="menu-title">Technical</span>
        <i class="mdi mdi-archive menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logs.php">
        <span class="menu-title">Logs</span>
        <i class="mdi mdi-playlist-check menu-icon"></i>
      </a>
    </li> 
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">System Users</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-account menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a style="padding: 0.55rem 1rem 0.75rem 2rem;" class="nav-link" href="users.php">Active Users <i class="mdi mdi-account-plus menu-icon"></i></a></li>
          <li class="nav-item"> <a style="padding: 0.55rem 1rem 0.75rem 2rem;" class="nav-link" href="deactivatedUsers.php">Deactivated Users <i class="mdi mdi-account-remove menu-icon"></i></a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="process/logout.php">
        <span class="menu-title">Sign out</span>
        <i class="mdi mdi-logout menu-icon"></i>
      </a>
    </li> 
  </ul>
</nav>
