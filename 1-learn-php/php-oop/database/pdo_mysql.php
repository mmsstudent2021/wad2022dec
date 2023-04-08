<?php


system("clear");

$host = "localhost";
$username = "hhz";
$password = "asdffdsa";
$database = "san_kyi_tar";


try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$database",
        $username,
        $password
    );
}catch(PDOException $e){
    print_r($e);
}

// $sql = "INSERT INTO my (name,money) VALUES ('pdo',500)";
// $conn->query($sql);

// $stmt = $conn->prepare("INSERT INTO my (name,money) VALUES (:name,:money)");

// $stmt->bindParam(":name",$name);
// $stmt->bindParam(":money",$money);

// $name = "su su";
// $money = 400;

// var_dump($stmt->execute());

// $sql = "SELECT * FROM my";
// $query = $conn->query($sql);
// $users = $query->fetchAll(PDO::FETCH_OBJ);

// print_r($users);

// $sql = "SELECT * FROM my WHERE id = 132";
// $query = $conn->query($sql);
// $user = $query->fetch(PDO::FETCH_OBJ);

// print_r($user);

// $stmt = $conn->prepare("UPDATE my SET name=:name,money=:money WHERE id = :id");
// $stmt->bindParam(":name",$name);
// $stmt->bindParam(":money",$money);
// $stmt->bindParam(":id",$id);

// $name = "yaw yaw";
// $money = 1500;
// $id = 132;

// var_dump($stmt->execute());

// $sql = "DELETE FROM my WHERE id = 132";
// var_dump($conn->query($sql));

// $stmt = $conn->prepare("DELETE FROM my WHERE id = :id");
// $stmt->bindParam(":id",$id);
// $id = 133;
// var_dump($stmt->execute());