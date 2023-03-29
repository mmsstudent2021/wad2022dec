<?php


spl_autoload_register(fn($className)=> require_once __DIR__."/classes/$className.php");