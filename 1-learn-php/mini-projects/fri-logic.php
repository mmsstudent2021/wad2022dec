<?php

$friends = [];
$dataFileName = "friend-data.json";

if (file_exists($dataFileName) && filesize($dataFileName)) {
    // echo "file shi tal";
    $friends = json_decode(file_get_contents($dataFileName),true);
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // print_r($_FILES);

    if ($_FILES["fri_photo"]["error"] === 0) {
        $dir = "friend-zone";
        echo "<pre>";

        $newName = $dir . "/" . uniqid() .
            "-" .
            "friend" .
            "." .
            pathinfo($_FILES["fri_photo"]["name"])["extension"];

        move_uploaded_file($_FILES["fri_photo"]["tmp_name"], $newName);

        $info = $_POST;
        $info["photo"] = $newName;

        array_push($friends,$info);

        // print_r($friends);


        $fdata = fopen($dataFileName,"w");

        fwrite($fdata,json_encode($friends));


        // $infoText = json_encode($info);
        // fwrite($fdata,$infoText);

        // // echo $infoText;

        fclose($fdata);

        header("Location:fri-card.php");
    }



    // echo $newName;

    // $nameArr = explode(".",$_FILES["fri_photo"]["name"]);
    // print_r(end($nameArr));

    // print_r(pathinfo($_FILES["fri_photo"]["name"]));


}
