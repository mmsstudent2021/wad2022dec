<?php

require_once "functions.php";

if(!file_exists(PHOTO_DIR)){
    if(mkdir(PHOTO_DIR)){
        logger(PHOTO_DIR." is created",35);
    }
}

if(!file_exists(RECORD_DIR)){
    if(mkdir(RECORD_DIR)){
        logger(RECORD_DIR." is created",36);
    }
}