<?php

include_once "AMonster.php";
include_once "ASpaceMarine.php";

class SpaceArena{

    public $readyToFight = [];
    public $readyToKill = [];

    function enlistMonsters($monsters){

        foreach($monsters as $monster){


        if(!$monster instanceof AMonster){

            throw new Exception("Stop tryin to cheat !");

        }else{

            $arrayMonster = array($monster->id => $monster);
            $readyToFight[] = array_merge($readyToFight,$arrayMonster);
            
        }

    }

}

    function enlistSpaceMarines($marines){

        foreach($marines as $marine){

            if(!$marine instanceof ASpaceMarine){

                throw new Exception("Stop trying to cheat !");

            }else{

                $arrayMarines = array($marine->name => $marine);

                if(!in_array($monster->name,$readyToKill)){

                    $readyToKill = array_merge($readyToKill,$arrayMarines);

                }

            }

        }



    }

    function fight(){

        $nbrMonster = array_sum($readyToFight);
        $nbrMarine = array_sum($readyToKill);

    
        if($nbrMarine == 0 || $nbrMarine == ""){
            echo "Those cowards ran away.".PHP_EOL;
            return false;
            die;
        };

        if( $nbrMonster == 0 ||  $nbrMonster == ""){
            echo " No monster available to fight.".PHP_EOL;
            return false;
            die;
        };

       function battle($readyToFight,$readyToKill){

        if(count($readyToFight) && count($readyToKill)){

            if($readyToKill[0]->battles == 0){
                echo $readyToKill[0]->name." has entered the arena.".PHP_EOL;
            };

            if($readyToFight[0]->battles == 0){
                echo $readyToKill[0]->id." has entered the arena.".PHP_EOL;
            };

            $readyToKill[0]->attack($readyToFight[0]);
            if($readyToKill[0]->success == false){
                if($readyToKill[0]->tooFar == true){
                    $readyToKill[0]->moveCloseTo($readyToFight[0]);
                }elseif($readyToKill[0]->ap < $readyToKill[0]->weapon->apcost){
                    $readyToKill[0]->recoverAP();
                }   
            };

            if($readyToFight[0]->hp <= 0){

                $readyToFight[0]->__destruct();
                $readyToFight = array_shift($readyToFight);

            }else{

                $readyToFight[0]->attack($readyToKill[0]);
                if($readyToFight[0]->success == false){
                    if($readyToFight[0]->closeTo == false){
                        $readyToFight[0]->moveCloseTo($readyToKill[0]);
                    }elseif($readyToFight[0]->ap < $readyToFight[0]->apcost){
                        $readyToFight[0]->recoverAP();
                    }
                }
            }

            if($readyToFight[0]->hp <= 0){

                $readyToKill[0]->__destruct();
                $readyToKill = array_shift($readyToKill);
            }
                
            $this->fight();

       } 
    }

    }

    }