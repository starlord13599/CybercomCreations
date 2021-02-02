<?php
//phpcs:disable

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $proff = $_POST['proff'];
    $terms = $_POST['terms'];

    if (!empty($name) && !empty($email) && !empty($gender) && !empty($proff) && !empty($terms)) {
        echo 'Name :-' . $name . '<br>';
        echo 'Email :-' . $email . '<br>';
        echo 'Gender :-' . $gender . '<br>';
        echo 'proff :-' . $proff . '<br>';
        echo 'terms :-' . $terms . '<br>';
    } else {
        echo "please fill the * fields correctly";
    }
}
