<?php

function redirect(){
    header('location:phpinfo.php');
}


function check_return(){
    return redirect();
}

$file = fopen("return_1.txt","a+");

$something = check_return();

($something == NULL) ? fwrite($file,"NULL is return") : fwrite($file,"Nothing is return.");

fclose($file);

?>