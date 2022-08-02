<?php
echo "FESTA SIMULADA \nSó entra quem tem 18 anos ou mais ou quem estiver acompanhado de um responsável.\n\n";
echo "Digite a sua idade: ";
$idade = rtrim(fgets(STDIN)); // JEITO QUE INPUTA STRING E NUMERO (readline só pega string)
$nPessoas = 2;
if ($idade >= 18) {
    echo "Entrou, tem $idade anos;\n Logo é maior de idade\n";
} else if ($nPessoas ==2 && $idade < 18 ){
    echo "Entrou, tem $idade anos, mas está acompanhado;\n";
}else {
    echo "Não Entrou, tem $idade;\n Logo é menor de idade\n";
}


echo "\n\nTERNÁRIO\n\n";
echo $idade >= 18 ? "Entrou, tem $idade anos;\n Logo é maior de idade\n" : "Não Entrou, tem $idade;\n Logo é menor de idade\n";