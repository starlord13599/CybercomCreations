<?php
//phpcs:disable
function calc($num1, $oper, $num2)
{
    $result;

    switch ($oper) {
        case 'add':
            $result = $num1 + $num2;
            break;

        case 'sub':
            $result = $num1 - $num2;
            break;
        default:
            $result = "An error occured";
            break;
    }

    return $result;
}
