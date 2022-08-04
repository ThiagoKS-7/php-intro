<?php
echo "Digite a sua altura (m): ";
$altura = rtrim(fgets(STDIN));
echo "Digite o seu peso (kg): ";
$peso = rtrim(fgets(STDIN));

$imc = $peso / ($altura ** 2);
if ($imc >= 18.5 && $imc <= 24.9) {
    echo "Seu imc é $imc\nAbaixo de 24.9\nNormal\n";
} else if ($imc >= 25 && $imc <= 29.9) {
    echo "Seu imc é $imc\nEntre 25 e 29.9\nSobrepeso\n";
} else if ($imc > 30 && $imc <= 40) {
    echo "Seu imc é $imc\nAcima de 30 e menor/igual a 40\nObesidade\n";
} else if ($imc > 40){
    echo "Seu imc é $imc\nAcima de 40\nObesidade grave\n";
} else {
    echo "Erro no cálculo\n";
}