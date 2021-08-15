<?php


abstract class AWeapon{

    public string $name;
    public int $apcost;
    public int $damage;
    public bool $melee = false;

    function __construct($name,$apcost,$damage){

        if(gettype($name) !== "string" || !$name || $name == "Undefined"){
            throw new Exception("Error in AWeapon constructor. Bad parameters.");
        }else{

            $this -> name = $name;
        };

        if(gettype($apcost) !== "integer" || !$apcost || $apcost == "undefined"){
            throw new Exception("Error in AWeapon constructor; Bad parameters.");
        }else{
            $this -> apcost = $apcost;
        }

        if(gettype($damage) !== "integer" || !$damage || $apcost == "undefined"){
            throw new Exception("Error in AWeapon constructor; Bad parameters.");
        }else{
            $this -> damage = $damage;
        }

       
    }

    abstract public function attack(); 

    function getName(){
        return $this-> name;
    }

    function getApcost(){
        return $this->apcost;
    }

    function getDamage(){
        return $this -> damage;
    }

    function isMelee(){

    if($this->melee == true){
        return true;
    }else{
        return false;
    }
    }

}