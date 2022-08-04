<?php
$i = 1;
echo "\nWHILE LOOP CONTINUE - Não funciona\n";
/*
while ($i <= 15) {
    if ($i == 13) {
        //pula iteração - no while ñ funfa
        continue;
    }
    echo "$i ";
    $i ++;
}
*/
echo "\nFOR LOOP CONTINUE\n";
for ($j = 1; $j <= 15; $j++) {
    if ($i == 13) {
        //pula iteração
        continue;
    }
    echo "$j ";
}

echo "\nWHILE LOOP BREAK\n";
while ($i <= 15) {
    if ($i == 13) {
        //pula iteração
        break;
    }
    echo "$i ";
    $i ++;
}
echo "\nFOR LOOP BREAK\n";
for ($j = 1; $j <= 15; $j++) {
    if ($j == 13) {
        break;
    } else {
        echo "$j ";
    }
}
echo "\n";