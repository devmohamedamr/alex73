<?php


if(isset($_POST['name'])){

 

    $connect =  mysqli_connect("localhost","root","","amit");
    $title = $_POST['name'];
    $id = $_POST['id'];
    $q =  mysqli_query($connect,"UPDATE `category` SET `title` = '$title' WHERE `id` =$id ");
    header("location: index.php");

}else{

    $id =  $_GET['id'];


$connect =  mysqli_connect("localhost","root","","amit");

$q =  mysqli_query($connect,"SELECT * FROM `category` WHERE `id` = $id");


$row =  mysqli_fetch_assoc($q);
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
<form action="update.php" method="post">
        <input type="text" value="<?= $row['title'] ?>" name="name">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="submit">
    </form>
</body>
</html>