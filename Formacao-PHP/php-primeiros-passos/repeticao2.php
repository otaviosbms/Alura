<?php 

//contador = contador + 1
//contador += 1
//contador++




for ($contador = 1; $contador <= 15; $contador += 1){
    if ($contador == 13){
        continue;
    }
    echo "#$contador".PHP_EOL;
}