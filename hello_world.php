<?php
/*
* SENSIBILIDADE COM ASPAS = string TEM q ser ", char TEM q ser '
* senão coisas como \n, \t, etc, não funcionam
*/
$hello = "Hello World, ";
$name = "name = Thiago";
$age = " idade = 21 \n";
//Concatenação de variáveis string é com vírgula
echo $hello,$name,$age;

/*
* CONTAS
*/
$soma = (32 + 5);
$subtracao = $soma - 23;
$divisao = $subtracao / 2;
$potencia = 2 ** 3;
$resto = 10 % 3;
$teste = sqrt($divisao);
// se tem valor junto com string, usa template sting
echo "Resultado: raiz => {$teste},\npotencia => {$potencia},\nresto => {$resto}"; 