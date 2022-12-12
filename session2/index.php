<?php


// $numbers  = [1,3,4,2];
// $target = 6;

// $i=0;
// $x = 1;
// while($i<count($numbers)){
    
//     if($numbers[$i] + $numbers[$x] == $target){
//         echo $numbers[$i]." : ".$numbers[$x];
//     }


//     $i++;
//     $x = ($x == end($numbers)) ? $x-1 : $x++;
// }

// $i=0;
// while($i<count($numbers)){
//     $x=0;
//     while($x<count($numbers)){
//         if($numbers[$i] + $numbers[$x] == $target){
//             echo $numbers[$i]." : ".$numbers[$x]."<br>";
//         }
//         $x++;
//     }
//     $i++;
// }






// for($i=0;$i<10;$i++):
//     echo $i."<br>";
// endfor;



$numbers = [23,23,213];

// array_push($numbers,100);
// echo array_pop($numbers)."<br>";
// echo array_pop($numbers)."<br>";
// echo array_pop($numbers)."<br>";

// print_r($numbers);



// while($x = array_pop($numbers)){
//     echo $x."<br>";
// }

// $c = count($numbers);

// for($i=0;$i<$c;$i++){
//     echo $numbers[$i]."<br>";
// }



// $i=0;
// do{
   
//     echo $i."<br>";
//     $i++;
// }while($i>10);



// $user = ["name" => "mohamed","age"=>27];


// $user= [
//     "name"=>"mohamed",
//     "age"=>27
// ];

// $numbers = [123,23,4,6];

// foreach($numbers as $k => $value):
//     echo $value."<br>";
// endforeach;






$user = [
    [
        "name"=>"ahmed",
        "age"=>29,
        "skills"=>["html","css"]
    ],
    [
        "name"=>"eslam",
        "age"=>40,
        "skills"=>["html","css"]

    ],
    [
        "name"=>"ramy",
        "age"=>33,
        "skills"=>["html","css"]

    ]
];

// echo "<pre>";
// print_r($user);

// foreach($user as $key => $value){
     
//     foreach($value as $k => $v){
//         if($k == "skills"){
//           echo   $k . " : ".implode(" ",$v);
//         }else{
//             echo $k." : ".$v."<br>";
//         }
//     }
//     echo "<hr>";
// }

// name : ahmed
// age : 22
// =============
 // name : ahmed
// age : 22
// ==========
// name : ahmed
// age : 22


// $keys = array_keys($user);

// // print_r($keys[1]);
// for($i=0;$i<count($user);$i++){
//     // echo $keys[$i]."<br>";
//    echo $user[$keys[$i]]."<br>";
// }

// print_r();








// functions 


// function welcome($x){
//     echo "hi ".$x."<br>";
// }

// welcome("mohamed");

// welcome("ahmed");

// welcome("sara");







// function number($n){
//     return $n;
// }



// echo 10 + number(10);














// function addnewcolor($color,&$array){
//     $array[] = $color;

//     print_r($array);
// }

// $colors = ["red","green"];

// addnewcolor("blue",$colors);

// echo "<hr>";
// print_r($colors);













function getMaxValue($customers){
    
$max = 0;
foreach($customers as $value){
    $price = 0;
    foreach($value as $x){
        $price +=$x;
    }
    
    if($max < $price){
        $max = $price;
    }
    
}
return $max;

}




$customers = [
    [12,23,12],
    [5,76,2,76],
    [5,1,4]
];


echo getMaxValue($customers);

















