<?php

require_once "../index.php";

// if ($_SERVER["REQUEST_URI"] === "/") {
//     require_once ViewDir . "/home.view.php";
// } elseif ($_SERVER["REQUEST_URI"] === "/about-us") {
//     require_once ViewDir . "/about.view.php";
// }else{}


switch ($_SERVER["REQUEST_URI"]) {

    case "/":
        view("home", ["myName" => "hein htet zan", "myAge" => 28]);
        break;

    case "/about-us":
        view("about");
        break;


    case "/list":
        controller("list@index");
        break;

        // for all unknown route
    default:
        view("not-found");
}

// dd($_SERVER);