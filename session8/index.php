<?php

// // oop relationship 



// class car{
//     private $color = "Red";
    
//     function move(){
//         // my class
//         echo "move ".$this->color;
//     }
// }

// // global scope
// // $car = new car;
// // $car->color = "green";
// // $car->move();





// // class bmw extends car{
// //     // child
// //     function stop(){
// //         echo "stop ".$this->color;
// //     }
// // }



// // $bmw1= new bmw;

// // $bmw1->stop();














// // class 
//     // + 
//     // - 
//     // *
//     // /
    

// class calc{
//     public $x;
//     public $y;
//     public $result;
//     public function add(){
//         $this->result = $this->x + $this->y;
//         return $this;
//     }

//     public function mult(){
//         $this->result = $this->x * $this->y;
//         return $this;
//     }

//     public function sub(){
//         $this->result = $this->x - $this->y;
//         return $this;
//     }

//     public function div(){
//         $this->result = $this->x / $this->y;
//         return $this;
//     }

//     public function printcalc(){
//         // print_r($this);
//         echo $this->result;
//     }
// }






// $c = new calc;
// $c->x =20;
// $c->y = 10;

// $c->sub()->printcalc();


// move().stop().start();
// move()->stop()->strat();
// db::table()->insert();



// single responsblity


// db class
// interface 
// abstract class






include "db.php";

$db  = new db;

$data = $db->select("category","*")->all();

// $data = $db->delete("category")->where("id","=",9)->excute();

echo "<pre>";

print_r($data);