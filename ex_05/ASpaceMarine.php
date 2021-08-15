<?php
include_once "IUnit.php";


abstract class ASpaceMarine implements IUnit{

    public $name;
    public $hp=0;
    public $ap=0;
    public $weapon;
    private $tooFar = false;

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

    function getWeapon(){

        if($this->hp <= 0){
            
            return false;

            die;

        }else{

        return $this->weapon;

        }
    }



    public function receiveDamage($param){


        if($this->hp <= 0){

            $this->weapon->taken = false;
            
            return false;

            die;

        }else{

            $this -> hp = ($this -> hp - $param);
        }

    }


    public function equip($param){

            if($this->hp <= 0){
                    
                return false;

                     die;

            }else{



                if($param instanceof AWeapon){

                    if($param->taken == false){

                        $this -> weapon = $param;

                        echo $this->name." has been equipped with a ".$param->name.".".PHP_EOL;

                        $param->taken = true;

                        if($param -> melee == true){

                           $this->tooFar = true;

                        }
                    
                    }

                }else{

                    throw new Exception("Error in ASpaceMarine. Parameter is not an AWeapon.");

                }

            }

    }


    public function attack($param){

         if($this->hp <= 0){
                    
            return false;

                    die;

            }else{

                
                        if($param instanceof IUnit){

                            if($param->name !== $this->name){

                                if(!$this->weapon){

                                    echo $this->name.": Hey, this is crazy. I'm not going to fight this empty handed.".PHP_EOL;

                                }else{

                                    if($this -> tooFar == true){

                                        echo $this->name.": I'm too far away from ".$param->name.".".PHP_EOL;

                                    }else{

                                            if($this->ap >= $this->weapon->apcost){

                                                $this->weapon->attack();

                                                $this -> ap = ($this-> ap - $this->weapon->apcost);

                                                echo $this->name." attacks ".$param->name." with a ".$this->weapon->name.".".PHP_EOL;

                                                 $param->receiveDamage($this->weapon->damage);

                                            }
                                        }
                                }
                        }
        
                    }else{
                        
                        throw new Exception("Error in ASpaceMarine. Parameter is not an IUnit.");         
                     }
                
            }

        }



    public function moveCloseTo($param){


            if($this->hp <= 0){
                
                return false;
    
                        die;
    
                }else{

            if($param){


                if($param instanceof IUnit){

                
                    if(gettype($param) == "object" && $param -> name !== $this->name && $this->tooFar == true){

                        echo $this->name." is moving closer to ".$param->name.".".PHP_EOL; 
                        $this->tooFar = false;
                    }

        
                }else{

                    throw new Exception("Error in ASpaceMarine. Parameter is not an IUnit.");
            }
            

            }

        }

    }

    public function recoverAP(){

        if($this->hp <= 0){
            
            return false;

            die;

        }else{
        

            $this-> ap = ($this->ap + 9);

           if( $this-> ap > 50) {

            $this-> ap = 50;

           }
        
        }

    }

 

}