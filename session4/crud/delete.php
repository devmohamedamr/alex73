<?php



$id =  $_GET['id'];

$connect =  mysqli_connect("localhost","root","","amit");
mysqli_query($connect,"DELETE FROM `category` WHERE `id` = $id");    

header("location: index.php");