<?php /** @var \App\DTO\EditDTO $data */ ?>

<?php foreach ($errors as $error): ?>
    <p style="color: red"><?= $error ?></p>
<?php endforeach; ?>

<h1>EDIT ITEM</h1>
<a href="profile.php">My profile</a>
<form method="post">
    <div>
        Title: <label>
            <input type="text" name="title" value="<?= $data->getItem()->getTitle() ?>" />
        </label>
    </div>
    <div>
        Price: <label>
            <input type="text" name="price" value="<?= $data->getItem()->getPrice() ?>" />
        </label>
    </div>
    <div>
        Category: <label>
            <select name="category_id">
                <?php foreach ($data->getCategory() as $category): ?>
                    <?php if ($data->getItem()->getCategory()->getCategoryId() === $category->getCategoryId()) : ?>
                        <option selected="selected" value="<?=$category->getCategoryId(); ?>"><?= $category->getName(); ?></option>
                    <?php else: ?>
                        <option value="<?= $category->getCategoryId(); ?>"><?= $category->getName(); ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </label>
    </div>
    <div>
        Description: <label>
            <textarea name="description"><?= $data->getItem()->getDescription() ?></textarea>
        </label>
    </div>
    <div>
        Image URL: <label>
            <input type="text" name="image" value="<?= $data->getItem()->getImage() ?>" />
        </label>
    </div>
    <div>
        <lable>
            <img src="<?= $data->getItem()->getImage() ?>">
        </lable>
    </div>
    <div>
        <input type="submit" name="edit" value="Edit" />
    </div>
</form>