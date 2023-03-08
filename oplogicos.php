<?php
echo "OPERADORES LOGICOS <br>";
echo 'AnD: && <br>';
echo "OR: || <br>";
echo "NOT:  ! <br>";

echo "EXERCICIO VERIFIQUE: 15>5 AND 'JOAO' === 'JOAO' / 'TESTE' > 5 AND 1 / 2==3 AND 5>=3";

if(15 > 5 && "João" === "João"){
    echo "Comparação 1 é Verdadeiro <br>";
}

if("teste" > 5 && 1){
    echo "Compração 2 é Verdadeiro <br>";
}

if(2==3 && 5 > 3){
    echo "Comparação 3 é Verdadeiro <br>";
}

// EXERCICIOS OR 

if(12 < 5 || "João" === "João"){
    echo "Comparação OR 1 é verdadeira <br>";
}

if(1 > 5 || 1){
    echo "Comparação OR 2 é verdadeira <br>";
}

if(20==="20" && 51 >= 31){
    echo "Comparação OR 3 é verdadeira <br>";
}
?>