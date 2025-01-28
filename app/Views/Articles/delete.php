<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Delete Article<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Delete: <?= $article['title'] ?></h1>

<p>Are you sure?</p>

<?= form_open('article/delete/' . $article['id'] ) ?>

    <button>Yes</button>

</form>

<?= $this->endSection() ?>