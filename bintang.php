<?php
$n = $i=10;
// for($i=$rows; $i >= 1; $i--){
    // for($s=0; $s < $rows-$i; $s++){
    //     echo " ";
    // }
    // for($j=1;$j <=$i; $j++){
    //     echo "*";
    // }
    // echo PHP_EOL;

    while ($i--)
    echo str_repeat(' ', $n - $i).str_repeat('* ',$i )."\n";
// }