<?php
// phpcs:disable
require('../validations/validateUser.php');
require('../sql/sql.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = new ValidateUser($_POST);
    $r = $user->validate();
    session_start();
    if (empty($r)) {
        $prefix = $_POST['prefix'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $info = $_POST['info'];
        $password = $_POST['password1'];
        $hashpass = password_hash($password, PASSWORD_DEFAULT);

        $new_conn = new Sql;
        $info = $new_conn->insert($prefix, $fname, $lname, $email, $phone, $info, $hashpass);

        if ($info) {
            $_SESSION['loggedin'] = true;
            header('location:../index.php');
        } else {
            echo 'error';
        }
    }
}
