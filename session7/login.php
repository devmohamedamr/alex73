<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

   $connection =  mysqli_connect("localhost","root","","amit");
   $q=  mysqli_query($connection,"SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");
   $user =  mysqli_fetch_assoc($q);

  if(!empty($user)){
    setcookie("user",$user['email'],time()+60*60*24*30*12*3,"/");
    header("location: index.php");
  }

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
    <form action="login.php" method="post">
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit">
    </form>
</body>
</html>