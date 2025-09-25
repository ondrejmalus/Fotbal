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
        <?php foreach ($navbar as $item): ?>
          <?php if ($item['position'] === 'left' && $item['parent_id'] === null): ?>
            <li class="nav-item">
              <a class="nav-link px-3" href="<?= site_url($item['url']) ?>">
                <i class="<?= $item['icon'] ?> me-1"></i>
                <?= esc($item['title']) ?>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>

      <!-- pravá část -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php foreach ($navbar as $item): ?>
          <?php if ($item['position'] === 'right' && $item['parent_id'] === null): ?>
            <?php 
              $children = array_filter($navbar, fn($child) => $child['parent_id'] == $item['id']);
            ?>
            <?php if ($children): ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle px-3" href="#" id="dropdown<?= $item['id'] ?>" 
                   role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="<?= $item['icon'] ?> me-1"></i>
                  <?= esc($item['title']) ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown<?= $item['id'] ?>">
                  <?php foreach ($children as $child): ?>
                    <li>
                      <a class="dropdown-item" href="<?= site_url($child['url']) ?>">
                        <i class="<?= $child['icon'] ?> me-1"></i>
                        <?= esc($child['title']) ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </li>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link px-3" href="<?= site_url($item['url']) ?>">
                  <i class="<?= $item['icon'] ?> me-1"></i>
                  <?= esc($item['title']) ?>
                </a>
              </li>
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>
