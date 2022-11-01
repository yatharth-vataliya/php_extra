<?php

return header('location:js_send.php'); // but if we add the return statement with header function this will stop execution of the script after header function call

// the code after header() function redirection is always execute so we have to manually exit or die the script by the function exit() or die() or just by typing exit; or die; like below

exit; // manually exit the script

$handle = fopen('demo.txt','a+');

fwrite($handle, 'nothing');

fclose($handle);

header('location:mongodb.php'); // if script is not terminated manually then this header redirection will execute and all the code below this will execute as it is

?>
