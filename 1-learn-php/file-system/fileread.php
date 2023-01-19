<?php

system("clear");

$txtFileName = "aa.txt";


$s = fopen($txtFileName,"a");

fwrite($s,"htet san kyi tar \n");

fclose($s);



// $txt = file_get_contents($txtFileName);
// $txt = readfile($txtFileName);

// $stream = fopen($txtFileName, "r");

// while(!feof($stream)){
//     var_dump(fgets($stream));
// }




// var_dump(fgets($stream));
// var_dump(feof($stream));
// var_dump(fgets($stream));
// var_dump(fgets($stream));
// var_dump(fgets($stream));
// var_dump(fgets($stream));
// var_dump(fgets($stream));
// var_dump(feof($stream));


// $txt = fread($stream, 15);
// $txt = file($txtFileName);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);



