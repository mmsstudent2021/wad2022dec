<?php

header("Content-type:Application/json");

$dir = "records";

// echo json_encode($_SERVER);

if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
    if (!empty($_GET["file"])) {
        $fileName = $_GET["file"];
        if (file_exists($dir . "/" . $fileName)) {
            unlink($dir . "/" . $fileName);

            header("HTTP/1.1 204 No Content");

            echo json_encode(["message" => "file deleted"]);
        } else {
            echo json_encode(["error" => "file not found"]);
        }
    } else {
        echo json_encode(["error" => "file is required"]);
    }
}
