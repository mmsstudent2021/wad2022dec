<?php


class Person {

    // properties

    public $skinColor = "black";
    public $appearance;


    protected $money;
    protected $gfName;

    private $fbPassword = "asdffdsa";

    public function setFbPassword($newFbPassword){
        
        $this->fbPassword = $newFbPassword;
    }

    public function getFbPassword(){
        return $this->fbPassword;
    }




    // methods
    public function walk(){
        return "can walk";
    }

    public function talk(){
        return "can talk";
    }


    protected function teach(){
        return "can teach";
    }

    protected function learn(){
        return "can learn";
    }

    private function saving(){
        return "save money in bank";
    }

    private function flirt(){
        return "....";
    }


}