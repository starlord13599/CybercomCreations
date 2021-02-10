<?php
// phpcs:disable
require('../sql/sql.php');

$new_conn = new Sql;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (
        !empty($_POST['title']) && !empty($_POST['content'])
        && !empty($_POST['url']) && !empty($_POST['c_date'])
        && !empty($_POST['category'])
    ) {
        session_start();
        $user_id = $_SESSION['id'];
        echo $title = $_POST['title'];
        echo $content = $_POST['content'];
        echo $url = $_POST['url'];
        echo $c_date = $_POST['c_date'];
        echo $category = $_POST['category'];


        $query = "INSERT INTO blog(`user_id`,title,content,url,c_date,category)
        VALUES ('$user_id','$title','$content','$url','$c_date','$category')";

        if (mysqli_query($new_conn->conn, $query)) {
            echo 'Inserted' . mysqli_error($new_conn->conn);
            header('location:blogpost.php');
        } else {
            echo 'failed' . mysqli_error($new_conn->conn);
        }
    }
}
