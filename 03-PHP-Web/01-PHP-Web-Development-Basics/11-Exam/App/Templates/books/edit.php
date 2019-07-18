<?php /** @var \App\DTO\EditDTO $data */ ?>

<h1>EDIT BOOK</h1>
<a href="profile.php">My profile</a>
<form method="post">
    <div>
        Book Title: <label>
            <input type="text" name="title" value="<?= $data->getBook()->getTitle() ?>" />
        </label>
    </div>
    <div>
        Book Author: <label>
            <input type="text" name="author" value="<?= $data->getBook()->getAuthor() ?>" />
        </label>
    </div>
    <div>
        Description: <label>
            <textarea name="description"><?= $data->getBook()->getDescription() ?></textarea>
        </label>
    </div>
    <div>
        Image URL: <label>
            <input type="text" name="image" value="<?= $data->getBook()->getImage() ?>" />
        </label>
    </div>
    <div>
        Genre: <label>
            <select name="genre_id">
                <?php foreach ($data->getGenre() as $genre): ?>
                <?php if ($data->getBook()->getGenreId()->getGenreId() === $genre->getGenreId()) : ?>
                    <option selected="selected" value="<?=$genre->getGenreId(); ?>"><?= $genre->getName(); ?></option>
                <?php else: ?>
                        <option value="<?= $genre->getGenreId(); ?>"><?= $genre->getName(); ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </label>
    </div>
    <div>
        <lable>
            <img src="<?= $data->getBook()->getImage() ?>">
        </lable>
    </div>
    <div>
        <input type="submit" name="edit" value="Edit" />
    </div>
</form>