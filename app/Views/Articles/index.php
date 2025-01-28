<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?> Articles <?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1>Articles</h1>

    <a href="<?= url_to('articles/add') ?>">Add New</a>

    <?php foreach ($articles as $article) : ?>
        <article>
            <h3>
                <a href="<?= site_url( 'article/' . $article->id ) ?>">
                    <?= esc( $article->title ) ?>
                </a>
            </h3>
            <p><?= esc( $article->description ) ?></p>
        </article>
    <?php endforeach; ?>

<?= $this->endSection() ?>

