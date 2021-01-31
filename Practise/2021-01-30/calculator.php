<?php
//phpcs:disable
require_once 'helper.php';

$num1 = $_GET['num1'];
$oper = $_GET['operator'];
$num2 = $_GET['num2'];

echo 'Value' . calc($num1, $oper, $num2);
