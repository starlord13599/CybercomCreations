<!DOCTYPE html>
<html lang="en">
<?php
//phpcs:disable
include('connectconfig.php');
include('validate.php');

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>

<body>


    <form action="index.php" name="contactus" method="post" class="container form-control">

        <h1>Contact Us Form</h1>
        <?php
        if ($error) {
            print_r($error);
        }
        ?>

        <div id="name">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
            <span class="error"></span>
        </div>

        <div id="email">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control">
            <span class="error"></span>
        </div>

        <div id="subject">
            <label for="subject" class="form-label">Complain Subject</label>
            <select name="subject[]" class="form-select" multiple>
                <option value="complain 1">Complain 1</option>
                <option value="complain 2">Complain 2</option>
                <option value="complain 3">Complain 3</option>
                <option value="complain 4">Complain 4</option>
            </select>
            <span class="error"></span>
        </div>
        <div id="desc">
            <label for="desc" class="form-label" class="form-label">Enter description</label>
            <textarea name="desc" cols="30" rows="10" class="form-control"></textarea>
            <span class="error"></span>
        </div>

        <input type="submit" class="btn btn-primary" value="submit">
    </form>
</body>

</html>