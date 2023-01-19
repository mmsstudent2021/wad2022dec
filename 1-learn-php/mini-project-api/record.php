<?php

header("Content-type:Application/json");

$dir = "records";

$files = scandir($dir);

$result = [];

// print_r($files);

foreach($files as $file){
    if($file != "." && $file != ".."){
        $data = json_decode(file_get_contents($dir."/".$file),true);
        $data["file"] = $file;
        array_push($result,$data);
    }
}

// print_r($result);

$response = json_encode($result);

echo $response;
