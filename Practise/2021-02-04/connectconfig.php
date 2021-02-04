<?php
//phpcs:disable
$conn = mysqli_connect('localhost', 'pmauser', '9993', 'user_info');
if (!$conn) {
    echo 'unable to connect to database' . mysqli_connect_error();
}
