<?php
include_once "AMonster.php";
include_once "ASpaceMarine.php";
include_once "IUnit.php";
include_once "AWeapon.php";
include_once "PlasmaRifle.php";
include_once "PowerFist.php";
include_once "TacticalMarine.php";
include_once "AssaultTerminator.php";
include_once "RadScorpion.php";



$test = new RadScorpion();

$GI = new TacticalMarine("Ryan");
$Joe = new AssaultTerminator("Joe");
//$milner = new test2("Milner");
//$mutant = new test("Ed");
//$GI -> hp = 30;
//$GI -> ap = 30;
//echo $GI -> name;
echo $GI->getHp()."\n";
$test->attack($GI);
echo $GI->getHp()."\n";
//$test->moveCloseTo($GI);
$test->attack("you");
echo $GI->getHp()."\n";
//echo ($mutant instanceof IUnit);
//echo $milner->getAp();
//$milner -> moveCloseTo($mutant);
//$Joe -> equip($mufasa);
//echo $Joe->getHp()."\n";

//$GI->recoverAP();
//echo $GI->getAp()."\n";
//$milner->recoverAP();
echo $Joe->getHp()."\n";
$test->attack("me");
echo $Joe->getHp()."\n";
$test->moveCloseTo($test);
$test->attack($Joe);
echo $Joe->getHp()."\n";
//echo $milner->getAp();
//$GI -> moveCloseTo($mutant);
//$GI->attack($mutant);
//echo $GI->getAp()."\n";
//$GI -> __destruct();

