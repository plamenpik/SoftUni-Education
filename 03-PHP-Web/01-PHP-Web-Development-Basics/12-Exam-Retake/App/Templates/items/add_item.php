<?php /** @var \App\DTO\EditDTO $data */ ?>

<?php foreach ($errors as $error): ?>
    <p style="color: red"><?= $error ?></p>
<?php endforeach; ?>

<h1>ADD ITEM</h1>
<a href="profile.php">My profile</a>
<form method="post">
    <div>
        Title: <label>
            <input type="text" name="title" />
        </label>
    </div>
    <div>
        Price: <label>
            <input type="text" name="price" />
        </label>
    </div>
    <div>
        Category: <label>
            <select name="category_id">
                <?php foreach ($data->getCategory() as $category): ?>
                    <option value="<?=$category->getCategoryId(); ?>"><?= $category->getName(); ?></option>
                <?php endforeach; ?>
            </select>
        </label>
    </div>
    <div>
        Description: <label>
            <textarea name="description" ></textarea>
        </label>
    </div>
    <div>
        Image URL: <label>
            <input type="text" name="image"  />
        </label>
    </div>
    <div>
        <input type="submit" name="add" value="Add" />
    </div>
</form>