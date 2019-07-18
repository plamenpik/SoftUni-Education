<?php /** @var \App\DTO\ItemDTO[] $data */

use App\DTO\ItemDTO; ?>

<h1>All ITEMS</h1>
<a href="add_item.php">Add new Item</a> | <a href="profile.php">My profile</a> | <a href="logout.php">logout</a> <br /> <br />

<table border="1">
    <thead>
    <tr>
        <td>Title</td>
        <td>Category</td>
        <td>Price</td>
        <td>Username</td>
        <td>Location</td>
        <td>Phone</td>
        <td>Details</td>
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
                <?= $item->getAuthor()->getUsername() ?>
            </td>
            <td>
                <?= $item->getAuthor()->getLocation() ?>
            </td>
            <td>
                <?= $item->getAuthor()->getPhone() ?>
            </td>
            <td>
                <a href="details.php?item_id=<?= $item->getItemId() ?>">Details</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
