<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link text-center">
    <span class="brand-text font-weight-light"><b>Survei</b> Digital</span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="./uploads/img/<?= $this->session->foto ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $this->session->nama ?></a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= base_url() ?>admin-report-personalize.html" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>Personalize</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>admin-report-konten-kreator.html" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>Konten Kreator</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>