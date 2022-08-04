<?php
echo "Digite um número de 1 a 10: ";
$numero = rtrim(fgets(STDIN));

for ($i = 1; $i <= 10; $i++) {
    $res = $i * $numero;
    echo "$i x $numero => $res;\n";
}