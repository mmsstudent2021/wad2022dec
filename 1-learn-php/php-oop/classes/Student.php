<?php

class Student {

    public $name, $gender, $birthYear, $namePrefix, $age;

    function __construct($inputName,$inputGender,$inputBirthYear)
    {
        $this->name = $inputName;
        $this->gender = $inputGender;
        $this->birthYear = $inputBirthYear; 

        $this->namePrefix = $this->gender === "male" ? "Mr. " : "Ms. ";
        $this->age = date("Y") - $this->birthYear;
    }

    public function showFullName(){
        return $this->namePrefix . $this->name . "\n";
    }

    public function introduction(){
        return  " My name is $this->name and I was $this->age year".($this->age > 1 ? 's' : '')." old.";
    }

}