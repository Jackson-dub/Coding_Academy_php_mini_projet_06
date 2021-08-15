<?php

include_once "AMonster.php";

class RadScorpion extends AMonster{

public $id = 0;
public $closeTo = false;

    function __construct(){

            static $id;
            $id++;

            $this-> id = "#".$id;

        
        $this -> name = "RadScorpion";
        $this->hp = 80;
        $this -> ap = 50;
        $this -> damage = 25;
        $this -> apcost = 8;

        echo $this->id.": Crrr !".PHP_EOL;

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



    function __destruct(){

        echo $this->name.": SPROTCH !".PHP_EOL;

    }

}

