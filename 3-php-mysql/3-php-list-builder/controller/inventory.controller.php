<?php

function index()
{
    $sql = "SELECT * FROM inventories";
    if(!empty($_GET["q"])){
        $q = $_GET["q"];
        $sql .= " WHERE name LIKE '%$q%'";
    }
    return view("inventory/index", ["lists" => paginate($sql)]);
}

function create()
{
    return view("inventory/create");
}

function store()
{

    if(empty(trim($_POST["name"]))){
        dd("name is required");
    }else if(strlen($_POST['name']) < 3){
        dd("name is too short");
    }else if(strlen($_POST['name']) > 20){
        dd("name is too long");
    }else if(!preg_match("/^[a-zA-Z0-9 ]*$/",$_POST['name'])){
        dd("name only allows number, char and space");
    }

    if(empty(trim($_POST["price"]))){
        dd("price is required");
    }else if(!is_numeric($_POST['price'])){
        dd("price must be number");
    }else if($_POST['price'] < 100){
        dd("price must be greater than 100");
    }else if($_POST['price'] > 9999){
        dd("price must be less than 9999");
    }

    if(empty(trim($_POST["stock"]))){
        dd("stock is required");
    }else if(!is_numeric($_POST['stock'])){
        dd("stock must be number");
    }else if($_POST['stock'] < 1){
        dd("stock must be greater than 1");
    }else if($_POST['stock'] > 100){
        dd("stock must be less than 100");
    }

    // ["price" => "numeric,gt:100,lt:9999"]

    // $price = $_POST["price"];
    // $stock = $_POST["stock"];

    dd("Data ready");

    run("INSERT INTO inventories (name,price,stock) VALUES ('$name',$price,$stock)");
    return redirect(route("inventory"),"Item create successfully");
}

function delete()
{
    $id = $_POST["id"];
    $sql = "DELETE FROM inventories WHERE id=$id";
    run($sql);

    return redirect($_SERVER['HTTP_REFERER'],"Item delete successfully");
}

function edit()
{
    $id = $_GET["id"];
    $sql = "SELECT * FROM inventories WHERE id=$id";
    return view("inventory/edit", ["list" => first($sql)]);
}

function update()
{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $sql = "UPDATE inventories SET name='$name',price=$price,stock=$stock WHERE id=$id";
    run($sql);
    return redirect(route("inventory"),"Item update successfully");
}
