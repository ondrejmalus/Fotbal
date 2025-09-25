<?= $this->extend('templates/layout') ?>

<?= $this->section('title') ?>Home<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <h1 class="mb-4">Top články</h1>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($articles as $article): ?>
      <div class="col">
        <div class="card h-100">
          <?php if ($article['photo']): ?>
            <img src="<?= base_url('uploads/' . $article['photo']) ?>" class="card-img-top" alt="Obrázek článku">
          <?php endif; ?>
          <div class="card-body">
            <h5 class="card-title">
              <a href="<?= site_url('article/' . $article['link']) ?>">
                <?= esc($article['link']) ?>
              </a>
            </h5>
            <p class="card-text">
              <?= character_limiter(strip_tags($article['text']), 120) ?>
            </p>
          </div>
          <div class="card-footer text-muted">
            <?= date('d.m.Y', strtotime($article['date'])) ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
<?= $this->endSection() ?>
