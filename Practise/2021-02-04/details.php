<?php
//phpcs:disable
require('connectconfig.php');

$select_query = "SELECT * FROM user_data";

$result = mysqli_query($conn, $select_query);

$details = mysqli_fetch_all($result, MYSQLI_ASSOC);


mysqli_free_result($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Complains</td>
                <td>Desc</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($details as $d) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($d['id']) ?></td>
                    <td><?php echo htmlspecialchars($d['name']) ?></td>
                    <td><?php echo htmlspecialchars($d['email']) ?></td>
                    <td><?php echo htmlspecialchars($d['subjects']) ?></td>
                    <td><?php echo htmlspecialchars($d['description']) ?></td>
                    <td><a href="idetails.php?id=<?php echo htmlspecialchars($d['id']) ?>">Details</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>