<!DOCTYPE html>
<html lang="en">
<?php
// phpcs:disable
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 4</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    require('validate.php')
    ?>

    <h2>Registration form</h2>

    <p><span class="error">* required field.</span></p>

    <form method="POST" action="index.php">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name">
                    <span class="error">* <?php echo $nameErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>E-mail: </td>
                <td><input type="text" name="email">
                    <span class="error">* <?php echo $emailErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>Time:</td>
                <td> <input type="text" name="course">
                    <span class="error"><?php echo $websiteErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>Classes:</td>
                <td> <textarea name="class" rows="5" cols="40"></textarea></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                    <span class="error">* <?php echo $genderErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Select:</td>
                <td>
                    <select name="subject[]" size="4" multiple>
                        <option value="Android">Android</option>
                        <option value="Java">Java</option>
                        <option value="C#">C#</option>
                        <option value="Data Base">Data Base</option>
                        <option value="Hadoop">Hadoop</option>
                        <option value="VB script">VB script</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Agree</td>
                <td><input type="checkbox" name="checked" value="1"></td>
                <?php if (!isset($_POST['checked'])) { ?>
                    <span class="error">* <?php echo "You must agree to terms"; ?></span>
                <?php } ?>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>

        </table>
    </form>
    <?php
    require('print.php')
    ?>
</body>


</html>