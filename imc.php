<?php
$altura=1.88;
$peso=88;
$imc= $peso/$altura**2;
if($imc<19){
    echo "Seu imc: $imc".PHP_EOL;
    echo "Abaixo do peso".PHP_EOL;
}elseif($imc<=19&&$imc<25){
    echo "Seu imc: $imc".PHP_EOL;
    echo "Peso Normal".PHP_EOL;
}elseif($imc<=25&&$imc<30){
    echo "Seu imc: $imc".PHP_EOL;
    echo"Sobre peso".PHP_EOL;
}elseif($imc<=30 && $imc<40){
    echo "Seu imc: $imc".PHP_EOL;
    echo"obesidade".PHP_EOL;
}elseif($imc>40){
    echo "Seu imc: $imc".PHP_EOL;
    echo "Obesidade morbida".PHP_EOL;
} 
       
?>