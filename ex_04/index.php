<?php
include_once "AMonster.php";
include_once "ASpaceMarine.php";
include_once "IUnit.php";

class test extends AMonster{

    


}

class test2 extends ASpaceMarine{

}

$arraytest = [];

$milner = new test("Milner");
$mutant = new test("Ed");
$milner -> hp = 30;
$mutant -> hp = 30;
var_dump($mutant -> closeTo);
//echo $milner -> name;
//$milner->attack($mutant);
//echo ($mutant instanceof IUnit);

$mutant -> moveCloseTo($milner);
var_dump($mutant -> closeTo);
$mutant -> moveCloseTo($milner);

//$milner->attack($mutant);
//echo $milner->getAp();
//$milner->recoverAP();
//echo $milner->getAp();
//$milner->recoverAP();

//echo $milner->getAp();

