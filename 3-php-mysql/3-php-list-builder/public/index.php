<?php

require_once "../index.php";

// if ($_SERVER["REQUEST_URI"] === "/") {
//     require_once ViewDir . "/home.view.php";
// } elseif ($_SERVER["REQUEST_URI"] === "/about-us") {
//     require_once ViewDir . "/about.view.php";
// }else{}




// switch ($path) {

//     case "/":
//         view("home", ["m`yName" => "hein htet zan", "myAge" => 28]);
//         break;

//     case "/about-us":
//         view("about");
//         break;


//     case "/list":
//         controller("list@index");
//         break;

//     case "/list-create":
//         controller("list@create");
//         break;

//         // case "/list-store" && $_SERVER["REQUEST_METHOD"] === "POST":
//     case "/list-store":
//         controller("list@store");
//         break;

//     case "/list-delete":
//         controller("list@delete");
//         break;

//     case "/list-edit":
//         controller("list@edit");
//         break;

//     case "/list-update":
//         controller("list@update");
//         break;

//         // for all unknown route
//     default:
//         view("not-found");
// }


// dd($_SERVER);