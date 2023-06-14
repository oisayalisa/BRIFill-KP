<?php
$user = $this->session->userdata('user');

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?php echo base_url(); ?>assets/adminlte3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">BRIFill</span>
  </a>


  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item" id="dashboarditem">
          <a href="Dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <?php if ($user['level'] == 1) : ?>
          <li class="nav-item" id="datauseritem">
            <a href="C_user" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data User
              </p>
            </a>
          </li>
        <?php endif; ?>
        <?php if ($user['level'] == 2) : ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item  menu-open">
                <a href="C_jamkrindo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Klaim</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="C_berkas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Indexing Berkas</p>
                </a>
              </li>
            </ul>
          </li>
        <?php endif; ?>
        <?php if ($user['level'] == 3) : ?>
          <li class="nav-item" id="klaimitem">
            <a href="C_klaim" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Data Surat Klaim
              </p>
            </a>
          </li>
        <?php endif; ?>
        <li class="nav-item">
          <hr style="border-top: 1px solid #808080; margin-top: 10px; margin-bottom: 10px;">
        </li>
        <li class="nav-item pl-1">
          <a href="<?php echo site_url('auth/logout'); ?>" class="nav-link">
            <i class="fas fa-sign-out-alt mr-2"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

