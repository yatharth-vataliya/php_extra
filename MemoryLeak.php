<?php

function memory_leak()
{
    $array = [];
    for ($i = 0; $i < 100000; $i++) {
        $array[] = str_repeat('dummy statement', 1000);
    }
    return $array;
}

$data = memory_leak();
sleep(10);
echo "Memory used: " . memory_get_usage() / 1024 / 1024 . " bytes \n";

// Above mentioned code will leak memory because $data variable is never unset so i will not free any memory

unset($data); // here we are releasing memory so now code is memory safe
sleep(10);

echo "Memory used: " . memory_get_usage() / 1024 / 1024 . " bytes \n";
