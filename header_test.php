<?php

return header('location:js_send.php'); // but if we add the return statement with header function this will stop execution of the script after header function call

// the code after header() function redirection is always execute so we have to manually exit or die the script by the function exit() or die() or just by typing exit; or die; like below

exit; // manually exit the script

header('location: js_send.php'); // this will redirect to js_send.php but execute remaining script, we can stop execution by return keyword before header function or manually cally exit or die function of php

$handle = fopen('demo.txt','a+');

fwrite($handle, 'nothing');

fclose($handle);

header('location:mongodb.php'); // if script is not terminated manually then this header redirection will execute and all the code below this will execute as it is

?>