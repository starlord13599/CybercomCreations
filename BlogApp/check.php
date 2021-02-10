<?php
// phpcs:disable
require('./sql/sql.php');
session_start();
session_unset();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: ../blogpost/blogpost.php");
    exit;
}


$username = $password = "";
$username_err = $password_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $new_conn = new Sql;

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }


    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }



    if (empty($username_err) && empty($password_err)) {

        $sql = "SELECT id, email, password FROM user WHERE email = '$email'";

        $result = mysqli_query($new_conn->conn, $sql);

        $data = mysqli_fetch_assoc($result);

        if (password_verify($password, $data['password'])) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $data['id'];
            header('location:./blogpost/blogpost.php');
        }
        print_r($data);
    }
}
