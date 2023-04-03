<?php

system("clear");

require_once "./autoload.php";

// $one = new One;
// print_r($one);

// $two = new Two;
// print_r($two);


// $student1 = new Student("Aung Gyi","male","1990");
// $student2 = new Student("Su Su","female","2000");
// $student3 = new Student("Kyaw Kyaw","male","1995");

// print_r($student1);
// echo $student1->showFullName();
// echo $student1->introduction();


// $user = new Db("users");

// print_r($user->show(2));

// print_r($user->read());

// $user->create([
//     "name" => "hein htet zan",
//     "email" => "hhz@gmail.com",
//     "gender" => "male" , 
//     "address" => "no 48, shan kone st, sanchaung"
// ]);

// $user->create([
//     "name" => "su su",
//     "email" => "ss@gmail.com",
//     "gender" => "female" , 
//     "address" => "bal bal"
// ]);

// $my = new Db("my");

// print_r($my->index());

// print_r($my->show(131));

// $my->create([
//     "name" => "su su",
//     "money" => 500
// ]);

// $my->create([
//     "name" => "kyaw kyaw",
//     "money" => 1500
// ]);

// $my->create([
//     "name" => "yu yu",
//     "money" => 600
// ]);


// $txt = new FileWriter("name.txt");

// $txt->write("a \n");
// $txt->write("b \n");
// $txt->write("c \n");
// $txt->write("d \n");

// $html = new FileWriter("home.html");
// $html->write("<h1>Min Ga Lar Par</h1>");

// $css = new FileWriter("style.css");
// $css->write("body{color:red}");


// print_r(Three::$a);
// echo "\n";
// print_r(Three::b());
// echo "\n";
// print_r(Three::c());

// $one = new One;

// print_r($one->a()->b()->c()->a()->d());

// $users = new QueryBuilder("users");
// // echo $users->where("gender","=","female")->where("age",">",18)->sql();
// echo $users->where("gender","=","female")->where("age",">",18)->orderBy("id")->orderBy("name","DESC")->sql();
// echo "\n";

// $lists = new QueryBuilder("lists");
// echo $lists->where("id","=",1)->orWhere("id","=",3)->orWhere("id","=",7)->sql();


// $me = new Person;
// $me->skinColor = "brown";
// var_dump($me->skinColor);
// $me->setFbPassword("mingalarpar");
// var_dump($me->getFbPassword());

