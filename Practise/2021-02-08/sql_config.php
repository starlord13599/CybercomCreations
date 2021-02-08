<?php
//phpcs:disable
$conn = mysqli_connect('localhost', 'pmauser', '9993', 'contact_db');

if (!$conn) {
    echo "Unable to connect to database" . mysqli_connect_error();
}
