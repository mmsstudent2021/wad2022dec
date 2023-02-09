<?php

require_once "./1-connect.php";

$sql = "UPDATE my SET name='zaw zaw' WHERE id = 3";

if(mysqli_query($conn,$sql)){
    echo "UPDATE Row";
}