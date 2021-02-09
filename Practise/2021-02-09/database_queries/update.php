<?php
//phpcs:disable
require('../sql_config.php');


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id = $_GET['id'];
    $get_one = "SELECT * FROM user_contacts WHERE id='$id'";
    $result = mysqli_query($conn, $get_one);
    $data = mysqli_fetch_assoc($result);

    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $title = $data['title'];
    $c_date = $data['c_date'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($title)) {
        session_start();
        $update_query = "UPDATE user_contacts
        SET name = '$name', email = '$email', phone = '$phone', title='$title'
        WHERE id = '$id'";
        if (mysqli_query($conn, $update_query)) {
            $_SESSION['success'] = "The contact with user-id:- " . $id . " updated successfully";
            header('Location:contact.php');
        } else {
            $_SESSION['danger'] = "Failed to update the contact";
            header('Location:contact.php');
        }
    }
}
