<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?> Articles <?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1>Articles</h1>

    <?php foreach ($articles as $article) : ?>
        <article>
            <h3><?= $article['title'] ?></h3>
            <p><?= $article['description'] ?></p>
        </article>
    <?php endforeach; ?>

<?= $this->endSection() ?>

