<?php

$n = 100;

for ($i = 1; $i <= $n; $i++){
    if ($i % 3 === 0 && $i % 5 === 0){
        echo "Mari Berkarya";
    } else if($i % 3===0) {
        echo "Mari";
    } else if ($i % 5 === 0){
        echo "Berkarya";
    } else {
        echo $i;
    }
    echo ",";
}