<?php

include_once "PlasmaRifle.php";
include_once "ASpaceMarine.php";

class TacticalMarine extends ASpaceMarine{

    function __construct($name){

        $this->name = $name;


        $this -> hp = 200;
        $this -> ap = 20;
       
            $this->weapon = new PlasmaRifle();
    
        echo $this->name." on duty.".PHP_EOL;

    }

    public function recoverAP(){

        if($this->hp <= 0){
            
            return false;

            die;

        }else{
        

            if($this->ap <=(50 - 9)){

                $this-> ap = ($this->ap + 9);

            }
        
        }

    }


    function __destruct(){

        echo $this->name." the Tactical Marine as fallen !".PHP_EOL;
        $this->weapon->taken = false;

    }



}