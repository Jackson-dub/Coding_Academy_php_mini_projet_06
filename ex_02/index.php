<?php
include_once "AWeapon.php";
include_once "PlasmaRifle.php";
include_once "PowerFist.php";

$rifle = new PlasmaRifle();
echo $rifle -> getName()."\n";
echo $rifle -> getDamage()."\n";
echo $rifle -> getApcost()."\n";
echo $rifle->isMele()."\n";
$rifle->attack();

$fist = new PowerFist();
echo $fist -> getName()."\n";
echo $fist -> getDamage()."\n";
echo $fist -> getApcost()."\n";
echo $fist->isMele()."\n";
$fist->attack();

