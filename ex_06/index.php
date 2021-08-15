<?php
include_once "AMonster.php";
include_once "ASpaceMarine.php";
include_once "IUnit.php";
include_once "AWeapon.php";
include_once "PlasmaRifle.php";
include_once "PowerFist.php";
include_once "TacticalMarine.php";
include_once "AssaultTerminator.php";

class test extends AMonster{

    


}

class test2 extends ASpaceMarine{

}

class arme extends PlasmaRifle{

}

$GI = new TacticalMarine("Ryan");
$Joe = new AssaultTerminator("Joe");

$mufasa = new arme();
$milner = new test2("Milner");
//$mutant = new test("Ed");
//$GI -> hp = 30;
//$GI -> ap = 30;
print_r($Joe -> getWeapon());
//echo $GI -> name;
$GI->attack($GI);
//echo ($mutant instanceof IUnit);
//echo $milner->getAp();
//$milner -> moveCloseTo($mutant);
$Joe -> equip($mufasa);
echo $Joe->getHp()."\n";

$GI->recoverAP();
echo $GI->getAp()."\n";
//$milner->recoverAP();
//$milner->attack($mutant);
//echo $milner->getAp();
//$GI -> moveCloseTo($mutant);
//$GI->attack($mutant);
echo $GI->getAp()."\n";
//$GI -> __destruct();

