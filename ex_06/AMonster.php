<?php
include_once "IUnit.php";

abstract class AMonster implements IUnit{

    public $name;
    public $hp=0;
    public $ap=0;
    public $damage = 0;
    public $apcost = 0;
    public $type = "melee";
    private $closeTo = false;

    function __construct($name){

        $this -> name = $name;
    }

    function getName(){

        if($this->hp <= 0){
            
            return false;

            die;

        }else{


       return $this-> name;

        }

    }

    function getHp(){

        return $this->hp;

    }

    function getAp(){

        if($this->hp <= 0){
            
            return false;

            die;

        }else{

        return $this->ap;
        }
    }

    function getDamage(){

        if($this->hp <= 0){
            
            return false;

            die;

        }else{


        return $this -> damage;

        }

    }

    public function equip($param){

        if($this->hp <= 0){
            
            return false;

            die;

        }else{


        echo "Monsters are proud and fight with their bodies.".PHP_EOL;

        }
    }

   
    public function attack($param){

        if($this->hp <= 0){
            
            return false;

            die;

        }else{

                        if(!$param instanceof IUnit){

                            throw new Exception("Error in AMonster. Parameter is not an IUnit.");
                
                        }else{


                            if(gettype($param) == "object" && $param->name !== $this->name){

                                if($this->closeTo == false){

                                    echo $this->name.": I'm too far away from ".$param->name.".".PHP_EOL;
                                }else{

                                    if($this -> ap >= $this -> apcost){

                                        $this->ap = ($this-> ap - $this -> apcost);


                                        echo $this->name." attacks ".$param->name.".".PHP_EOL;

                                        $param->receiveDamage($this->damage);

                                        $this->closeTo = false;

                                    }

                                };

             
                            };

                        }
            
            }

    }


    public function receiveDamage($param){

        if($this->hp <= 0){
            
            return false;

            die;

        }else{

            $this -> hp = ($this -> hp - $param);
        }

    }

    
    public function moveCloseTo($param){

        if($this->hp <= 0){
            
            return false;

            die;

        }else{

        if($param){


            if($param instanceof IUnit){

            
                if($param->name !== $this->name){
        
                    echo $this->name." is moving closer to ".$param->name.".".PHP_EOL; 
                   
                    $this->closeTo = true;
                }
    
         }
         else{
    
            throw new Exception("Error in AMonster. Parameter is not an IUnit.");
    
         }
    

        }  
}

    }



    public function recoverAP(){

        if($this->hp <= 0){
            
            return false;

            die;

        }else{
        

            $this-> ap = ($this->ap + 7);
                
                if( $this-> ap > 50) {

                    $this-> ap = 50;
        
                   }
        
        }

    }



}