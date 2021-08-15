<?php
include_once "IUnit.php";


abstract class ASpaceMarine implements IUnit{

    public $name;
    public $hp=0;
    public $ap=0;

    function __construct($name){

        $this -> name = $name;
    }

    function getName(){

       return $this-> name;

    }

    function getHp(){

        return $this->hp;

    }

    function getAp(){

        return $this->ap;

    }


    public function equip($param){}
    public function attack($param){}
    public function receiveDamage($param){}
    public function moveCloseTo($param){}
    public function recoverAP(){}


}