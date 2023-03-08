<?php
echo "Exponenciação = (**) <br>";
echo 5 ** 2;
echo "<br>";

//ou

$a = 7;
$b = 4;

echo $a ** $b;
echo "<br>";
 
echo "Concatenação  . (ponto) <br>";

$nome = 'Yago';
$sobrenome = 'Figuredo';

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
echo "<br>";

$a = "Testando";
$b = "Concatenação";

echo $a . " a " . $b;
echo "<br>";

$marca = "Audi"; 
$motor = "2.0 Turbo";
$vel_max = 299;

echo "O carro da ". $marca . "Tem uma motorização de ". $motor . " E uma velocidade maxima de ". $vel_max ." Km/h";
echo "<br>";
?>