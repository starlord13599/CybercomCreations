<!DOCTYPE html>
<html lang="en">
<?php
//phpcs:disable
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Form 2</title>
</head>

<body>
    <table border="1">
        <thead>
            <th colspan="2">USER FORM</th>

        </thead>
        <tbody>
            <form action="index.php" method="post" onsubmit="return validate()" name="myform" enctype="multipart/form-data">
                <tr>
                    <td>
                        <label for="name">Enter Name</label>
                    </td>
                    <td id="name">
                        <input type="text" name="name"><br>
                        <span class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Enter Password</label>
                    </td>
                    <td id="password">
                        <input type="password" name="password"><br>
                        <span class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Enter Address</label>
                    </td>
                    <td id="address">
                        <textarea name="address" cols="30" rows="10"></textarea><br>
                        <span class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="game">Select Game</label>
                    </td>
                    <td id="game">
                        <input type="checkbox" name="game[]" value="Cricket">Cricket<br>
                        <input type="checkbox" name="game[]" value="Vollyball">Vollyball<br>
                        <input type="checkbox" name="game[]" value="Hockey">hockey<br>
                        <input type="checkbox" name="game[]" value="Foootball">Football<br>
                        <input type="checkbox" name="game[]" value="Tenis">Tenis<br>
                        <span class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Gender</label>
                    </td>
                    <td id="gender">
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female<br>
                        <span class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="age">Age</label>
                    </td>
                    <td id="age">
                        <input type="number" name="age"><br>
                        <span class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="file">
                        Choose file <input type="file" name="file" id="files"><br>
                        <span class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="reset" value="Reset">
                        <input type="submit" value="Submit">
                    </td>

                </tr>
        </tbody>
    </table>
    </form>
    <?php
    require('validate.php')
    ?>
    <script src="validate.js"></script>
</body>

</html>