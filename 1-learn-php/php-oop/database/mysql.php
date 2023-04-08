<?php

system("clear");

$host = "localhost";
$username = "hhz";
$password = "asdffdsa";
$database = "san_kyi_tar";

$conn = new mysqli($host,$username,$password,$database);

// $sql = "INSERT INTO `my`.`students` ( `name`, `date_of_birth`, `birth_year`, `gender`, `weight`, `money`, `is_active`, `nation`, `address`) VALUES ( 'hein htet zan', '1994-07-22', '1994', 'male', '106', '1000', '1', 'mm', '48 shankone st');";

// $conn->query($sql);

// print_r($conn);

// $sql = "UPDATE students SET name = 'ko htet' WHERE id = 3747219 ";

// $conn->query($sql);

// $sql = "SELECT * FROM students WHERE id=3747219";
// $query = $conn->query($sql);

// print_r($query->fetch_object());

// $sql = "DELETE FROM students WHERE id=3747219";

// var_dump($conn->query($sql));

// $sql = "SELECT * FROM students LIMIT 3";
// $query = $conn->query($sql);

// print_r($query->fetch_object());
// print_r($query->fetch_object());
// print_r($query->fetch_object());
// var_dump($query->fetch_object());

// while($row = $query->fetch_object()){
//     print_r($row);
// }


// $sql = "INSERT INTO my (name,money) VALUES (?,?)";

// $stmt = $conn->prepare($sql);

// $stmt->bind_param("si",$name,$money);

// $name = "kyaw kyaw";
// $money = 300;
// $stmt->execute();

// $name = "zaw zaw";
// $money = 500;
// $stmt->execute();

// print_r($conn);