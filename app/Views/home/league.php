<?= $this->extend('templates/layout') ?>

<?= $this->section('title') ?>Zápasy soutěže<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Zápasy soutěže</h1>

<?php if (!empty($rounds)): ?>
    <?php foreach ($rounds as $round => $games): ?>
        <h3 class="mt-4">Kolo <?= esc($round) ?></h3>
        <div class="list-group">
            <?php foreach ($games as $game): 
                $home = $teams_map[$game['home_tm']] ?? ['name' => $game['home'], 'logo' => null];
                $away = $teams_map[$game['away_tm']] ?? ['name' => $game['away'], 'logo' => null];
            ?>
                <a href="<?= site_url('matches/view/' . $game['id']) ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <span>
                        <?php if($home['logo']): ?>
                            <img src="<?= base_url('images/sigma/' . $home['logo']) ?>" alt="<?= esc($home['name']) ?>" style="height:24px;" class="me-1">
                        <?php endif; ?>
                        <?= esc($home['name']) ?> vs 
                        <?php if($away['logo']): ?>
                            <img src="<?= base_url('images/sigma/' . $away['logo']) ?>" alt="<?= esc($away['name']) ?>" style="height:24px;" class="me-1">
                        <?php endif; ?>
                        <?= esc($away['name']) ?>
                    </span>
                    <span><?= esc($game['goals_home']) ?> : <?= esc($game['goals_away']) ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Žádné zápasy k zobrazení.</p>
<?php endif; ?>

<?= $this->endSection() ?>
