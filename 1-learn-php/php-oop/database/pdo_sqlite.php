<?php

system("clear");

$db = "db.sqlite";

try{
    $conn = new PDO("sqlite:$db");
}catch(Exception $e){
    print_r($e);
}


$sql = "SELECT * FROM users";

$query = $conn->query($sql);

$users = $query->fetchAll(PDO::FETCH_OBJ);

print_r($users);