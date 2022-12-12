<?php

if(empty($_COOKIE['user'])){
    header("location: login.php");
}



echo "index hi";


echo "<a href='logout.php'>logout</a>";