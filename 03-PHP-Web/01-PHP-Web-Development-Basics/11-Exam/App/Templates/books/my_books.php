<?php /** @var BookDTO[] $data */

use App\DTO\BookDTO; ?>

<h1>My books</h1>
<a href="add_book.php">Add new book</a> | <a href="all_books.php">All Books</a> | <a href="profile.php">My profile</a> | <a href="logout.php">logout</a> <br /> <br />

<table class="table table-bordered">
    <thead>
    <tr>
        <td>Title</td>
        <td>Author</td>
        <td>Genre</td>
        <td>Edit</td>
        <td>Delete</td>
        <td>Details</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $book): ?>
        <tr>
            <td>
                <?= $book->getTitle() ?>
            </td>
            <td>
                <?= $book->getAuthor() ?>
            </td>
            <td>
                <?= $book->getGenreId()->getName() ?>
            </td>
            <td>
                <a href="edit.php?book_id=<?= $book->getBookId() ?>">edit book</a>
            </td>
            <td>
                <a href="delete.php?book_id=<?= $book->getBookId() ?>">delete book</a>
            </td>
            <td>
                <a href="details.php?book_id=<?= $book->getBookId() ?>">Details</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
