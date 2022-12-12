<?php




$connect =  mysqli_connect("localhost","root","","amit");

// $sql = "INSERT INTO `category` (`title`) VALUES ('test sql')";
// $sql = "UPDATE `category` SET `title` = 'mohamed' WHERE `id` = 4";
// $sql = "DELETE FROM `category` WHERE `id` = 4";
// $sql = "SELECT * FROM `course` ";
// $res=  mysqli_query($connect,$sql);

// $data =  mysqli_fetch_all($res,MYSQLI_ASSOC);


// echo "<pre>";
// print_r($data);
// echo mysqli_affected_rows($connect);





// if($_POST['fun'] == "update"){

//     $id = $_POST['id'];
//     header("location: update.php?id=$id");

// }elseif($_POST['fun'] == "delete"){
//     $id = $_POST['id'];

//     $connect = mysqli_connect("localhost","root","","amit");

//     mysqli_query($connect,"DELETE FROM `category` WHERE `id` = $id");

//     if(mysqli_affected_rows($connect) == 1){
//         echo "category deleted";
//     }
// }




$x=10;


function y(){
    $x=null;
    var_dump($x);
}


y();