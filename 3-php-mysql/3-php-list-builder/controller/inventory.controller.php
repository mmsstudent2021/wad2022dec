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

    validationStart();

    if(empty(trim($_POST["name"]))){
        setError("name","name is required");
    }else if(strlen($_POST['name']) < 3){
        setError("name","name is too short");
    }else if(strlen($_POST['name']) > 20){
        setError("name","name is too long");
    }else if(!preg_match("/^[a-zA-Z0-9 ]*$/",$_POST['name'])){
        setError("name","name only allows number, char and space");
    }

    if(empty(trim($_POST["price"]))){
        setError("price","price is required");
    }else if(!is_numeric($_POST['price'])){
        setError("price","price must be number");
    }else if($_POST['price'] < 100){
        setError("price","price must be greater than 100");
    }else if($_POST['price'] > 9999){
        setError("price","price must be less than 9999");
    }

    if(empty(trim($_POST["stock"]))){
        setError("stock","stock is required");
    }else if(!is_numeric($_POST['stock'])){
        setError("stock","stock must be number");
    }else if($_POST['stock'] < 1){
        setError("stock","stock must be greater than 1");
    }else if($_POST['stock'] > 100){
        setError("stock","stock must be less than 100");
    }

    // ["price" => "numeric,gt:100,lt:9999"]

    // $price = $_POST["price"];
    // $stock = $_POST["stock"];

    validationEnd();

    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    run("INSERT INTO inventories (name,price,stock) VALUES ('$name',$price,$stock)");
    return redirect(route("inventory"),"Item create successfully");
}

function delete()
{
    $id = $_POST["id"];
    $sql = "DELETE FROM inventories WHERE id=$id";
    run($sql);

    return redirectBack("Item delete successfully");
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
