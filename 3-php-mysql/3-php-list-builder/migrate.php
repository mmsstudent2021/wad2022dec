<?php

system("clear");
require_once "./core/connect.php";
require_once "./core/functions.php";

// $tables = all("show tables");

// foreach($tables as $table){
   
//     run("DROP TABLE IF EXISTS ".$table['Tables_in_san_kyi_tar']);
// }

$q = run("SELECT (CONCAT('DROP TABLE IF EXISTS ',table_name,';' )) FROM information_schema.tables WHERE TABLE_SCHEMA = '$database';");

dd($q);

logger("All tables are dropped");



createTable("my","name varchar(20) NOT NULL","money int(11) NOT NULL");

