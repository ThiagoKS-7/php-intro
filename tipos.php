<?php
/*
* Tipos primitivos de dados
*/
$idade = 20; //integer
$salario = 1540.50; //double | float
echo gettype($idade), " ", gettype($salario)," \n"; // \n = PHP_EOL
// numa conta que resulta decimal, ele retorna decimal
$conta = 10/3;
echo "Conta: ",gettype($conta),"\n";
$booleana = true;
echo gettype($booleana)," \n";
$texto = "";
echo gettype($texto);