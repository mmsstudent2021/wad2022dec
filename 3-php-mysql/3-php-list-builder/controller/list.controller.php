<?php

function index()
{
    $sql = "SELECT * FROM my";
    $query = mysqli_query($GLOBALS["conn"], $sql);
    $lists = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $lists[] = $row;
    }

    return view("list/index", ["lists" => $lists]);
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
    $query = mysqli_query($GLOBALS["conn"], $sql);
    redirect(route("list"));
}

function delete(){
    $id = $_GET["id"];
    $sql = "DELETE FROM my WHERE id=$id";
    $query = mysqli_query($GLOBALS["conn"], $sql);
    redirect(route("list"));
}

function edit(){
    $id = $_GET["id"];
    $sql = "SELECT * FROM my WHERE id=$id";
    $query = mysqli_query($GLOBALS["conn"], $sql);
    $list = mysqli_fetch_assoc($query);
    return view("list/edit",["list" => $list]);
}

function update(){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $money = $_POST["money"];
    $sql = "UPDATE my SET name='$name',money=$money WHERE id=$id";
    $query = mysqli_query($GLOBALS["conn"], $sql);
    redirect(route("list"));
}
