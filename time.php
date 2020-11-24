<?php

$t1 = microtime(true);


for($i = 0; $i < 100000; $i++){
    echo "$i \n";
}

$t2 = microtime(true);

$t3 = $t2 - $t1;

echo $t3;

?>