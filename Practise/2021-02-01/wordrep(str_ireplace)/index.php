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
    if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
        $text = strtolower($_POST['user_input']);
        $words = array("alice", "bob", "channel");
        $replace = "*****";

        $new_text = str_replace($words, $replace, $text);
        echo $new_text;
    } else if ($_POST) {
        echo "please enter a text";
    }
    ?>
    <hr>
    <form action="index.php" method="post">
        <textarea name="user_input" id="" cols="30" rows="10" placeholder="write here"></textarea>
        <button type="submit">Submit</button>
    </form>

</body>

</html>