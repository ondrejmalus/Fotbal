<?= $this->extend('templates/layout') ?>

<?= $this->section('title') ?>Sezóna <?= esc($season['start']) ?> - <?= esc($season['finish']) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Sezóna <?= esc($season['start']) ?> - <?= esc($season['finish']) ?></h1>

<?php if (!empty($competitions)): ?>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($competitions as $comp): ?>
            <div class="col">
                <div class="card h-100 text-center">
                    <?php if(!empty($comp['logo'])): ?>
                        <img src="<?= base_url('images/sigma/' . $comp['logo']) ?>" class="card-img-top p-3" alt="<?= esc($comp['name']) ?>">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($comp['name']) ?></h5>
                        <p class="card-text">Úroveň: <?= esc($comp['level']) ?></p>
                        <a href="<?= site_url('matches/league/' . $comp['id_league_season']) ?>" class="btn btn-primary">
                            Zobrazit zápasy
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>Tato sezóna nemá žádné soutěže.</p>
<?php endif; ?>

<?= $this->endSection() ?>
