<!DOCTYPE html>
<html lang="en">
<?php
// phpcs:disable
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <?php
    // phpcs:disable
    $email_error = $password_error = $error = '';
    $success = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (empty($email) && empty($password)) {
            $error = 'please enter the below details';
        } else if ($email != 'deep.patel9593@gmail.com') {
            $email_error = 'Invalid Email';
        } else if ($password != 'deep@138') {
            $password_error = 'Invalid password';
        } else {
            $success = "YOu are logged in";
        }
    }
    ?>
    <form action="index.php" method="post" class="cont form-control">
        <h1 class="text-center">Sign Up form</h1>
        <p class="error"><?php echo $error ?></p>

        <label for="email" class="form-label m-2">Email</label>
        <input type="email" name="email" class="form-control" required>
        <p class="error"><?php echo $email_error ?></p>

        <label for="password" class="form-label m-2">Password</label>
        <input type="password" name="password" class="form-control" required>
        <p class="error"><?php echo $password_error ?></p>

        <button type="submit" class="btn btn-primary mt-2">Log In</button>
        <p class="success"><?php echo $success ?></p>
    </form>
</body>

</html>