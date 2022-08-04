<?php
/*
* Execute um programa que exiba todos os números ímpares até 100
*/

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        continue;
    } else {
        echo "$i \n";
    }
}