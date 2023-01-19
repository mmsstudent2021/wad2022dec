<?php

require_once "functions.php";

if (!empty($_GET["file"])) {
    $fileName = $_GET["file"];
    if (file_exists(RECORD_DIR . "/" . $fileName)) {
        unlink(RECORD_DIR . "/" . $fileName);
        responseNoContent();
    } else {
        echo response(null,404);
    }
} else {
    echo response(["error" => "file is required"],422);
}
