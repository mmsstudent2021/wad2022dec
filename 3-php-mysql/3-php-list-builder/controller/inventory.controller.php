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
    $name = $_POST["name"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
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
