<?php

require_once "functions.php";

if (!empty($_GET["file"])) {
    $fileName = $_GET["file"];
    if (file_exists(RECORD_DIR . "/" . $fileName)) {
        $data = json_decode(file_get_contents(RECORD_DIR."/".$fileName),true);
        echo response($data);
    } else {
        echo response(["error" => "file not found"],404);
    }
} else {
    echo response(["error" => "file is required"],422);
}
