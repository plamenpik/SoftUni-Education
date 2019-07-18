<?php /** @var \App\DTO\UserDTO $data */ ?>

<?php foreach ($errors as $error): ?>
    <p style="color: red"><?= $error ?></p>
<?php endforeach; ?>

<h1>Login</h1>
<a href="index.php">Index</a> <br /> <br />
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