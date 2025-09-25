<!doctype html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <title><?= $this->renderSection('title') ?> | Fotbal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('vendor/assets/bootstrap/bootstrap.min.css') ?>">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= base_url('vendor/assets/fontawesome/css/all.min.css') ?>">
</head>
<body>

    <!-- Navbar -->
    <?= $this->include('templates/navbar') ?>

    <main class="container mt-4">
        <?= $this->renderSection('content') ?>
    </main>

</body>
</html>
