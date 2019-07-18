<?php /** @var \App\DTO\BookDTO $data */ ?>

<h1>VIEW BOOK</h1>
<a href="profile.php">My Profile</a><br /><br />
<b>Book Title: </b><?= $data->getTitle() ?><br /><br />
<b>Book Author: </b><?= $data->getAuthor() ?><br /><br />
<b>Description: </b><?= $data->getDescription() ?><br /><br />
<b>Genre: </b><?= $data->getGenreId()->getName() ?><br /><br />
<img src="<?= $data->getImage()?>"><br /><br />