<?php

function index()
{
    $sql = "SELECT * FROM my";
    if(!empty($_GET["q"])){
        $q = $_GET["q"];
        $sql .= " WHERE name LIKE '%$q%'";
    }


    // total ?
    // limit = 10 (rows pre page)
    // totalPage = total / limit

    // currentPage = 3;
    // offset = ( currentPage - 1 ) * limit

    //SELECT * from my LIMIT 0,10 - page 1
    //SELECT * from my LIMIT 10,10 - page 2
    //SELECT * from my LIMIT 20,10 - page 3
    //SELECT * from my LIMIT 30,10 - page 4


    return view("list/index", ["lists" => paginate($sql)]);
}

function create()
{
    view("list/create");
}

function store()
{
    $name = $_POST["name"];
    $money = $_POST["money"];
    $sql = "INSERT INTO my (name,money) VALUES ('$name',$money)";
    run($sql);
    redirect(route("list"),"List create successfully");
}

function delete()
{
    $id = $_POST["id"];
    $sql = "DELETE FROM my WHERE id=$id";
    run($sql);

    redirect($_SERVER['HTTP_REFERER'],"List delete successfully");
}

function edit()
{
    $id = $_GET["id"];
    $sql = "SELECT * FROM my WHERE id=$id";
    return view("list/edit", ["list" => first($sql)]);
}

function update()
{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $money = $_POST["money"];
    $sql = "UPDATE my SET name='$name',money=$money WHERE id=$id";
    run($sql);
    

    redirect($_SERVER['HTTP_REFERER'],"List update successfully");
}
