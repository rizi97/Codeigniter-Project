<label for="title">Title</label>
<input type="text" id="title" name="title" value="<?= old('title', $article->title ) ?>">

<label for="description">Description</label>
<textarea id="description" name="description"><?= old('description', $article->description ) ?></textarea>

<input type="submit" value="Submit">