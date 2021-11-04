
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>assets/index3.html" class="brand-link">
      <img src="<?=base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">NOBAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-2 pb-2 mb-2 d-flex">
        <div class="image">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <li class="nav-item">
            <a href="<?=site_url('dashboard')?>" class="nav-link">
              <i class="nav-icon fa fa-suitcase"></i>
              <p>Dashboard</p>
            </a>
          </li>
      <li class="nav-item">
            <a href="<?=site_url('member')?>" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>Member</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('pertandingan')?>" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Pertandingan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url()?>assets/index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>assets/index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>assets/index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('master')?>" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Master
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('team')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('stadion')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>stadion</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('posisi')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>posisi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('pemain')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>pemain</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('pengaturan')?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               Pengaturan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

<!-- ./wrapper -->