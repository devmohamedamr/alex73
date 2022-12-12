<?php 

if(empty($_POST)){
    $id = $_GET['id'];

    $connect = mysqli_connect("localhost","root","","amit");
    
    $q =  mysqli_query($connect,"SELECT * FROM `category` WHERE `id` = $id");
    
    $row =  mysqli_fetch_assoc($q);
}


print_r($_POST);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    
    <h1>update</h1>
<form action="update.php" method="post">
        <input type="text" value="<?= $row['title']; ?>" name="name">
        <input type="submit">
    </form>

</body>
</html>