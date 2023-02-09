<?php

require_once "./1-connect.php";

$sql = "INSERT INTO my (name,money) VALUES ('kk',150000),('aye aye',100000)";

if(mysqli_query($conn,$sql)){
    echo "aung p";
}