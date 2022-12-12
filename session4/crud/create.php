<?php

// print_r($_POST);


if(isset($_POST['name'])){
    $connect =  mysqli_connect("localhost","root","","amit");
    $name = $_POST['name'];
    mysqli_query($connect,"INSERT INTO `category` (`title`) VALUES ('$name') ");    

    header("location: index.php");
}
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
    <form action="create.php" method="post">
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>
</html>