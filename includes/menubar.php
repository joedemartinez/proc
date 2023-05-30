<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? 'assets/images/'.$user['photo'] : 'assets/images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['full_name']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <!-- <li class=""><a href="audit.php"><i class="fa fa-list"></i> <span>Data</span></a></li>
        <li class="header">MANAGE</li>
        <li>
          <li><a href="files.php"><i class="fa fa-file"></i><span> Files</span></a></li>
        </li> -->
        <?php if($password['user_type'] == 'admin'):?>
        <li class="header">SETUP</li>
        <li><a href="users.php"><i class="fa fa-users"></i><span> System Users </span></a></li>
        <li><a href="deactivatedusers.php"><i class="fa fa-toggle-off"></i><span> Deactivated Users </span></a></li>
        <li class="header">LOGS</li>
        <li><a href="logs.php"><i class="fa fa-files-o"></i> <span>Logs</span></a></li>
        <?php endif;?>
        <li class="header">Sign out</li>
        <li><a href="logout.php"><i class="fa fa-power-off"></i> <span>Sign out</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>