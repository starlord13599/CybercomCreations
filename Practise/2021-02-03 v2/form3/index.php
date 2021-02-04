<?php
// phpcs:disable
$conn = mysqli_connect('localhost', 'pmauser', '9993', 'user_info');
if (!$conn) {
    echo "connection to database failed" . mysqli_connect_error();
}

$query = 'SELECT * FROM user_data';
$result = mysqli_query($conn, $query); //always free this
$info = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

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
        $username = $_POST['username'];
        if (!empty($email) && !empty($password)) {

            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $username = mysqli_real_escape_string($conn, $username = $_POST['username']);

            $insert_query = "INSERT INTO user_data (username,email,password) VALUES ('$username','$email','$password')";

            if (mysqli_query($conn, $insert_query)) {
                echo 'data saved to database';
                header('location:index.php');
            } else {
                echo 'data saved failed' . mysqli_error($conn);
            }
        }
    }
    ?>
    <form action="index.php" method="post" class="cont form-control">
        <h1 class="text-center">Sign Up form</h1>
        <p class="error"><?php echo $error ?></p>

        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control">

        <label for="email" class="form-label m-2">Email</label>
        <input type="email" name="email" class="form-control" required>
        <p class="error"><?php echo $email_error ?></p>

        <label for="password" class="form-label m-2">Password</label>
        <input type="password" name="password" class="form-control" required>
        <p class="error"><?php echo $password_error ?></p>

        <button type="submit" class="btn btn-primary mt-2">Log In</button>
        <p class="success"><?php echo $success ?></p>
    </form>


    <table class="table table-striped cont">
        <thead>
            <tr>
                <td>Id</td>
                <td>Username</td>
                <td>Email</td>
                <td>Password</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($info as $i) { ?>
                <tr>
                    <td> <?php echo htmlspecialchars($i['id']) ?> </td>
                    <td> <?php echo htmlspecialchars($i['username']) ?> </td>
                    <td> <?php echo htmlspecialchars($i['email']) ?> </td>
                    <td> <?php echo htmlspecialchars($i['password']) ?> </td>
                </tr>
            <?php } ?>

            <?php
            mysqli_free_result($result);
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</body>

</html>