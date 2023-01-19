<?php

header("Content-type:Application/json");


if ($_SERVER["REQUEST_METHOD"] === "POST") {


    // echo json_encode([$_FILES,$_POST]);


    // die();

    $result = [
        "width" => $_POST["width"] . "ft",
        "breadth" => $_POST["breadth"] . "ft",
        "area" => ($_POST["width"] * $_POST["breadth"]) . "sqft"
    ];

    // print_r($_POST);

    $dir = "records";
    $photoDir = "photos";

    // store photo
    if (!file_exists($photoDir)) {
        mkdir($photoDir);
    }


    // echo var_dump(!empty($_FILES));

    // die();

    if(!empty($_FILES) && $_FILES["photo"]["error"] === 0){
        $newPhotoName = $photoDir."/".uniqid()."-photo.". pathinfo($_FILES["photo"]["name"])["extension"];
        move_uploaded_file($_FILES["photo"]["tmp_name"],$newPhotoName);
        $result["photo"] = $newPhotoName;
    }

    // store data
    if (!file_exists($dir)) {
        mkdir($dir);
    }

    $response = json_encode($result);
    $newFileName = $dir . "/" . "r-" . uniqid() . "-" . time() . ".json";
    $file = fopen($newFileName, "w");
    fwrite($file, $response);
    fclose($file);

    header("HTTP/1.1 201 File Created");


    echo $response;
}
