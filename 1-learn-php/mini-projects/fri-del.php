<?php


$friends = [];
$dataFileName = "friend-data.json";

if (file_exists($dataFileName) && filesize($dataFileName)) {
    // echo "file shi tal";
    $friends = json_decode(file_get_contents($dataFileName), true);
}


array_splice($friends, $_GET["index"], 1);

// print_r($friends);

file_put_contents($dataFileName, json_encode($friends));

header("Location:fri-card.php");
