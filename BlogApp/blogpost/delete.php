<?php
//phpcs:disable;
require('../sql/sql.php');
$new_conn = new Sql;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_POST = json_decode(file_get_contents("php://input"), true);
    $id = $_POST['id'];
    $delete_query = "DELETE FROM blog WHERE id='$id'";

    if (mysqli_query($new_conn->conn, $delete_query)) {
        echo "The contact was successfully deleted";
    } else {
        echo "Something went wrong";
    }
} else {
    echo 'Something went wrong';
}
