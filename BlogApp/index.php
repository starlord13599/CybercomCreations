<?php
// phpcs:disable
require('./resources/header.php');
require('check.php')
?>


<form method="POST" action="index.php">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email">
        <span class="help-block"><?php echo $username_err ?? '' ?></span>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
        <span class="help-block"><?php echo $password_err ?? '' ?></span>
    </div>

    <button type="submit" class="btn btn-primary">Log In</button>
    <a class="btn btn-primary" href="./register/register.php">Register</a>
</form>

<?php require('./resources/footer.php') ?>