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
include_once "SpaceArena.php";



$test = new RadScorpion();
$test1 = new RadScorpion();
$test2 = new RadScorpion();
$GI = new TacticalMarine("Ryan");
$Joe = new AssaultTerminator("Joe");
$soldat = new AssaultTerminator("Bill");

$stadium = new SpaceArena();

print_r($stadium -> readyToKill);
print_r($stadium -> readyToFight);

$stadium -> enlistMonsters($test);
$stadium -> enlistMonsters($test1);
$stadium -> enlistMonsters($test2);
$stadium -> enlistSpaceMarines($GI);
$stadium -> enlistSpaceMarines($Joe);
$stadium -> enlistSpaceMarines($soldat);

print_r($stadium -> readyToKill);
print_r($stadium -> readyToFight);





