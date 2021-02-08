<?php
//phpcs:disable;
require('../sql_config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_POST = json_decode(file_get_contents("php://input"), true);
    $id = $_POST['id'];
    $delete_query = "DELETE FROM user_contacts WHERE id='$id'";

    if (mysqli_query($conn, $delete_query)) {
        echo "The contact was successfully deleted";
    } else {
        echo "Something went wrong";
    }
} else {
    echo 'Something went wrong';
}
