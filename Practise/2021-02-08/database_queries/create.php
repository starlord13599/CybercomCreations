<?php
//phpcs:disable
require('../sql_config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo $name = $_POST['name'];
    echo $email = $_POST['email'];
    echo $phone = $_POST['phone'];
    echo $title = $_POST['title'];
    session_start();
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($title)) {


        $create_query = "INSERT INTO
                        user_contacts(name,email,phone,title)
                        VALUES ('$name','$email','$phone','$title')";

        if (mysqli_query($conn, $create_query)) {
            $_SESSION['success'] = "The contact was inserted successfully";
            header('Location:contact.php');
        } else {
            $_SESSION['danger'] = "The update to database failed";
            header('Location:contact.php');
        }
    } else {
        echo 'please enter all the values';
    }
}
