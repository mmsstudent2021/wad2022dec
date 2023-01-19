<?php
system("clear");

$fileName = "aa";
$fileExt = ".txt";
$folderName = "text-files";

// aa.txt

// var_dump(is_dir($folderName));
// if (!is_dir($folderName)) {
//     mkdir($folderName);
// }
// touch($folderName . "/" . "aa" . $fileExt);
// touch($folderName . "/" . "bb" . $fileExt);
// touch($folderName . "/" . "cc" . $fileExt);
// touch($folderName . "/" . "dd" . $fileExt);
// touch($folderName . "/" . "ee" . $fileExt);

// unlink($folderName . "/" . $fileName . $fileExt);

// rmdir($folderName);
if (is_dir($folderName)) {
    foreach (scandir($folderName) as $file) {
        // if ($file != "." && $file != "..") {
        //     echo $file;
        // }

        $currenFileName = $folderName."/".$file;

        if(is_file($currenFileName)){
            // echo $file."\n";
            unlink($currenFileName);
        }
    }
}
rmdir($folderName);
