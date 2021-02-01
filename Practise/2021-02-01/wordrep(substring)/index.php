<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //phpcs:disable
    $offset = 0;
    if (isset($_POST['user_input']) && isset($_POST['search_string']) && isset($_POST['search_replace'])) {

        $user_input = $_POST['user_input'];
        $search_string = $_POST['search_string'];
        $search_replace = $_POST['search_replace'];
        $length = strlen($search_string);
        if (!empty($user_input) && !empty($search_string) && !empty($search_replace)) {

            while ($position = strpos($user_input, $search_string, $offset)) {
                $position;
                $user_input = substr_replace($user_input, $search_replace, $position, $length);
                $offset = $position + $length;
            }
            echo $user_input;
        }
    }

    ?>
    <hr>
    <form action="index.php" method="post">
        <textarea name="user_input" id="" cols="30" rows="10" placeholder="write here"></textarea>
        <br>
        <label for="search_string">Write search string</label>
        <input type="text" name="search_string" id="search_string">
        <br>
        <label for="search_replace">Write replace string</label>
        <input type="text" name="search_replace" id="search_replace">
        <br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>