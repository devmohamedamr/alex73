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






// include "db.php";

// $db  = new db("amit");

// $data =  DB::table("category")->select("*")->all();
// $data = $db->delete("category")->where("id","=",9)->excute();

// $db->update("category",[
//     "title"=>"test db update"
// ])->where("id","=",16)->excute();
// $data = $db->select("category","*")->all();

// echo "<pre>";

// print_r($data);

// die;







// interface user{
//     public function get();
//     public function go();
// }


// class person implements user{
//     public function get(){
//         echo "get person";
//     }

//     public function go(){
//         echo "go person";
//     }
// }

// class animal implements user{
//     public function get(){
//         echo "get animal";
//     }

//     public function go(){
//         echo "go animal";
//     }
// }


// $person = new person;
// $person->go();



// interface db{
//     public function insert();
//     public function update();
//     public function delete();
// }


// class mysqldb implements db{
//     public function insert(){
//         echo "mysql insert";
//     }

//     public function update(){
//         echo "mysql update";
//     }

//     public function delete(){
//         echo "mysql delete";
//     }
// }

// class postdb implements db{
//    public function insert(){
//     echo "post insert";
//    } 

//    public function update(){
//     echo "post update";
//    } 

//    public function delete(){
//     echo "post delete";
//    } 
// }



// $mysql = new postdb;


// $mysql->insert();





// interface a{
//     public function amethod();
// }

// interface b{
//     public function bmethod();
// }


// class test implements a,b{
//     public function amethod(){

//     } 
//     public function bmethod(){

//     }
// }   






// abstract class test{
//     abstract function go();

//     function stop(){
//         echo "stop";
//     }
// }


//  interface ( no object , implements many interfaces , abstract methods only )
// abstract ( no object , extends one class , abstract method and methods include body )



// trait
// overriding , overloading
// static , final , self
// getter , setter
// namespace
// autolaod
// magic methods
    // construct 
    // destruct 
    // call
    // set
    // get




// class test{
//     // public function __construct($x)
//     // {
//     //     echo "new ".$x;
//     // }

//     public function go(){
//         echo "go <br>";
//     }
//     // public function __destruct()
//     // {
//     //     echo "close connection";
//     // }

//     public function __call($name,$param){
//         echo "method : ".$name." not found <br>";
//         print_r($param);   
//     }
// }

// $test = new test;
// $test->stop(1,2);


// // validation class
// // required
// // min
// // max 

// // $validation->input("name")->required()->min(2)->max(5);













// trait a{
//     public function amethod(){
//         echo "amethod";
//     } 
// }

// trait b{
//     public function bmethod(){
//         echo "bmethod";
//     } 
// }


// class child{
//     use a,b;
// }


// $child = new child;
// $child->bmethod();





// class user{
//     public function __call($name, $arguments)
//     {
//         if($name = "netsalary"){
//             if(count($arguments) == 2){
//                echo  $arguments[0] - $arguments[1];
//             }elseif(count($arguments) == 3){
//              echo   ($arguments[0] + $arguments[2]) - $arguments[1];
//             }
//         }
//     }

//     public function netsalary($array){
//         if(count($array) == 2){
//             echo  $array[0] - $array[1];
//         }elseif(count($array) == 3){
//             echo   ($array[0] + $array[2]) - $array[1];
//         }
//     }
// }


// $user  =new user;
// $user->netsalary([1500,200]);


// function go($x,$y){
//     echo $x+$y;
// }

// go(10,20);

// class person extends user{
//     public function login(){
//         echo  "person login";
//     }
// }


// $person = new person;
// $person->login();




// class user{
//     const pi = "mohamed";
//     public static $color = "Red";
//     public static function go(){
//         echo self::pi;
//     }
// }

// user::$color = "green";
// user::go();
// $u = new user;
// print_r($u);
// $u->go();







// class test{
//     public function game(){
//         echo "test game";
//     }
// }
// $t = new test;
// $t->game();
// test::game();





// include "user.php";
// include "category.php";



// spl_autoload_register(function($classname){
//     if(file_exists("controller/".$classname.".php")){
//         include  "controller/".$classname.".php";
//     }elseif(file_exists("model/".$classname.".php")){
//         include  "model/".$classname.".php";
//     }
// });

// $c = new user;
// $c->go();

// $u = new user;
// $u->go();



// include "db.php";

// // class DB{
// //     public function test(){
// //         echo "test";
// //     }
// // }
// use out\DB;
// $db = new DB;
// $db->test();

