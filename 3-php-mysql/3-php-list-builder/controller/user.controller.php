<?php

function index()
{
    $sql = "SELECT * FROM users";
    if(!empty($_GET["q"])){
        $q = $_GET["q"];
        $sql .= " WHERE name LIKE '%$q%'";
    }
    return responseJson(paginate($sql));
}



function store()
{

    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    run("INSERT INTO users (name,email,gender,address) VALUES ('$name','$email','$gender','$address')");

    $currentUser = first("SELECT * FROM users WHERE id = {$GLOBALS["conn"]->insert_id}");

    return responseJson($currentUser);
}

function delete()
{

    $id = $_GET["id"];
    $sql = "DELETE FROM users WHERE id=$id";
    run($sql);

    return responseJson("User is deleted ");
}

function show()
{
    $id = $_GET["id"];
    $sql = "SELECT * FROM users WHERE id=$id";
    return responseJson(first($sql));
}

function update()
{
    
    parse_str(file_get_contents("php://input"),$_PUT);

    $id = $_GET["id"];
    $name = $_PUT["name"];
    $email = $_PUT["email"];
    $gender = $_PUT["gender"];
    $address = $_PUT["address"];

    $sql = "UPDATE users SET name='$name',email='$email',gender='$gender',address='$address' WHERE id=$id";
    run($sql);
    return responseJson(first("SELECT * FROM users WHERE id = $id"));
}
