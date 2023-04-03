<?php


trait FrontendField {

    public $frontendDesignSkill = "Figma";
    public $frontendDevelopmentSkill = ["HTML","CSS","JS","API"];

    public function prototypeOnFigma(){
        return "Frontend Designer can create design on Figma";
    }

    public function frontendDevelopment(){
        return "Develop Website with ".join($this->frontendDevelopmentSkill);
    }

}

trait BackendField {

    public $systemDesign = "Understanding the requirement of system";
    public $databaseSkill = "mysql";
    public $backendLanguage = ["node","php"];

}

trait DeploymentField {

    public $shareHosting = "cPanel";
    public $cloud = "AWS";

}

class FullStackDeveloper {
    use FrontendField,BackendField,DeploymentField;
}

$me = new FullStackDeveloper;
print_r($me);