<?php

system("clear");

$db = "db.sqlite";
$tableName = "users";

try{
    $conn = new SQLite3($db);
}catch(Exception $e){
    print_r($e);
}

// $sql = "CREATE TABLE $tableName (
//     id INTEGER PRIMARY KEY,
//     name VARCHAR(30),
//     money FLOAT
// )";
// var_dump($conn->exec($sql));

$sql = "INSERT INTO users (name,money) VALUES (:name,:money)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":name",$name);
$stmt->bindParam(":money",$money);

$name = "zaw zaw";
$money = 1500;
$stmt->execute();

$name = "su su";
$money = 750;
$stmt->execute();

$name = "aye aye";
$money = 2000;
$stmt->execute();
