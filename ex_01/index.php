<?php
include_once "AWeapon.php";

class Test extends AWeapon{

       function attack(){

        }
}
 


try{

    new Test(25,"a","a");

}catch(Exception $e){

   echo $e->getMessage();

}

