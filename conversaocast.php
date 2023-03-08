<?php
echo "OPERADOR CAST (CONVERSÃO) <br>";
$cast = (int) "12";
echo $cast ;
echo "<br>";
echo $cast + 10;
echo "<br>";

$castb = (float) "3.14432768";

if($castb === 3.14432768){
    echo "Mesmo tipo <br>";
}

echo "-------EXERCICIOS------ <br>";

$ex19 = (int) "testando";
echo $ex19;
echo "<br>"; // printou 0

$ex19a = (int) "12.9";
echo $ex19a;
echo "<br>";// printou 12

$ex19b = (int) "true";
echo $ex19b;
echo "<br>";// printou 0

$ex19c = (int) [1,2,3];
echo $ex19c;
echo "<br>";// printou 1

?>