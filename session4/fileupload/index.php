<?php




// print_r($_POST);


// echo "<hr>";

// echo "<pre>";
// print_r($_FILES);



$name = $_FILES['img']['name'];
$tmp = $_FILES['img']['tmp_name'];


move_uploaded_file($tmp,"img/".$name);