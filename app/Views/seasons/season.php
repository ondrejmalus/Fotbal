<?= $this->extend('templates/layout') ?>

<?= $this->section('title') ?>Sezóny<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Sezóny</h1>

<?php if (!empty($seasons)): ?>
    <ul class="list-group">
        <?php foreach ($seasons as $s): ?>
            <li class="list-group-item">
            <a href="<?= site_url('sezona/' . $s['id']) ?>">
                    Sezóna <?= esc($s['start']) ?> - <?= esc($s['finish']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Žádné sezóny nenalezeny.</p>
<?php endif; ?>

<?= $this->endSection() ?>
