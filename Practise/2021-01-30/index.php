<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <form action="calculator.php" method="get">
        <label for="num1">Enter number 1</label>
        <input type="number" name="num1" id="num1">

        <label for="operator">Operator</label>
        <select name="operator" id="operator">
            <option value="add">Add</option>
            <option value="sub">Sub</option>
        </select>

        <label for="num2">Enter number 2</label>
        <input type="number" name="num2" id="num2">

        <button type="submit">Calculate</button>
    </form>
    <?php
    ?>
</body>

</html>