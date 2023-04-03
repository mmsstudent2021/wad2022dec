<?php


trait A {
    public $a = "a";
    public function aa() {
         return "this is aa";
    }
}

trait B {
    public $b = "b";
    public function bb() {
        return "this is bb";
   }
}

trait C {
    public $c = "c";
    public function cc() {
        return "this is cc";
   }
}

class Run {
    use A,B,C;
}

$run = new Run;

print_r($run);
print_r($run->aa());