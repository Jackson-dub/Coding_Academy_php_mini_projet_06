<?php

include_once "AMonster.php";

class SuperMutant extends AMonster{

    function __construct(){

        static $id;
        $id++;

        $this-> id = "#".$id;


        $this->name = "SuperMutant";

        echo $this -> name." ".$this->id.": Roaarrr !".PHP_EOL;
        
        $this-> hp = 170;
        $this -> ap = 20;
        $this -> damage = 60;
        $this -> apcost = 20;

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

        $this -> hp = $this-> hp + 10;

        if($this -> hp > 170){

            $this -> hp = 170;

        }

    }


    function __destruct(){

        echo $this -> name." ".$this->id.": RUrgh !".PHP_EOL;

    }

}