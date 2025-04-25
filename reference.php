<?php

$_REQ = &$_SERVER['REQUEST_METHOD'];
($_REQ == 'POST') and ($what = 'it`s a POST');
($_REQ == 'GET') and ($what = 'it`s a GET');
isset($what) and print $what;
$_REQ = 'nothing is here ';
var_dump($_REQ);
var_dump($_SERVER['REQUEST_METHOD']);

/*$numWidgets = 10;

function &getNumWidgets() {
  global $numWidgets;
  return $numWidgets;
}

$numWidgetsRef =& getNumWidgets();
$numWidgetsRef--;
echo "$numWidgets = $numWidgets<br>";  // Displays "9"
echo "$numWidgetsRef = $numWidgetsRef<br>";  // Displays "9"
*/

/*class display_{

public $name="hello";
public function &display(){
    echo "display is called ";
    global $name;
    return $name;
}

}

$display=new display_();
$name=$display->display();
// $name="yatharth";
// echo $display->name;
var_dump($name);
*/

/*function doIt ($fn) {
  echo "doIt\n";
  return $fn();
}

function doMe () {
  echo "doMe\n";
}

// I am using a closure here.
// There may be a more clever way to "get the function-object" representing a given
// named function, but I do not know what it is. Again, I *don't use PHP* :-)
echo doIt(function () { doMe(); });*/

/*$bands = array( "The Who", "The Beatles", "The Rolling Stones" );

foreach ( $bands as &$band ) {
  $band = strtoupper( $band );
}

echo "<pre>";
print_r( $bands );
echo "</pre>";*/

/*function func1(){
    echo 'echo1 ';
    return 'return1';
}

function func2($func){
    echo 'echo2 ' . $func();
}

func2('func1');
*/
// http_response_code(404);
