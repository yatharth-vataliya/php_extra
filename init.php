<?php

/*$nothing=spl_autoload_register(function($class){
        echo "var_dump for $class variable :- ";
        var_dump($class);
        echo "<br/>";
        require 'classes.php';
        require 'bootstrap.php';
    });	*/
// require 'bootstrap.php';
// require 'classes.php';
/* spl_autoload_register(function ($class) {
    include $class . '.php';
});
*/
/* spl_autoload_register(function ($class){
     // require_once __DIR__ . '/' . strtolower(str_replace('\\', '/', $class) . '.php');
    // echo $class;
    echo $class.'.php';
    echo "<br/>";
    require_once $class.'.php';
 });*/
/* echo "<pre>";
 print_r(spl_classes());
 echo "</pre>";
*/
spl_autoload_register(function ($class) {
    // require $class.'.php';
    $parts = explode('\\', $class);
    print_r($parts);
    echo '<br/>';
    echo end($parts);
    echo '<br/>';
    require end($parts).'.php';
});

return [
    'nothing', 'is', 'here', 'why', 'are', 'you', 'looking', 'at', 'this', 'place', '?',
];
