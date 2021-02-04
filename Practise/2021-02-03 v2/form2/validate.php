<?php
// phpcs:disable
function dismental($arr)
{
    global $all_games;
    $all_games = array();
    foreach ($arr as $key => $value) {
        global $all_games;
        $all_games[$key] = $value;
    }
    return $all_games;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $game = $_POST['game'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $file = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];
    $extesnion = substr($file, strpos($file, '.') + 1);

    print_r($file);


    if (
        !empty($name) && !empty($password)
        && !empty($address) && !empty($game)
        && !empty($gender) && !empty($age) && !empty($name)
    ) {
        echo 'Name :-' . $name . '<br>';
        echo 'Password :-' . $password . '<br>';
        echo 'address :-' . $address . '<br>';
        echo 'gender :-' . $gender . '<br>';
        echo 'age :-' . $age . '<br>';
        print_r($_FILES['file']['type']);
        echo '<br>';
        print_r(dismental($game));
        if ($extesnion == 'pdf') {
            $location = 'uploads/';

            if (move_uploaded_file($temp_name, $location . $file)) {
                echo 'Your file successfully submitted';
            }
        } else {
            echo 'something went wrong';
        };
    } else {
        echo "please fill the * fields correctly";
    }
}
