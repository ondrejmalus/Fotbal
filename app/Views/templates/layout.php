<!doctype html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <title><?= $this->renderSection('title') ?> | Fotbal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QG7z+9X+MzFvHcCQ+g3f5pOy5GVx7W5sZ5Q+60sFZd+f1wRaXk0iQ3yZ2wK5x+7G" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('public/assets/bootstrap/bootstrap.min.css') ?>">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= base_url('public/assets/fontawesome/css/all.min.css') ?>">
</head>
<body>

    <!-- Navbar -->
    <?= $this->include('templates/navbar') ?>

    <main class="container mt-4">
        <?= $this->renderSection('content') ?>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoF/efz8jQb1F5ljF5JkDF+G5m4q2V1z3JZxhZ+IhZ+FJGp" crossorigin="anonymous"></script>
</body>
</html>
