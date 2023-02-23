<?php

function home(){
    return view("home", ["myName" => "hein htet zan", "myAge" => 28]);
}

function about(){
    return view("about");
}