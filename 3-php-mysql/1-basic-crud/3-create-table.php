<?php

require_once "./1-connect.php";

$sql = "CREATE TABLE `san_kyi_tar`.`my` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `money` INT NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

if(mysqli_query($conn,$sql)){
    echo "aung p";
}