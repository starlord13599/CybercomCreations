<?php
// phpcs:disable
session_start();
session_unset();
header('location:../index.php');
