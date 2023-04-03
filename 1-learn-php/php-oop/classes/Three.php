<?php

class Three {

    public static $a = "a static property";

    public static function b(){
        return "this is b static method";
    }

    public static function c(){
        return self::$a . self::b();
    }

}