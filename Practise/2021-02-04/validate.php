<?php
//phpcs:disable
$error = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['name'])) {
        array_push($error, 'Please enter your name');
    } else {
        $name = htmlspecialchars($_POST['name']);
    }


    if (empty($_POST['email'])) {
        array_push($error, 'please enter your email');
    } else {

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            array_push($error, 'The email is invalid');
        } else {
            $email = $_POST['email'];
        }
    }


    if (empty($_POST['subject'])) {
        array_push($error, "Please select a subject");
    } else {
        $subjects = implode(',', $_POST['subject']);
    }


    if (empty($_POST['desc'])) {
        array_push($error, "please enter an description");
    } else {
        $description = $_POST['desc'];
    }

    if (empty($error)) {
        $insert_query = "INSERT INTO user_data(name,email,subjects,description) VALUES ('$name','$email','$subjects','$description')";

        if (mysqli_query($conn, $insert_query)) {
            echo 'data saved to database';
            header('location:details.php');
        } else {
            echo 'data saved failed' . mysqli_error($conn);
        }
    }
}
