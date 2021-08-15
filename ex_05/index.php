<?php
include_once "AMonster.php";
include_once "ASpaceMarine.php";
include_once "IUnit.php";
include_once "AWeapon.php";
include_once "PlasmaRifle.php";
include_once "PowerFist.php";


class test extends AMonster{

    


}

class test2 extends ASpaceMarine{

}

class arme extends PowerFist{

}

$GI = new test2("Ryan");
$Joe = new test2("Joe");

$mufasa = new arme();
//$milner = new test2("Milner");
$mutant = new test("Ed");
$GI -> hp = 30;
$GI -> ap = 30;
$Joe -> hp = 20;
$Joe -> ap = 20;
//print_r($GI -> getWeapon());
//echo $GI -> name;
//$GI->attack($mufasa);
//echo ($mutant instanceof IUnit);
//echo $milner->getAp();
//$milner -> moveCloseTo($mutant);
//$GI -> equip($mufasa);
//$GI->attack($mutant);
$Joe -> equip($mufasa);
$GI -> equip($mufasa);

$GI->recoverAP();
echo $GI->getAp();
//$milner->recoverAP();
//$milner->attack($mutant);
//echo $milner->getAp();
$GI -> moveCloseTo($GI);
$GI->attack($mutant);
echo $GI->getAp();
//$GI -> __destruct();

