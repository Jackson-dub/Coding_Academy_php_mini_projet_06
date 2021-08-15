<?php
include_once "PowerFist.php";
include_once "ASpaceMarine.php";


class AssaultTerminator extends ASpaceMarine{

    function __construct($name){

        $this ->name = $name;

        echo $this->name." has teleported from space.".PHP_EOL;

        $this-> hp = 150;
        $this->ap = 30;
        $this -> weapon = new PowerFist();

    }



    function __destruct(){

        echo "BOUUUMMMM ! ".$this->name." has exploded.".PHP_EOL;
        $this->weapon->user= "";

    }

    public function receiveDamage($param){


        if($this->hp <= 0){
            
            return false;

            die;

        }else{

            $reducedDamage = $param - 3;

            if( $reducedDamage < 1){

                $reducedDamage = 1;

            }
            
            $this -> hp = ($this -> hp - $reducedDamage);
        }

    }


}