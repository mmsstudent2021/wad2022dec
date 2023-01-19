<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<pre>";
    print_r(file($_FILES["photo"]["tmp_name"]));
    // print_r($_FILES);
    // $dir = "store";
    // move_uploaded_file(
    //     $_FILES["photo"]["tmp_name"],
    //     $dir . "/" . uniqid()."-".$_FILES["photo"]["name"]
    // );
}
