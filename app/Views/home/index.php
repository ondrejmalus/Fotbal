<?= $this->extend('templates/layout') ?>

<?= $this->section('title') ?>Home<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Top články</h1>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <?php if (!empty($articles)): ?>
        <?php foreach ($articles as $article): ?>
            <div class="col">
                <div class="card h-100">
                    <?php 
                        $imgPath = FCPATH . 'public/images/sigma/' . $article['photo'];
                        if (!empty($article['photo']) && file_exists($imgPath)): 
                    ?>
                        <img src="<?= base_url('public/images/sigma/' . $article['photo']) ?>" class="card-img-top" alt="Obrázek článku">
                    <?php else: ?>
                        <img src="<?= base_url('public/images/sigma/default.png') ?>" class="card-img-top" alt="Výchozí obrázek">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?= site_url('article/' . $article['link']) ?>">
                                <?= esc($article['title']) ?>
                            </a>
                        </h5>
                    </div>
                    <div class="card-footer text-muted">
                        <?= date('d.m.Y', strtotime($article['date'])) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Žádné články k zobrazení.</p>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>
