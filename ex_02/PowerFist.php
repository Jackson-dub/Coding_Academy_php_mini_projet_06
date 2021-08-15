<?php
include_once "AWeapon.php";

class PowerFist extends AWeapon{


    function __construct(){

        parent::__construct("Power Fist",8,50);

        $this->melee = true;

    }

    
function attack(){
     
    echo "SBAM".PHP_EOL;
}

}