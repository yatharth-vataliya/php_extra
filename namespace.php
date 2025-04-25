<?php

// echo DIRECTORY_SEPARATOR."<br>";
// use App\Core\nothing;
/* use App\Core\Helper; */

namespace withnamespace;

require_once 'init.php';
require_once 'withoutnamespace.php';
use hell_to_heaven;
use now;

now::call_the_hell();
hell_to_heaven::heaven();
class colon
{
    public function just_call_it()
    {
        display('my name is yatharth vataliya from saurashtra unversity');
    }
}
$colon = new colon;
$colon->just_call_it();
function why(?string $str)
{
    echo $str;
}
// nothing::display();
// echo "<br/>";
/* Helper::display_(); */
// echo "<br/>";
/* Helper::just_dir(); */

// $new =new MyClass();
/*MyClass::drama();
echo "<br/>";*/
// nothing::display();
// content();
// withoutnamespace\display();

namespace A\B\C;

class Exception extends \Exception {}

$a = new Exception('hi'); // $a is an object of class A\B\C\Exception
$b = new \Exception('hi'); // $b is an object of class Exception

// $c = new ArrayObject; // fatal error, class A\B\C\ArrayObject not found
