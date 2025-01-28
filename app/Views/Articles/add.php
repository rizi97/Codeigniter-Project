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

    <label for="title">Title</label>
    <input type="text" id="title" name="title" value="<?= old('title') ?>">

    <label for="description">Description</label>
    <textarea id="description" name="description"><?= old('description') ?></textarea>

    <input type="submit" value="Submit">

</form>

<?= $this->endSection() ?>