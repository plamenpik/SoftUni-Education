<?php /** @var \App\DTO\ItemDTO[] $data */

use App\DTO\ItemDTO; ?>

<h1>MY ITEMS</h1>
<a href="add_item.php">Add new item</a> | <a href="profile.php">My profile</a> | <a href="logout.php">logout</a> <br /> <br />

<table border="1">
    <thead>
    <tr>
        <td>Title</td>
        <td>Category</td>
        <td>Price</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $item): ?>
        <tr>
            <td>
                <?= $item->getTitle() ?>
            </td>
            <td>
                <?= $item->getCategory()->getName() ?>
            </td>
            <td>
                <?= $item->getPrice() ?>
            </td>
            <td>
                <a href="edit.php?item_id=<?= $item->getItemId() ?>">Edit</a>
            </td>
            <td>
                <a href="delete.php?item_id=<?= $item->getItemId() ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
