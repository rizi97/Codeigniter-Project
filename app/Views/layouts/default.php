<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <?php if ( session()->has('message') ) : ?>

        <p><?= session('message') ?></p>

    <?php endif; ?>

    <?= $this->include('inc/navigation') ?>

    <?= $this->renderSection('content') ?>

</body>
</html>