<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-uppercase" href="<?= site_url('/') ?>">
      <i class="fa-solid fa-futbol me-2"></i>Fotbal
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

      <!-- levá část -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link px-3 <?= uri_string() === '' ? 'active' : '' ?>" href="<?= site_url('/') ?>">
            <i class="fa-solid fa-house me-1"></i>Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 <?= uri_string() === 'season' ? 'active' : '' ?>" href="<?= site_url('season') ?>">
            <i class="fa-solid fa-calendar-days me-1"></i>Sezóny
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 <?= uri_string() === 'team' ? 'active' : '' ?>" href="<?= site_url('team') ?>">
            <i class="fa-solid fa-people-group me-1"></i>Týmy
          </a>
        </li>
      </ul>

      <!-- pravá část -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <!-- dropdown Admin -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-3 <?= str_starts_with(uri_string(), 'admin') ? 'active' : '' ?>"
             href="#" id="dropdownAdmin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-gear me-1"></i>Administrace
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAdmin">
            <li>
              <a class="dropdown-item" href="<?= site_url('admin') ?>">
                <i class="fa-solid fa-newspaper me-1"></i>Správa článků
              </a>
            </li>
          </ul>
        </li>

        <!-- logout -->
        <li class="nav-item">
          <a class="nav-link px-3 <?= uri_string() === 'logout' ? 'active' : '' ?>" href="<?= site_url('logout') ?>">
            <i class="fa-solid fa-right-from-bracket me-1"></i>Odhlásit
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
