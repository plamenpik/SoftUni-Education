<?php /** @var \App\DTO\EditDTO $data */ ?>

<h1>ADD NEW BOOK</h1>
<a href="profile.php">My profile</a>
<form method="post" class="form-horizontal">
    <div class="form-group">
        Book Title: <label>
            <input type="text" class="form-control" name="title" />
        </label>
    </div>
    <div class="form-group">
        Book Author: <label>
            <input type="text" class="form-control" name="author" />
        </label>
    </div>
    <div class="form-group">
        Description: <label>
            <textarea name="description" class="form-control"></textarea>
        </label>
    </div>
    <div class="form-group">
        Image URL: <label>
            <input type="text" class="form-control" name="image" />
        </label>
    </div>
    <div class="form-group">
        Genre: <label>
            <select name="genre_id" class="form-control">
                <?php foreach ($data->getGenre() as $genre): ?>
                    <option value="<?=$genre->getGenreId(); ?>"><?= $genre->getName(); ?></option>
                <?php endforeach; ?>
            </select>
        </label>
    </div class="form-group" class="form-control">
    <div>
        <input type="submit" name="add" value="Add" />
    </div>
</form>