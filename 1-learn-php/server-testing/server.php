<?php

// echo "<pre>";

// print_r($_REQUEST);
// print_r($_GET);
// print_r($_POST);

// print_r($_FILES);

// echo "My name is {$_POST['your_name']} and my email is {$_POST['your_email']}";

header("Content-type:application/json");
echo json_encode([$_POST,$_FILES]);
// header("HTTP/1.1 404 Not Found");
// header("Location:index.html");
// echo file_get_contents("php://input");


