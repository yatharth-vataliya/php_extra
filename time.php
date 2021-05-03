<?php

$t1 = microtime(true);


for ($i = 0; $i < 10000000; $i++) {
    $file = fopen('time.txt', 'a+');
    fwrite($file, 'This is time test with file write');
    fclose($file);
    echo "$i \n";
}

$t2 = microtime(true);

$t3 = $t2 - $t1;

echo $t3;
