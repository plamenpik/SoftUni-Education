<?php /** @var \App\DTO\UserDTO $data */ ?>

<?php foreach ($errors as $error): ?>
    <p style="color: red"><?= $error ?></p>
<?php endforeach; ?>

<h1>REGISTER NEW USER</h1>

<form method="POST">
    <div>
        <label>
           Username: <input type="text" value="<?= $data != null ? $data->getUsername() : "" ?>" name="username">
        </label>
    </div>

    <div>
        <label>
            Password: <input type="password" value="" name="password">
        </label>
    </div>

    <div>
        <label>
            Confirm Password: <input type="password" name="confirm_password">
        </label>
    </div>

    <div>
        <label>
            Full Name: <input type="text" value="<?= $data != null ? $data->getFullName() : "" ?>" name="full_name">
        </label>
    </div>

    <div>
        <label>
            Born On: <input type="date" name="born_on">
        </label>
    </div>

    <div>
        <input type="submit" name="register" value="Register!">
    </div>

</form>