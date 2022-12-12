<?php



// $_COOKIE

// print_r($_POST);


// $x = $_GET['x'];
// $y = $_GET['y'];
// $o = $_GET['o'];


// switch($o){
//     case "+":
//        echo  $x + $y;
//     break; 
//     case "-":
//        echo  $x - $y;
//     break; 
//     case "*":
//         echo  $x * $y;
//      break; 
//      case "/":
//         echo  $x / $y;
//      break; 
// }



// print_r($_GET)/;




// $students = $_POST['students'];


$list_students =  explode(",",$students);
$course = $_POST['course'];

$content = file_get_contents("certificate.html");

foreach($list_students as $student){
    fopen($student.".html","w");
    $newcontent = str_replace(["{name}","{course}"],[$student,$course],$content);

    file_put_contents($student.".html",$newcontent);
}






// $category = $_POST['category'];

// $connect =  mysqli_connect("localhost","root","","amit");

// $sql = "INSERT INTO `category` (`title`) VALUES ('$category')";
// $sql = "SELECT * FROM `category`";
// mysqli_query($connect,$sql);





echo "test";




