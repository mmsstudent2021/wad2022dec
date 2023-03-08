<?php

system("clear");
require_once "./core/connect.php";
require_once "./core/functions.php";

$tables = all("show tables");

foreach($tables as $table){
   
    run("DROP TABLE IF EXISTS ".$table['Tables_in_san_kyi_tar']);
}

// $q = run("SELECT (CONCAT('DROP TABLE IF EXISTS ',table_name,';' )) FROM information_schema.tables WHERE TABLE_SCHEMA = '$database';");


logger("All tables are dropped");


createTable("my","name varchar(20) NOT NULL","money int(11) NOT NULL");
createTable("inventories","name varchar(20) NOT NULL","price int(11) NOT NULL","stock int(11) NOT NULL");
createTable("users","name varchar(20) NOT NULL","email varchar(50) NOT NULL","gender enum('male','female') NOT NULL","address TEXT NOT NULL");

