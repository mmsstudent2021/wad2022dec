<?php

$filePath = "area-records/".$_GET["name"];

if(is_file($filePath)){
    unlink($filePath);
}

header("Location:area-calc.php");
