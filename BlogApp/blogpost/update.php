<?php
// phpcs:disable

require('../sql/sql.php');

$new_conn = new Sql;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $url = $_POST['url'];
    // $c_date = $_POST['c_date'];
    $category = $_POST['category'];

    $query = "UPDATE blog
    SET title = '$title', content = '$content', url = '$url'
    WHERE id = '$id'";

    if (mysqli_query($new_conn->conn, $query)) {
        echo 'done';
        header('location:blogpost.php');
    } else {
        echo mysqli_error($new_conn->conn);
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    $query = "SELECT * FROM blog WHERE id='$id'";
    $result = mysqli_query($new_conn->conn, $query);
    $data = mysqli_fetch_assoc($result);
}
