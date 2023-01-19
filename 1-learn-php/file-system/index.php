<?php

// read write

// open
    // read & write

// $file = fopen("data.json","r");//stream
// $json = fread($file,filesize("data.json"));
// $myName = "hein htet zan";

// copy

// copy("data.json","info.json");

$newFileName = "aa.txt"; 

// if(!is_file($newFileName)){
//     touch($newFileName);
//     $f = fopen($newFileName,"w");

//     fwrite($f,$myName."\n");
//     fwrite($f,$myName);
//     fwrite($f,$myName);

//     fclose($f);
// }

$data = ["a"=>"aaa","b"=>"bbb","c"=>"ccc"];
$json = json_encode($data);
$f = fopen("data.json","w");
fwrite($f, $json);
fclose($f);




