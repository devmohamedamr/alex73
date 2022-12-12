<?php

$connect =  mysqli_connect("localhost","root","","amit");


$q =  mysqli_query($connect,"SELECT * FROM `category`");

$data =  mysqli_fetch_all($q,MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="create.php">create new category</a>
    <table border="1">
        <tr>
            <th>#</th>
            <th>title</th>
            <th>delete</th>
            <th>update</th>
        </tr>

        <?php foreach($data  as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['title'] ?></td>
            <td> <a href="delete.php?id=<?= $row['id'] ?>">delete</a> </td>
            <td> <a href="update.php?id=<?= $row['id'] ?>">update</a> </td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>