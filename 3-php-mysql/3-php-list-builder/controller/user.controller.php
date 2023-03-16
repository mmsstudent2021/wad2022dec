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

    validationStart();

    if(empty($_POST["name"])){
        setError("name","name is required");
    }else if(strlen($_POST['name']) < 3){
        setError("name","name is too short");
    }else if(strlen($_POST['name']) > 20){
        setError("name","name is too long");
    }else if(!preg_match("/^[a-zA-Z0-9 ]*$/",$_POST['name'])){
        setError("name","name only allows number, char and space");
    }

    if(empty($_POST["email"])){
        setError("email","email is required");
    }else if(strlen($_POST['email']) < 3){
        setError("email","email is too short");
    }else if(strlen($_POST['email']) > 20){
        setError("email","email is too long");
    }else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        setError("email","input must email");
    }

    if(empty($_POST["gender"])){
        setError("gender","gender is required");
    }else if(!in_array($_POST['gender'],['male','female'])){
        setError("gender","gender must be male or female");
    }

    validationEnd(true);
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
