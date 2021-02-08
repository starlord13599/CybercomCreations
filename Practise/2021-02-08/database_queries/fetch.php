<?php
//phpcs:disable
require('../sql_config.php');

$fetch_query = "SELECT * FROM  user_contacts";
$result = mysqli_query($conn, $fetch_query);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
