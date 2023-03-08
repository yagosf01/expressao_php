<?php

echo "OPERADOR DE ATRIBUIÇÃO <br>"; 

echo "------ += <br>------";

$k = 0;
$k += 10; // $k = $k + 10
echo $k . "<br>";

echo "----- -= ------ <br>";

$l = 0;
$l -= 10; // $l = $l - 10
echo $l . "<br>";;

echo "----- *= ----- <br>";

$ç = 0;
$ç *= 10; // $ç = $ç * 10
echo $ç . "<br>";

echo "------ /= ----- <br>";

$t = 0;
$t /= 10; // $t = $t / 10
echo $t . "<br>";

echo " ------ %= ------ <br>";

$z = 0;
$z %= 10; // $z = $z % 10
echo $z . "<br>";

echo "-----OPERADOR TERNÁRIO----- <br>"; 

    echo 20 > 10 ? "TRUE <br>" : "FALSE <br>"; //true
    echo 20 > 50 ? "TRUE <br>" : "FALSE <br>"; //false

    $w = 10;
    $q = 5;

    echo $w >= $q ? "true <br>" : "false <br>"; //true

    $numero1 = 10;
    $numero2 = 20; 

    echo $numero1 > $numero2 ? "true <br>" : "false <br>"; //true
    echo $numero2 > $numero1 ? "true <br>" : "false <br>"; //false

?>