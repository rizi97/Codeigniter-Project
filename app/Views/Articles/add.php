<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?> Add Article <?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Add Article</h1>

<?php if( session()->has('errors') ) : ?>
    
    <ul>
        <?php foreach( session()->get('errors') as $error ) : ?>

            <li><?= $error ?></li>

        <?php endforeach ?>
    </ul>

<?php endif; ?>


<?= form_open('articles/create') ?>

    <?= $this->include('Articles/form') ?>

</form>

<?= $this->endSection() ?>