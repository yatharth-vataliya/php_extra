<?php

trait Counter
{
    public function inc()
    {
        static $c = 0;
        $c = $c + 1;
        echo "$c\n";
    }
}

class C1
{
    use Counter;
}

class C2
{
    use Counter;
}

$o = new C1;
$o->inc(); // echo 1
$p = new C2;
$p->inc(); // echo 1
$p->inc();

trait HelloWorld
{
    public function sayHello()
    {
        echo 'Hello World!';
    }
}

// Change visibility of sayHello
class MyClass1
{
    use HelloWorld { sayHello as protected; }
}

// Alias method with changed visibility
// sayHello visibility not changed
class MyClass2
{
    use HelloWorld { sayHello as private myPrivateHello; }
}
