<?php

require_once "functions.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $data = [
      "width" => $_POST["width"]." ft",
      "breadth" => $_POST["breadth"]. " ft",
      "area" => area($_POST["width"],$_POST["breadth"])." sqft"
    ];

    if(!empty($_FILES) && $_FILES['photo']['error'] === 0) {
        $photoName = upload('photo',PHOTO_DIR);
        $data["photo"] = url($photoName);
    }

    saveJsonFile(json_encode($data));

    echo response($data,201);

}