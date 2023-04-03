<?php

abstract class ParentClass {
    abstract function toBeADoctor();
}

class ChildClass extends ParentClass {
    public function toBeADoctor()
    {
        $first = "success matriculation exam with high marks";
        $second = "join medical university";
        $third = "graduate with MBBS";
        return "I will be a doctor";
    }
}