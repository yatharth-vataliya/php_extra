<?php

// all the method that are declare in interface must be public
// can not use abstract keyword at this.
interface a
{
    public static function display(array $val);

    public function foo();
}

interface b extends a
{
    public static function display(array $val);

    public function baz(Baz $baz);
    // protected function baz(Baz $baz); // this will throw Fatal error: Access type for interface method b::baz() must be omitted in G:\htdocs\PHP_EXTRA\interface.php on line 14;
    // private function baz(Baz $baz); // this will throw Fatal error: Access type for interface method b::baz() must be omitted in G:\htdocs\PHP_EXTRA\interface.php on line 14
}

interface n extends a, b
{
    public static function display(array $val);
}

// This will work
class c implements b, n
{
    public static function display(array $val) {}

    public function foo() {}

    public function baz(Baz $baz) {}
}

// This will not work and result in a fatal error
class d implements b
{
    public static function display(array $val) {}

    public function foo() {}

    public function baz(Baz $foo) {}
}
interface x
{
    const b = 'Interface constant';
}

// Prints: Interface constant
echo x::b;

// This will however not work because it's not allowed to
// override constants.
class y implements x
{
    const b = 'Class constant';
}

?> 