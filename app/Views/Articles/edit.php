<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?> Edit Article <?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Edit Article</h1>

<?php if( session()->has('errors') ) : ?>
    
    <ul>
        <?php foreach( session()->get('errors') as $error ) : ?>

            <li><?= $error ?></li>

        <?php endforeach ?>
    </ul>

<?php endif; ?>


<?= form_open('articles/update/' . $article['id']) ?>

    <label for="title">Title</label>
    <input type="text" id="title" name="title" value="<?= old('title', $article['title']) ?>">

    <label for="description">Description</label>
    <textarea id="description" name="description"><?= old('description', $article['description']) ?></textarea>

    <input type="submit" value="Update">

</form>

<?= $this->endSection() ?>