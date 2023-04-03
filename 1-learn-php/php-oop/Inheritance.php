<?php

// class A {
//     public $a = "a";
// }

// class B extends A {
//     public $b = "b";
// }

// class C extends B {
//     public $c = "c";
// }


// $b = new B;
// var_dump($b);

// $c = new C;
// var_dump($c);

class Animal {
    public $name;
    public $gender;
    public $lifeSpan = 100;

    function __construct($name,$gender)
    {
        $this->name = $name;
        $this->gender = $gender;

    }

    public function walk(){
        return __CLASS__." walk with 4 legs";
    }
}

class Bird extends Animal {

    public $lifeSpan = 5;
    public $canFly;

    function __construct($name,$gender,$canFly)
    {
        parent::__construct($name,$gender);
        $this->canFly = $canFly;
    }

    public function fly() {
        return __CLASS__." can fly";
    }

    public function walk()
    {
        print(parent::walk());
        print("\n");
        return __CLASS__." walk with 2 legs";
    }

}

class Mammal extends Animal {
    public function feeding(){
        return __CLASS__." feed milk";
    }
}

// class Dog extends Animal,Mammal {
    
// }

system("clear");

$bird = new Bird("sa ka lay","male",true);
print_r($bird);

// $m = new Mammal;
// print_r($m->feeding());