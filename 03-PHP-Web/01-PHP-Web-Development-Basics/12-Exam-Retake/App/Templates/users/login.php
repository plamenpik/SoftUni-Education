<?php /** @var \App\DTO\UserDTO $data */ ?>

<h1>LOGIN</h1>

<?php foreach ($errors as $error): ?>
    <?= $error ?>
<?php endforeach; ?>

<!--<a href="index.php">Index</a> <br /> <br />-->
<form method="POST">
    <div>
        <label>
            Username: <input value="<?= $data != null ? $data->getUsername() : "" ?>" type="text" name="username">
        </label>
    </div>

    <div>
        <label>
            Password: <input value="<?= $data != null ? $data->getPassword() : "" ?>" type="password" name="password">
        </label>
    </div>

    <div>
        <input type="submit" name="login" value="Login Now!">
    </div>
</form>