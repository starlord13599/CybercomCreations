<!DOCTYPE html>
<html lang="en">
<?php
//phpcs:disable
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Registration Form</h1>


    <form action="index.php" method="post" onsubmit="return validate()" name="myform" class="form-control container">

        <p class="note">* indicates required filed</p>
        <div id="name" class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
            <span class="error"></span>
        </div>
        <div id="email" class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="text" name="email" class="form-control">
            <span class="error"></span>
        </div>
        <label for="gender">Gender:-</label>
        <div id="gender" class="mb-3">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="Male">
            <label for="male">Female</label>
            <input type="radio" name="gender" value="Female">
            <span class="error"></span>
        </div>

        <div id="proff" class="mb-3">
            <label for="proff">Proffesion</label>
            <select class="form-select" name="proff">
                <option selected value="0">Open this select your profession</option>
                <option value="IT">IT</option>
                <option value="ME">ME</option>
                <option value="CE">CE</option>
            </select>
            <span class="error"></span>
        </div>
        <div id="terms" class="mb-3">
            <label for="terms">Terms</label>
            <input type="checkbox" name="terms">
            <span class="error"></span>
        </div>
        <input type="submit" name="submit" value="submit" class="btn btn-block btn-primary">
    </form>

    <?php
    include('validate.php')
    ?>

    <script src="validations.js"></script>
</body>

</html>