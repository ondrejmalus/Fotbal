<?= $this->extend('templates/layout') ?>

<?= $this->section('title') ?>Detail zápasu<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Detail zápasu</h1>

<div class="card mb-4">
    <div class="card-body text-center">
        <div class="d-flex justify-content-center align-items-center mb-3">
            <?php if($home && $home['logo']): ?>
                <img src="<?= base_url('images/sigma/' . $home['logo']) ?>" alt="<?= esc($home['name']) ?>" style="height:50px;" class="me-3">
            <?php endif; ?>
            <h3 class="mx-3"><?= esc($game['goals_home']) ?> : <?= esc($game['goals_away']) ?></h3>
            <?php if($away && $away['logo']): ?>
                <img src="<?= base_url('images/sigma/' . $away['logo']) ?>" alt="<?= esc($away['name']) ?>" style="height:50px;" class="ms-3">
            <?php endif; ?>
        </div>
        <div class="d-flex justify-content-center mb-2">
            <strong><?= esc($home['name'] ?? $game['home']) ?></strong> vs <strong><?= esc($away['name'] ?? $game['away']) ?></strong>
        </div>
        <p>
            Datum: <?= esc($game['date']) ?><br>
            Čas: <?= $game['time'] ?? 'není známý' ?><br>
            Stadion: <?= esc($game['stadium']) ?><br>
            Počet diváků: <?= esc($game['attendance']) ?><br>
            Poločasový výsledek: <?= esc($game['ht_goals_home']) ?> : <?= esc($game['ht_goals_away']) ?>
        </p>
    </div>
</div>

<a href="<?= site_url('matches/league/' . $game['id_league_season']) ?>" class="btn btn-secondary">Zpět na zápasy</a>

<?= $this->endSection() ?>
